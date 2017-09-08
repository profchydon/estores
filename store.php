<?php

    $store = new Store($Database = new Database);

    if (isset($_POST['add-store'])) {

      $response = $store->addStore();

      if ($response == "Thanks.. Your store was succesfully registered") {

        echo "Thanks.. Your store was succesfully registered";

      }elseif ($response == "Oops! Sorry an error occured. Please try again") {

        echo "Oops! Sorry an error occured. Please try again";

      }

    }


 ?>
