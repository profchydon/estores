<?php

    /**
     *
     */
    class Store
    {

      /**
      * @var name
      **/
      public $name;

      /**
      * @var email
      **/
      public $address;

      /**
      * @var password
      **/
      public $mobile;

      /**
      * @var image
      **/
      public $image;

      /**
      * @var connection
      **/
      public $connection;

      /**
       * @param class database
       * call the createConnection function to connect to the Database for every instance of a store
       */
      public function __construct(Database $database)
      {

          try {

              $this->connection = $database->createConnection();

          } catch (Exception $e) {

              echo "Error in database connection ";

          }

      }

      /**
       * @return String
       */
      public function addStore () {

          try {

              $this->name = htmlentities(strip_tags(trim($_POST['name'])));
              $this->address = htmlentities(strip_tags(trim($_POST['address'])));
              $this->mobile = htmlentities(strip_tags(trim($_POST['mobile'])));

              $addStore = $this->connection->prepare('INSERT into store (name , address, mobile) values (:name, :address, :mobile)');
              $addStore->bindParam(':name' , $this->name);
              $addStore->bindParam(':address' , $this->address);
              $addStore->bindParam(':mobile' , $this->mobile);

              $add = $addStore->execute();

              if ($add) {

                  echo "Thanks.. Your store was succesfully registered";

              }else {

                  echo "Oops! Sorry an error occured. Please try again";

              }

          } catch (Exception $e) {

          }


      }

      /**
       * @return Array
       */
      public function getStores()
      {

          try {

            $getStores = $this->connection->prepare('SELECT * FROM store');

            if ($getStores->execute()) {

                $stores = $getStores->fetchAll(PDO::FETCH_ASSOC);

                return $stores;

              }

          } catch (Exception $e) {

          }


      }


      /**
       * @return Boolean
       */
      public function deleteStore($id)
      {

          try {

            $getStores = $this->connection->prepare('DELETE FROM store where id = :id');
            $getStores->bindParam(':id' , $id);

            if ($getStores->execute()) {

                return true;

            }else {

                return false;

            }

          } catch (Exception $e) {

          }


      }

      /**
       * @param name
       * @param file temp
       * @param file ext
       * @return String
       */
      public function uploadimage($name, $file_temp, $file_ext) {

          try {

            $file_path = "assets/img/store/" . substr(md5(time()), 0 , 10) . "." . $file_ext;
            move_uploaded_file($file_temp,$file_path);
            $query = $this->connection->prepare('UPDATE store SET image =:image WHERE name=:name');
            $query->bindParam(':image' , $file_path);
            $query->bindParam(':name' , $name);

            if ($query->execute()) {

              echo "Thanks.. Your store was succesfully registered";

          }else {

              echo "Oops! Sorry an error occured. Please try again";

            }

          } catch (Exception $e) {

          }


      }

      public function updateStore () {

        $this->name = htmlentities(strip_tags(trim($_POST['name'])));
        $this->address = htmlentities(strip_tags(trim($_POST['address'])));
        $this->mobile = htmlentities(strip_tags(trim($_POST['mobile'])));
        $this->id = htmlentities(strip_tags(trim($_POST['id'])));

        $query = $this->connection->prepare('UPDATE store SET name = :name, address = :address, mobile = :mobile WHERE id = :id');

        $query->bindParam(':name' , $this->name);
        $query->bindParam(':address' , $this->address);
        $query->bindParam(':mobile' , $this->mobile);
        $query->bindParam(':id' , $this->id);

        if ($query->execute()) {

            echo "Changes successful done";

        }else {

            echo "Oops! Sorry an error occured. Please try again";

        }

      }

  }


 ?>
