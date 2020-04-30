<?PHP
include "produit.php";
include "produitC.php";
	$produit1C=new produitC();
	if (isset($_POST["idproduit"])){
	
		$produit1C->supprimerproduit($_POST["idproduit"]);
		
		header('Location: afficher-produits.php');
	}
?>
  