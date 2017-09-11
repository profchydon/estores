<?php

    require 'script.php';

 ?>

<!DOCTYPE html>
<html class="no-js" lang="en" ng-app="myApp">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Estores Team">
    <title> Home | Estores</title>

    <!-- Google Fonts -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Fira+Sans" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Font Icons CSS -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">

    <link rel="stylesheet" href="assets/css/yeti-bootstrap-theme.min.css">

    <!-- Color style -->
    <link rel="stylesheet" href="assets/css/main.css">

    <!-- js plugin -->
    <script src="assets/js/angular.min.js"></script>
    <script src="assets/js/app.js"></script>

</head>

<body>

  <nav class="navbar navbar-default">

    <div class="container-fluid">

      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" style="color: #01579b;"href="#">E-Stores</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

        <div class="nav-row">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#" data-toggle="modal" data-target="#signup">Sign up</a></li>
            <li><a href="#" data-toggle="modal" data-target="#signin">Sign in</a></li>
          </ul>
        </div>

      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->

  </nav>

  <section class="main-landing">

      <div class="landing-header text-center">
          <h1>Welcome to E-Stores</h1>
          <h2>Your number 1 stop shop</h2>
      </div>

  </section>

<!-- js placed at the end of the document so the pages load faster -->
<script src="assets/js/jquery.min.js"></script>

<script src="assets/js/bootstrap.min.js"></script>

<script src="assets/js/jquery.validate.min.js"></script>

<script src="assets/js/additional-methods.min.js"></script>

<script src="assets/js/formvalidate.js"></script>

<script src="assets/js/main.js"></script>

</body>

</html>

<?php
include 'assets/include/modal/signup.php';
include 'assets/include/modal/signin.php';
 ?>
