<?PHP
include "promotion.php";
include "promotionC.php";

echo ($_POST['referance']);
	if(isset($_POST['referance']))
{
	
	$promotion1=new Promotion($_POST['referance'],$_POST['id_produit'],$_POST['dateDebut'],$_POST['dateFin'], $_POST['pourcentage'],$_POST['categoriepromotion']);
	$promotion1C=new promotionC();
	print_r($promotion1);
	$promotion1C->ajouterpromotion($promotion1); 

	echo "ok";
	header("Location:afficher-promotion.php");
}
	

else{ 
	echo "Erreur";
  }


?>