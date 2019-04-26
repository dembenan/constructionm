<?php

require_once('includes/header.php');
echo "<br>";

require_once('includes/sidebar.php');

 $select = $conn->prepare("SELECT * FROM products ");
 $select->execute();
	while ($s=$select->fetch(PDO::FETCH_OBJ))
	 {
						 	
		?>
		<div class="container" style="text-align: center;">
			<div class="row" >
					<img class="img-responsible" src="admin/imgs/<?php echo $s->titre; ?>.jpg ">
				<div class="caption">
					<h2 style="color: lime;"> <?php echo $s->titre; ?>   </h2>
						<h2 style="color: lime;"> <?php echo $s->titre; ?>   </h2>
					<h5 style="color: black;"> <?php echo $s->description; ?>   </h5>
					<h4 style="color: red;"> <?php echo $s->prix ; ?> FR  </h4>
			
						
					
					
					
				</div>
				
			</div>
			
		</div>
			
		<?php


	 }







require_once('includes/footer.php');





?>