	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style type="text/css">
    	.sidebar{
    		 background-color: lime;
    		 float: right;
    		width: 350px;
    		/* height: 400px;*/
    		 margin-top: 10px;
    		 
    		 border: 2px solid black;
    	
    		
    	}

    	.sidebar h4{
    		color: 
    	}

    	
    </style>






<div class="sidebar">
	<h4 align="center" style="color: red;" >Derniers articles</h4>
	
	<?php 


		 $select = $conn->prepare("SELECT * FROM products ORDER BY id DESC LIMIT 0,2 ");
		 $select->execute();
			while ($s=$select->fetch(PDO::FETCH_OBJ))
			 {
						 	
		?>
			<img class="img-responsible" src="admin/imgs/<?php echo $s->titre; ?>.jpg ">
			<div class="caption">
				<h2 style="color: white;"> <?php echo $s->titre; ?>   </h2>
				<h5 style="color: black;"> <?php echo $s->description; ?>   </h5>
				<h4 style="color: black;"> <?php echo $s->prix; ?>   </h4>
				

			</div>
			
		<?php


	 }





	 ?>

	
</div>