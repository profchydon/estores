<?php


    /**
     *
     */
    class Store
    {

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


    }




 ?>
