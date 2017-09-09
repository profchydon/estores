
<?php
    session_start();
    require '../script.php';
    $email = htmlentities(strip_tags(trim($_SESSION['email'])));
    $title = "Dashboard";
    $header = "Welcome to E-Stores";
    include '../assets/include/header.php';
 ?>

   <section class="store-holder">

        <h2 class="who-we-are text-center">WHO WE ARE</h2>
        <h5 class="who-we-are-des text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h5>

   </section>

<?php

    include '../assets/include/footer.php';

 ?>
