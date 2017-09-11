<?php

    require 'assets/interface/LoginInterface.php';
    require 'assets/interface/RegisterInterface.php';
    require 'assets/class/Database.php';
    require 'assets/class/User.php';
    require 'assets/class/Store.php';
    require 'user.php';
    require 'store.php';

    // CSRF protection
    // Create token to authenticate for deleting store
    $_SESSION['delete_token'] = bin2hex(openssl_random_pseudo_bytes(16));

    // Create token to authenticate for editing store
    $_SESSION['edit_token'] = bin2hex(openssl_random_pseudo_bytes(16));

 ?>
