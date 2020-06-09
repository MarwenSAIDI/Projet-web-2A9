<?PHP
include "promotion.php";
include "promotionC.php";
	$promotion1C=new promotionC();
	if (isset($_POST["referance"])){
	
		$promotion1C->supprimerpromotion($_POST["referance"]);
		
		header('Location: afficher-promotion.php');
	}
?>