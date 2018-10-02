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
   	
	  
	  <div class="col-md-1">.col-md-1</div>
	  <div class="col-md-1">.col-md-1</div>
	  <div class="col-md-1">.col-md-1</div>
	  <div class="col-md-1">.col-md-1</div>
	  <div class="col-md-1">.col-md-1</div>
	  <div class="col-md-1">.col-md-1</div>
	  <div class="col-md-1">.col-md-1</div>
	  <div class="col-md-1">.col-md-1</div>
	  <div class="col-md-1">.col-md-1</div>
	  <div class="col-md-1">.col-md-1</div>
	  <div class="col-md-1">.col-md-1</div>
	  
	  <? if(empty($_SESSION['admin'])): ?><div class="row">
			<?
	  			//print_r($_SESSION['admin']);
	  		?>
	  		<div class="col-md-1"><a href="/admin">вход</a></div>
	  <? else: ?>
	  		 <?
	  			print_r($_SESSION['admin']);
	  		?>
	  		<div class="col-md-1"><a href="/logout">выход</a></div>
	  <? endif; ?>
	</div>
	
	
	<div class="row">
	  <div class="col-md-2"><img src="https://avatars.mds.yandex.net/get-pdb/33827/36b08a80-39c0-42d3-8d22-60b625edb3c5/s1200" alt="..." class="img-thumbnail"></div>
	  <div class="col-md-2"><img src="https://avatars.mds.yandex.net/get-pdb/33827/36b08a80-39c0-42d3-8d22-60b625edb3c5/s1200" alt="..." class="img-thumbnail"></div>
	  <div class="col-md-2"><img src="https://avatars.mds.yandex.net/get-pdb/33827/36b08a80-39c0-42d3-8d22-60b625edb3c5/s1200" alt="..." class="img-thumbnail"></div>
	  <div class="col-md-2"><img src="https://avatars.mds.yandex.net/get-pdb/33827/36b08a80-39c0-42d3-8d22-60b625edb3c5/s1200" alt="..." class="img-thumbnail"></div>
	  <div class="col-md-2"><img src="https://avatars.mds.yandex.net/get-pdb/33827/36b08a80-39c0-42d3-8d22-60b625edb3c5/s1200" alt="..." class="img-thumbnail"></div>
	  
	</div>
	<div class="row">
	  <div class="col-md-2"><img src="https://avatars.mds.yandex.net/get-pdb/33827/36b08a80-39c0-42d3-8d22-60b625edb3c5/s1200" alt="..." class="img-thumbnail"></div>
	  <div class="col-md-2"><img src="https://avatars.mds.yandex.net/get-pdb/33827/36b08a80-39c0-42d3-8d22-60b625edb3c5/s1200" alt="..." class="img-thumbnail"></div>
	  <div class="col-md-2"><img src="https://avatars.mds.yandex.net/get-pdb/33827/36b08a80-39c0-42d3-8d22-60b625edb3c5/s1200" alt="..." class="img-thumbnail"></div>
	  <div class="col-md-2"><img src="https://avatars.mds.yandex.net/get-pdb/33827/36b08a80-39c0-42d3-8d22-60b625edb3c5/s1200" alt="..." class="img-thumbnail"></div>
	  <div class="col-md-2"><img src="https://avatars.mds.yandex.net/get-pdb/33827/36b08a80-39c0-42d3-8d22-60b625edb3c5/s1200" alt="..." class="img-thumbnail"></div>
	  
	</div>
	<div class="row">
	  <div class="col-md-2"><img src="https://avatars.mds.yandex.net/get-pdb/33827/36b08a80-39c0-42d3-8d22-60b625edb3c5/s1200" alt="..." class="img-thumbnail"></div>
	  <div class="col-md-2"><img src="https://avatars.mds.yandex.net/get-pdb/33827/36b08a80-39c0-42d3-8d22-60b625edb3c5/s1200" alt="..." class="img-thumbnail"></div>
	  <div class="col-md-2"><img src="https://avatars.mds.yandex.net/get-pdb/33827/36b08a80-39c0-42d3-8d22-60b625edb3c5/s1200" alt="..." class="img-thumbnail"></div>
	  <div class="col-md-2"><img src="https://avatars.mds.yandex.net/get-pdb/33827/36b08a80-39c0-42d3-8d22-60b625edb3c5/s1200" alt="..." class="img-thumbnail"></div>
	  <div class="col-md-2"><img src="https://avatars.mds.yandex.net/get-pdb/33827/36b08a80-39c0-42d3-8d22-60b625edb3c5/s1200" alt="..." class="img-thumbnail"></div>
	  
	</div>


</div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    
  </body>
</html>