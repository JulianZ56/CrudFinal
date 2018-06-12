<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8"> 
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	
 	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  	<link rel="shortcut icon" href="../favicon.ico" >
	<title>Final</title>
	
	
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
 

	


</head>
<body style="background-color: #A3C2BD">
<div style="margin-top: 10px" style="align-content: center"></div>

<nav style="background: #30907C;border-color: #767C76" class="navbar navbar-inverse">
  <div align="center" >
      <ul class="nav nav-pills">
      <li class="active">
     
      <li style="font-size: 20px"><a style="color: #050505" href="{{url('/Responsable')}}">Responsables</a></li>
      <li style="font-size: 20px"><a style="color: #050505" href="{{url('/Tramite')}}">Tramites</a></li>

      </li>
    </ul>
  </div>
</nav>

  <hr style="color: red">


<div class="container">
	<div class="row">
		<div class="col">
			
		</div>
	</div>
</div>


@yield('content')

<br><br><br><br><br><br><br><br><br><br><br><br>

<div class="container">
	<div class="row">
		<div class="col">
			<footer>
			
			
				<h5>Desarrollado por: <b>Julian Lozano, </b> <b>Braian Trejos</b></h5>
			</footer>
		</div>
	</div>
</div>



</body>
</html>