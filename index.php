<?php 
session_start();
$adminuser='adminuser';
$adminpass='adminpass';

if (isset($_POST['submit'])) {
	$username=$_POST['username'];
	$password=$_POST['password'];
	if ($username && $password) {
		if ($username==$adminuser&&$password==$adminpass) {
			$_SESSION['username']=$username;
			header('location:admin.php');
			
		}else echo "mauvais nom d'utilisateur ou mot de pass ";
	}
	else echo "veillez remplir tous les champs ";


}


 ?>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
    	h1{
    		color: #fff;

    	}
    	label{
    		color: black;
    		font-size: 28px;
    		text-transform: capitalize;
    	}
    </style>

<div class="container" style="background: #b6ef39;">
	<h1 align="center">Connection Administrateur</h1>
	<form method="POST">
  <div class="form-group">
    <label for="username">nom d'utilisateur</label>
    <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp" placeholder="Enter nom d'utilisateur">
  </div>
  <div class="form-group">
    <label for="password">mot de pass</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
  </div>
  
  <button type="submit" name="submit" class="btn btn-primary">se connecter</button>
</form>
	
</div>
