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
   	
	  
	  
	  
	  <? if(empty($_SESSION['admin'])): ?><div class="row">
			
	  		<div class="col-md-1"><a href="/admin">вход</a></div>
	  <? else: ?>
	  		
	  		<form enctype="multipart/form-data" action="/cabinet/sendimg" method="POST" >
			  <div class="form-group">
			    <label for="exampleInputEmail1">название</label>
			    <input type="email" name="nick" class="form-control" id="exampleInputEmail1" placeholder="название">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">описание</label>
			    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="описание">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputFile">Загрузка Изображения</label>
			    <input type="file" name="postfile" id="exampleInputFile">
			    <img id="image_upload_preview" src="http://placehold.it/100x100" alt="your image" />
			    <p class="help-block imgPre">Example block-level help text here.</p>
			  </div>
			  
			  <button type="submit" class="btn btn-default">Submit</button>
			</form>

	  		<div class="col-md-1"><a href="/logout">выход</a></div>



	  <? endif; ?>
	</div>
	
	
	


</div>

	
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script src="/template/js/script.js"></script>
  </body>
</html>