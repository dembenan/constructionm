
<?php 
			Require_once('includes/header.php');
			if (isset($_POST['submit']))
				 {
						$username=$_POST['pseudo'];
						$email=$_POST['email'];
						$password=$_POST['password'];
						$rpassword=$_POST['rpassword'];
						if ($username&&$email&&$password&&$rpassword) 
						{
							if ($password==$rpassword) {

								$conn->query("INSERT INTO users VALUES ('','$username','$email','$password' ) ");
								echo ' <h4 style="color:green"> Votre compte a bien éte creé vous pouvez vous connecté <a href="connect.php"> connexion</a></h4>';

								
							}else{

								echo '<h4 style="color:red"> les deux mot de pass ne sont different</h4>';
							}






					}else{
						echo ' <h4 style="color:red">  veillez remplir tous les champs</h4>';
					}
				}	

 ?>





  				 <div class="container">
									<h1 align="center">S'enregistrer</h1>
							<form method="POST" enctype="multipart/form-data">
									  <div class="form-group">
									    <label for="pseudo">pseudo</label>
									    <input type="text" class="form-control" id="pseudo" name="pseudo" aria-describedby="emailHelp" placeholder="choisissez un pseuso" >
									  </div>
									 

									  
									  <div class="form-group">
									    <label for="email">E-mail</label>
									    <input type="email" class="form-control" id="email" name="email" placeholder="votre email" >
									  </div>
									  <div class="form-group">
									    <label for="password">mot de pass</label>
									    <input type="password" class="form-control" id="password" name="password" placeholder="choisissez un mot de pass" >
									  </div>
									  <div class="form-group">
									    <label for="rpassword">confirmez mot de pass</label>
									    <input type="password" class="form-control" id="rpassword" name="rpassword" placeholder="reppetez mot de pass" >
									  </div>

									  
									  <button type="submit" name="submit" class="btn btn-primary">validé</button>
						</form>

									
				</div><br><br>
				<a class="btn btn-warning" href="connect.php">Se connecter</a><br><br>

				<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
				    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
				    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
				    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
				  
						

				<?php Require_once('includes/footer.php');  ?>

