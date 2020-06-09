<?PHP
include "categorie.php";
include "categorieC.php";

echo ($_POST['idcategorie']);
	if(isset($_POST['idcategorie']))
{
	
	$categorie1=new categorie ($_POST['idcategorie'],$_POST['categoriepromotion']);
	$categorieC=new categorieC();
	print_r($categorie1) ;
	$categorieC->ajoutercategorie($categorie1); 

	echo "ok";
	header("Location:afficher-categorie.php");
}
	

else{ 
	echo "Erreur";
  }


?>