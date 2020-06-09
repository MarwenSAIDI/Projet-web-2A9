<?PHP
include "categorie.php";
include "categorieC.php";
	$categorieC=new categorieC();
	if (isset($_POST["idcategorie"]))
	{
	
		$categorieC->supprimercategorie($_POST["idcategorie"]);
		
		header('Location: afficher-categorie.php');
	}
?>
  