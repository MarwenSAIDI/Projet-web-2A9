<?PHP
include "promotion.php";
include "promotionC.php";

if (isset($_POST["referance"])){
	$promotionC=new promotionC();
                                      

	$referance=$_POST["referance"];
		$id_produit=$_POST["id_produit"];
		$dateDebut=$_POST["dateDebut"];
		$dateFin=$_POST["dateFin"];
		$pourcentage=$_POST["pourcentage"];
    $categoriepromotion=$_POST["categoriepromotion"];

$promotionC=new promotionC();
	$promotionC->modifierpromotion($referance,$id_produit,$dateDebut,$dateFin,$pourcentage,$categoriepromotion);

	echo "ok";
	header("Location:afficher-promotion.php");
}
else{ 
	echo "Erreur";
  }

 /*if (isset($_GET['referance'])){
	$promotionC=new promotionC();
  $result=$promotionC->recupererpromotion($_GET['referance']);
	foreach($result as $row){
		$referance=$row['referance'];
		$id_produit=$row['id_produit'];
		$dateDebut=$row['dateDebut'];
    $dateFin=$row['dateFin'];
    $pourcentage=$row['pourcentage'];
		
 

<div class="content-wrapper">
   
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ul class="breadcrumb">
        
        <li class="breadcrumb-item active">Modifier promotion</li>
      </ul>
      <!-- Example DataTables Card-->

      <div class="card card-register mx-auto mt-5">
      <div class="card-header">Modifier promotion</div>
      <div class="card-body">
        <form method="POST" >
          <div class="form-group">
            <div class="form-row">

              
                <label for="exampleInputName">Reference</label>
                <input class="form-control" name="referance" type="number" aria-describedby="nameHelp" value="<?PhP echo $referance ?>">
              
			  </div>
			  <div class="form-row">
              
                <label for="exampleInputLastName">id_produit du promotion</label>
                <input class="form-control" name="id_produit"  type="text" aria-describedby="nameHelp" value="<?PhP echo $id_produit ?>" >
              
            </div>
          </div>
          <div class="form-group">
		  
            <label for="exampleInputEmail1">dateDebut</label>
            <input class="form-control" name="dateDebut" type="date" aria-describedby="emailHelp" value="<?PhP echo $dateDebut ?>" >
          </div>
          <div class="form-group">
			  <div class="form-row">
              
                <label for="exampleConfirmPassword">dateFin</label>
                <input class="form-control" name="dateFin" type="date" value="<?PhP echo $dateFin ?>" >
              </div>
    
              <div class="form-row">
              <p>
              <label for="pourcentage">pourcentage</label><br />
              <textarea name="pourcentage" id="pourcentage"  type="text" value="<?PhP echo $pourcentage ?>"> </textarea>

</p>
              </div>
              </div>
          </div>
     
<input type="hidden" name="reference_ini" value="<?PHP echo $_GET['referance'];?>">
  
         
               <input class="form-control" type="submit" name="modifier" value="modifier">

            <li><a href="afficherpromotion.php">Afficher promotion</a></li>
        </form>
       
      
    </div>
      
    </div>
    </div>

	<?php

}
}
if (isset($_POST['modifier']))
{
	
	$promotion=new promotion($_POST['referance'],$_POST['id_produit'],$_POST['dateDebut'],$_POST['dateFin'],$_POST['pourcentage']);
  $promotionC->modifierpromotion($promotion,$_POST['reference_ini']);

	header("Location:afficher-promotion.php");
} */


?>