<?php

    $store = new Store($Database = new Database);

    $stores = $store->getStores();

    // Lets add a store
    if (isset($_POST['add-store'])) {

      $response = $store->addStore();

      if ($response == "Thanks.. Your store was succesfully registered") {

        echo "Thanks.. Your store was succesfully registered";

      }elseif ($response == "Oops! Sorry an error occured. Please try again") {

        echo "Oops! Sorry an error occured. Please try again";

      }

    }

    if (isset($_POST['back'])) {

      $store->redirect('view/stores.php');

    }

    // Change Store details
    if (isset($_POST['change'])) {

        $response = $store->updateStore();

        if ($response == "Changes successful done") {

          $store->redirect('view/stores.php');

        }elseif ($response == "Oops! Sorry an error occured. Please try again") {

          $store->redirect('view/stores.php');

        }

    }

    if (isset($_POST['upload'])) {

        if (isset($_FILES['store-image'])) {

            if (empty($_FILES['store-image']['name'])) {

                echo "Pls choose a file";

            }
            else {

                $allowed   = array('jpeg' , 'jpg' ,'png');

                $file_name = $_FILES['store-image']['name'];

                $file_ext = explode('.' , $file_name);

                $name = htmlentities(strip_tags(trim($_SESSION['store_name'])));

                $file_ext = strtolower(end($file_ext));

                $file_temp  = $_FILES['store-image']['tmp_name'];

                if (in_array($file_ext, $allowed)) {

                    $response = $store->uploadimage($name, $file_temp, $file_ext);

                    if ($response == "Thanks.. Your store was succesfully registered") {

                        echo "Thanks.. Your store was succesfully registered";

                    }elseif ($response == "Oops! Sorry an error occured. Please try again") {

                        echo "Oops! Sorry an error occured. Please try again";

                    }

                }
                else {
                  $upload_error =  "unacceptable file format. Only " . " " . implode(', ' , $allowed) . " are allowed";
                }

            }

        }

      }

 ?>
