<?php

    session_start();
    session_destroy();
    require 'script.php';
    $user->redirect('index.php');

 ?>
