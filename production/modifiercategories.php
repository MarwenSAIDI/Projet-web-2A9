<?PHP
include "categories.php";
include "categoriesC.php";

if(isset($_POST["idcategorie"]))
	{
		$idcategorie=$_POST["idcategorie"];
		$categorieproduit=$_POST["categorieproduit"];
		
		$categorieC=new categorieC();		
		$categorieC->modifiercategorie($idcategorie,$categorieproduit);
		header("location:afficher-categories.php");
	}
else
	{ 
	echo "Erreur";
	}

?>
