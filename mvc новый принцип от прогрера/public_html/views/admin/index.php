<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>Carousel Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
   
    <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

	

    

    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
  </head>
<!-- NAVBAR
================================================== -->
  <body>
   <div class="container"> <!-- Раздельная кнопка -->  
   	<? if(empty($_SESSION['admin'])): ?>
          <form class="form-inline" method="Post">
          <div class="form-group">
            <label class="sr-only" for="exampleInputEmail3">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail3" placeholder="Email">
          </div>
          <div class="form-group">
            <label class="sr-only" for="exampleInputPassword3">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword3" placeholder="Password">
          </div>
          <div class="checkbox">
            <label>
              <input type="checkbox"> Remember me
            </label>
          </div>
          <button type="submit" class="btn btn-default">Sign in</button>
        </form>
    <? else: ?>

          <div class="jumbotron">
            <h1>Привет, <?=$_SESSION['admin']?>!</h1>
            
            <p><a href="/rez" class="btn btn-primary btn-lg" role="button">Перейти в Кабинет</a></p>
            
          </div>

    <? endif; ?>


</div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    
  </body>
</html>