<?PHP
include "categorie.php";
include "categorieC.php";

if(isset($_POST["idcategorie"]))
	{
		$idcategorie=$_POST["idcategorie"];
		$categoriepromotion=$_POST["categoriepromotion"];
		
		$categorieC=new categorieC();		
		$categorieC->modifiercategorie($idcategorie,$categoriepromotion);
		header("location:afficher-categorie.php");
	}
else
	{ 
	echo "Erreur";
	}

?>