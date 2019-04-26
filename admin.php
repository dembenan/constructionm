<?php
session_start();
	 $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $photo="";
try {
		$conn = new PDO("mysql:host=$servername;dbname=boutique", $username, $password);
										    
		 $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		 

										            
										              
										             
	 }
										 
	catch(PDOException $e)
	{
	 echo "Connection failed: " . $e->getMessage();
	}

if (isset($_SESSION['username']))
 {
	if (isset($_GET['action']))
	{
		
		if ($_GET['action']=='add') 
		{

			if (isset($_POST['submit']))
			 {
							
				$titre=$_POST['titre'];
				$description=$_POST['description'];
				$price=$_POST['price'];
				$category=$_POST['category'];

				$img=$_FILES['img']['name'];
				$img_tmp=$_FILES['img']['tmp_name'];
					if (!empty($img_tmp)) {

						$image=explode('.',$img);
						$image_ext=end($image);
						if (in_array(strtolower($image_ext),array('png','jpg','jpeg'))===false) {
							echo "veillez entrer une image en png ,jpeg ou jpg";
						}else{
							$image_size=getimagesize($img_tmp);
							if ($image_size['mime']=='image/jpeg') {
								$image_src=imagecreatefromjpeg($img_tmp);
							}elseif ($image_size['mime']=='image/jpg') 
							{
								$image_src=imagecreatefromjpg($img_tmp);
							}else if ($image_size['mime']=='image/png')
							{
								$image_src=imagecreatefrompng($img_tmp);
							}else{
								$image_src=false;
								echo "veillez entrer une image valide";
							}

							if ($image_src!==false) {
								$image_width=200;
								if ($image_size[0]==$image_width) {

									$image_finale=$image_src;
								}else{
									$new_width[0]=$image_width;
									$new_height[1]=200;
									$image_finale=imagecreatetruecolor($new_width[0],$new_height[1]);
									imagecopyresampled($image_finale, $image_src, 0, 0, 0,0, $new_width[0], $new_height[1], $image_size[0], $image_size[1]);

								}
								imagejpeg($image_finale,'imgs/'.$titre.'.jpg');
							}
						}
						
					}else{
						echo "veillez choisir une image pour le produit";
					}





					if ($titre&&$description&&$price) 
					{
						$insert = $conn->prepare("INSERT INTO products VALUES ('','$titre','$description','$price','category') ");
						$insert->execute();
					 }
					else{
						echo "veillez entrer tous les champs";
						}

					}	
					

					?>
								
								<div class="container">
									<h1 align="center">Ajout de produit</h1>
									<form method="POST" enctype="multipart/form-data">
									  <div class="form-group">
									    <label for="titre">titre du produit</label>
									    <input type="text" class="form-control" id="titre" name="titre" aria-describedby="emailHelp" >
									  </div>
									  <div class="form-group">
									  	<h3>category</h3>
									  	<select name="category">
									  		<?php

												$select=$conn->query("SELECT * FROM categories ");
												while ($s=$select->fetch(PDO::FETCH_OBJ)) {
													?>

														<option> <?php echo $s->name;  ?>  </option>

													<?php
												}



									  		  ?>
									  	</select>
									    
									  </div>

									  <div class="form-group">
									    <label for="description">description du produit</label>
									    <textarea type="text" class="form-control" id="description" name="description"></textarea> 
									  </div>
									  <div class="form-group">
									    <label for="price">prix</label>
									    <input type="text" class="form-control" id="price" name="price" >
									  </div>
									  <div class="form-group">
									    <label for="img">image produit</label>
									    <input type="file" class="form-control" id="img" name="img" >
									  </div>

									  
									  <button type="submit" name="submit" class="btn btn-primary">valider l'ajout</button>
								</form>
									
								</div>	

						<?php
					}elseif ($_GET['action']=='modifyanddelete') {

										
						 $select = $conn->prepare("SELECT * FROM products ");
						 $select->execute();
						 while ($s=$select->fetch(PDO::FETCH_OBJ)) {
						 	echo "<div class='container'>";
						 	echo $s->titre;
						 	?>
						 	
						 		<a class="btn btn-primary" href="?action=modify&amp;id=<?php echo $s->id ;?>">modifier</a>
						 		
						 		<a class="btn btn-danger" href="?action=delete&amp;id=<?php echo $s->id ;?>">Supprimer</a><br><br>


						 		
						 	</div>
						 		
						 	<?php
						 }
					}
					elseif ($_GET['action']=='modify') {
						# code...
					}elseif ($_GET['action']=='delete') {
						$id=$_GET['id'];

						$delete = $conn->prepare("DELETE FROM  products WHERE id=$id ");
						 $delete->execute();
					}else{
						die('une erreur s\'est produite');
					
					
					}
	}else{


		}

}else{
	header('lacation:../index.php');
}

 ?>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style type="text/css">
    	h1{
    		color: white;
    	}
    	label{
    		color: black;
    		font-size: 28px;
    		text-transform: capitalize;
    	} 
    	body{
    		background: #b6ef39;
    	}
    	textarea{
    		height: 100px;
    	}
    </style>



<div class="container">
	 <h1>bienvenue,<?php echo $_SESSION['username']; ?> </h1>
	 <a href="?action=add" class="btn btn-primary">Ajouter un produits</a>
	 <a href="?action=modifyanddelete" class="btn btn-danger">Modifier/Supprimer un produits</a>
	
</div>
