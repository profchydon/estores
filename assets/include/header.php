<!DOCTYPE html>
<html class="no-js" lang="en" ng-app="myApp">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Estores Team">
    <title> <?=$title;?> | Estores</title>

    <!-- Google Fonts -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Fira+Sans" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">

    <!-- Font Icons CSS -->
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css">

    <link rel="stylesheet" href="../assets/css/yeti-bootstrap-theme.min.css">

    <!-- Color style -->
    <link rel="stylesheet" href="../assets/css/main.css">

    <!-- js plugin -->
    <script src="../assets/js/angular.min.js"></script>
    <script src="../assets/js/app.js"></script>

</head>

<body>

  <nav class="navbar navbar-default">

    <div class="container-fluid">

      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header" id="home-nav">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">E-Stores</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">

        <div class="nav-row">


          <ul class="nav navbar-nav navbar-right">
             <!-- <li class="home-nav-li">Hi <?=$email;?></li> -->
             <li role="presentation" class="dropdown">
               <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                 <i class="fa fa-user" aria-hidden="true"></i> Hi <?=$email;?> <span class="caret"></span>
               </a>
               <ul class="dropdown-menu">
                 <li><a href="home.php">Dashboard</a></li>
                 <li><a href="stores.php">View Stores</a></li>
                 <li><a href="addstore.php">Add Stores</a></li>
                 <li role="separator" class="divider"></li>
                 <li><a href="../logout.php">Logout</a></li>
               </ul>
             </li>
          </ul>
        </div>

      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->

  </nav>

  <section class="home-landing">

     <h1 class="home-landing-h1 text-center"><?=$header?></h1>

  </section>
