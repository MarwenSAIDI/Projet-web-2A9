<?PHP
include "produit.php";
include "produitC.php";

echo ($_POST['idproduit']);
	if(isset($_POST['idproduit']))
{
	
	$produit1=new Produit($_POST['idproduit'],$_POST['nomproduit'],$_POST['categorieproduit'],$_POST['marqueproduit'], $_POST['quantiteproduit'],$_POST['prixproduit'],$_POST['code']);
	$produit1C=new produitC();
	print_r($produit1) ;
	$produit1C->ajouterproduit($produit1); 

	echo "ok";
	header("Location:afficher-produits.php");
}
	

else{ 
	echo "Erreur";
  }


?>