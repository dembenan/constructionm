
<?php

Require_once('includes/header.php'); 


	

		if (isset($_POST['submit']))
				 {
						
						$email=$_POST['email'];
						$password=$_POST['password'];
						
						if ($email&&$password) 
						{
							

							$result=$conn->query("SELECT id FROM users WHERE email='$email' ");
							if ($result->fetchColumn()) {
								


								$select=$conn->query("SELECT * FROM users WHERE email='$email' ");
								echo "  <h1 style='color:green;' > bienvenue '.$email.' vous etre bien connecter  </h1>";
/*
								$result=$select->fetch(PDO::FETCH_OBJ);

								
								$_SESSION['user_id']=$result->id;
								$_SESSION['user_email']=$result->email;
								$_SESSION['user_password']=$result->pass;
								*/

								







								
							}else{
								echo ' <h4 style="color:red"> desolé mauvais email </h4>';

							}

								

								
						}else{
						echo ' <h4 style="color:red">  veillez remplir tous les champs</h4>';
					}
				}




					
				


 ?>




<div class="container">
									<h1 align="center">Se connecter</h1>
							<form method="POST" enctype="multipart/form-data" action="">
									  <div class="form-group">
									    <label for="email">email</label>
									    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="entrer votre email" >
									  </div>
									 

									  
									  
									  <div class="form-group">
									    <label for="password">mot de pass</label>
									    <input type="password" class="form-control" id="password" name="password" placeholder="choisissez un mot de pass" >
									  </div>
									  

									  
									  <button type="submit" name="submit" class="btn btn-warning">connexion</button>
						</form>

				</div><br><br>
				<a style="text-align: center;" class="btn btn-primary" href="register.php">S'incrire</a>
				<br><br>
								

				<?php 


				

				Require_once('includes/footer.php'); 


				 ?>

