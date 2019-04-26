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


 ?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

      <style type="text/css">

      /*navbar*/
        .navbar{
    background: #b6ef39 !important;
    font-size: 12px;
    letter-spacing: 4px;
    text-transform: uppercase;
    font-weight: bold;
   }
   img{
    width: 100%;
    height: 500px;
   }
   .navbar li a{
    color: #fff !important;

   }
   .navbar-dark li a:hover 
   {
    color: white !important;
    background-color: black !important ;
    transition: all 0.5s ease-in 0s !important;
   }
   .navbar-dark li.active a{

      color: black !important;
      background-color: #fff !important;
      transition: all 0.7s ease-in 0s !important;

   }


   .navbar-dark .navbar-brand{
    border-style: none;
   }
   .icon-bar{
    background-color: #fff;
   }
   /*pub*/
   .pub{

   }

   /*carousel*/
   .carousel-indicators li.active{
  background-color:white;
}

#mycarousel .item{
  padding: 50px 30px;
}
.item a{
  text-decoration: none;
  background: #d82c2e;
}
.item a:hover{
  background: lime;
  
}
.divider{
        width: 50%;height: 3px;background:#b6ef39;
        margin: 0px auto;
      }

.carousel-control-left,.carousel-control-right{
  background-image: none;
  background-color: lime;
}
#carousel{
  background:#ddd ;
}
/*section*/
#presentation{
  background: #fff;
  padding: 18px;
}
#presentation .heading h2{
  color: #b6ef39;
  text-transform: uppercase;
}
.block{
  width: 90%;
  height:auto;
  margin: 0 auto;
  text-align: center;
  padding: 30px;
  background: #ddd;
  border-radius: 10px;
  border: 2px solid #ccc;
  margin-bottom: 20px;
}
.block h5{
  color: #888;
  font-size: 15px;
  margin-bottom: 15px;
}
.block .glyphicon{
  font-size: 40px;
}
.block h3{
  color: #d82c2e;
}
.block h4{
  margin-bottom: 20px;
}
.block p{
  font-size: bold;

}
.block .red-divider{
  margin-bottom: 20px;
}
.preblock{
  height: 100px;
}



      </style>


    <title>Header</title>
  </head>
  
   


<nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-fixed-top">
  <a class="navbar-brand" href="#">contruction</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">acceuil <span class="sr-only"></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="boutique.php">boutique</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="register.php">s'inscrire</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="connect.php">se connecter</a>
      </li>
      
    
      <li class="nav-item">
        <a class="nav-link " href="condition.php">conditions generales de vente</a>
      </li>
    </ul>

    <form class="form-inline my-2 my-lg-0" action="" method="GET">
      <input class="form-control mr-sm-2" type="search" name="q" id="q" placeholder="recherche...." aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
        <span class="glyphicon glyphicon-search"></span>
      recherche</button>
    </form>
  </div>
</nav>
 <?php 

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

              /* $articles=$conn->query('SELECT titre FROM products  ORDER BY id DESC ');*/

                if (isset($_GET['q']) AND !empty($_GET['q']))
                 {
                      $q=htmlspecialchars($_GET['q']);
                      $articles=$conn->query('SELECT titre FROM products WHERE titre LIKE "%'.$q.'%" ORDER BY id DESC');

                 
        

                         if($articles->rowcount()>0){
                          ?>
                        <ul>
                          <?php 

                          while ($a=$articles->fetch()) {
                            ?>
                            <li> <a class="btn btn-warning" href="boutique.php "><?=$a['titre'] ?></a>   </li>
                           
                           <?php 
                         }
                           


                        ?>   
                        </ul>
                      <?php }else{ ?>
                        <p align="center" style="margin-top: 25px;"> aucun resultat pour: <?php  echo '<strong style="background-color:yellow; font-size:25px;">'.$q.'</strong>';  ?>  </p>

                     <?php }
                     }
                     ?>






    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
</html>