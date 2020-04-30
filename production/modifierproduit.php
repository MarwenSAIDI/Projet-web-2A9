<?PHP





include "produit.php";
include "produitC.php";

if(isset($_POST["idproduit"]))
{
	$idproduit=$_POST["idproduit"];
	$categorieproduit=$_POST["categorieproduit"];
	$nomproduit=$_POST["nomproduit"];
	$marqueproduit=$_POST["marqueproduit"];
	$quantiteproduit=$_POST["quantiteproduit"];
	$prixproduit=$_POST["prixproduit"];
	$code=$_POST["code"];


$produitC=new produitC();

$produitC->modifierproduit($idproduit,$nomproduit,$categorieproduit,$marqueproduit,$quantiteproduit,$prixproduit,$code);
header("location:afficher-produits.php");
}
else{ 
	echo "Erreur";
  }





?>