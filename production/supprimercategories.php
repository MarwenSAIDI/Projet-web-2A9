<?PHP
include "categories.php";
include "categoriesC.php";
	$categorieC=new categorieC();
	if (isset($_POST["idcategorie"])){
	
		$categorieC->supprimercategorie($_POST["idcategorie"]);
		
		header('Location: afficher-categories.php');
	}
?>
  