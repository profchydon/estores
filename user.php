<?php

    $user = new User($Database = new Database);

    if (isset($_POST['signup'])) {

      $response = $user->register();

      if ($response == "The email " .$user->email. " already exist") {

        echo "The email " .$this->email. " already exist";

      }elseif ($response == "Successful") {

        echo "Thank you for registering with estores";

      }elseif ($response == "Oops! Sorry an error occured. Please try again") {

        echo "Oops! Sorry an error occured. Please try again";

      }

    }

    if (isset($_POST['signin'])) {

        $response = $user->login();

        if ($response == "Login successful") {

          echo "Login successful";

        }elseif ($response = "Incorrect user Credentials") {

          echo "Incorrect user Credentials";

        }elseif ($response = "Oops! Sorry an error occured. Please try again") {

          echo "Oops! Sorry an error occured. Please try again";

        }

    }

 ?>
