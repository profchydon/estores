<?php

    /**
     *   User class
     */
    class User implements RegisterInterface , LoginInterface
    {

        /**
        * @var name
        **/
        public $name;

        /**
        * @var email
        **/
        public $email;

        /**
        * @var password
        **/
        public $password;

        /**
        * @var hashed password
        **/
        public $hashed_password;

        /**
        * @var hashed password
        **/
        private $password_fetched = false;

        /**
        * @var connection
        **/
        public $connection;

        /**
         * @param class database
         * call the createConnection function to connect to the Database for every instance of a user
         */
        public function __construct(Database $database)
        {

            try {

                $this->connection = $database->createConnection();

            } catch (Exception $e) {

                echo "Error in database connection ";

            }

        }

        public function emailExist ()
        {

            $this->email = htmlentities(strip_tags(trim($_POST['email'])));

            try {

                $query = $this->connection->prepare('SELECT count(id) from user where email = :email');
                $query->bindParam(':email', $this->email);
                $query->execute();
                $count = $query->fetchColumn();

                if ($count == "1") {

                    return true;
                }
                else {

                    return false;
                }

            } catch (Exception $e) {

            }

        }



        /**
         * @return boolean
         */
        public function register ()
        {
            try {

              $this->name = htmlentities(strip_tags(trim($_POST['name'])));
              $this->email = htmlentities(strip_tags(trim($_POST['email'])));
              $this->password = htmlentities(strip_tags(trim($_POST['password'])));
              $this->hashed_password = password_hash(htmlentities(strip_tags(trim($_POST['password']))) , PASSWORD_DEFAULT);

              $registerUser = $this->connection->prepare('INSERT into user (name , email, password) values (:name, :email, :password)');
              $registerUser->bindParam(':name' , $this->name);
              $registerUser->bindParam(':email' , $this->email);
              $registerUser->bindParam(':password' , $this->hashed_password );

              $emailexist = $this->emailExist($this->email);

              if ($emailexist) {

                  echo "The email " .$this->email. " already exist";

              }else {

                  $register = $registerUser->execute();

                  if ($register) {

                      echo "Successful";

                  }else {

                      echo "Oops! Sorry an error occured. Please try again";

                  }

              }

            } catch (Exception $e) {

            }

        }


        /**
         *  Fetch user's password from database to be used for password verification
         */
        function passwordFetch($email)
        {

            try {

                $query = $this->connection->prepare('SELECT password from user where email = :email');
                $query->bindParam(':email', $email);
                $query->bindColumn('password', $password);
                $query->execute();
                $query->fetchColumn();
                return $password;

            } catch (Exception $e) {

            }

        }


        /**
         * @return boolean
         */
        public function login ()
        {

          try {

              $this->email = htmlentities(strip_tags(trim($_POST['email'])));

              $this->password = htmlentities(strip_tags(trim($_POST['password'])));

              $this->hashed_password = $this->passwordFetch($this->email);

              $this->password_fetched = password_verify($this->password, $this->hashed_password);

              if ($this->password_fetched == false) {

                  $response = "Incorrect user Credentials";
                  return $response;

              }else {

                $query = $this->connection->prepare('SELECT count(id) from user where email = :email AND password = :password');
                $query->bindParam(':email' , $this->email);
                $query->bindParam(':password' , $this->hashed_password);
                $query->execute();
                $count = $query->fetchColumn();

                if ($count == "1") {

                    session_start();

                    $_SESSION ['email'] = $this->email;

                    $response = "Login successful";
                    return $response;


                }else {

                  $response = "Oops! Sorry an error occured. Please try again";
                  return $response;

                }

              }

          } catch (Exception $e) {



          }

        }


        /**
         * redirects to desired page
         */
        public function redirect($location)
        {

            header("Location: " . $location);

        }

        public function uploadImage ($name, $file_temp, $file_ext) {

          $file_path = "assets/img/store/" . $name . "." . $file_ext;
          move_uploaded_file($file_temp,$file_path);

          $query = $this->connection->prepare('UPDATE store SET image = :image WHERE name =:name');
          $query->bindParam(':image' , $file_path);
          $query->bindParam(':name' , $name);
          if ($query->execute()) {
              echo "success";
          }else {
              echo "failed";
          }
      }


    }



 ?>
