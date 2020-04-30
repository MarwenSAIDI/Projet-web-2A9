<?PHP
include "categories.php";
include "categoriesC.php";

echo ($_POST['idcategorie']);
	if(isset($_POST['idcategorie']))
{
	
	$categorie1=new categorie ($_POST['idcategorie'],$_POST['categorieproduit']);
	$categorieC=new categorieC();
	print_r($categorie1) ;
	$categorieC->ajoutercategorie($categorie1); 

	echo "ok";
	header("Location:afficher-categories.php");
}
	

else{ 
	echo "Erreur";
  }


?>