<?php

    if ($_SERVER['REQUEST_METHOD'] === 'GET') {

        session_start();
        $delete_token = $_SESSION['delete_token'];
        $token_from_url = htmlentities(strip_tags(trim($_GET['token'])));

        // Lets prevent CSRF attack
        if ($delete_token == $token_from_url) {

          require 'assets/class/Database.php';
          require 'assets/class/Store.php';
          $delete_store = new Store($Database = new Database);
          $id = htmlentities(strip_tags(trim($_GET['id'])));
          $response = $delete_store->deleteStore($id);

          if ($response) {

              header("Location: view/stores.php");

          }else {

              header("Location: view/stores.php");

          }

        }else {

            header("Location: view/stores.php");

        }


    }else {

        header("Location: logout.php");

    }




 ?>
