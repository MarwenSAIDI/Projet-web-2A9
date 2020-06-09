<?php
require_once "config.php";
class PromotionC
{
	
    
    /*public function ajouterPromotion($e)
    {
    	$referance=$e->getRef();
    	$id_produit=$e->getId_produit();
    	$dateDebut=$e->getDateDebut();
    	$dateFin=$e->getDateFin();
        $pourcentage=$e->getPourcentage();
        

    	$sql = "INSERT INTO promotion (referance,id_produit,dateDebut,dateFin,pourcentage)
VALUES ('$referance','$id_produit',$dateDebut,$dateFin,$pourcentage')";

$c=config::getConnexion();
$c->exec($sql);

    }*/
    function ajouterpromotion($promotion)
    {
        $sql="insert into promotion (referance,id_produit,dateDebut,dateFin,pourcentage,categoriepromotion) values (:referance, :id_produit,:dateDebut,:dateFin,:pourcentage,:categoriepromotion)";
        $db = config::getConnexion();
        try{
        $req=$db->prepare($sql);
        $referance=$promotion->getreferance();
        $id_produit=$promotion->getid_produit();
        $dateDebut=$promotion->getdateDebut();
        $dateFin=$promotion->getdateFin();
        $pourcentage=$promotion->getpourcentage();
        $categoriepromotion=$promotion->getcategoriepromotion();
        $req->bindValue(':referance',$referance);
        $req->bindValue(':id_produit',$id_produit);
        $req->bindValue(':dateDebut',$dateDebut);
        $req->bindValue(':dateFin',$dateFin);
        $req->bindValue(':pourcentage',$pourcentage);
        $req->bindValue(':categoriepromotion',$categoriepromotion);
        
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
        
    }

    public function afficherpromotion()
    {
    	$c=config::getConnexion();
    	$sql = "SELECT * FROM promotion";

 return $result = $c->query($sql);

}
public function afficherUnpromotion()
    {
        
        $sql = "SELECT * FROM promotion ";
        $c=config::getConnexion();
       $result = $c->query($sql);
       

 return $result ;

 
   
    
       
}
function recupererpromotion($referance){
    $db = config::getConnexion();
    $sql = "SELECT * from promotion WHERE referance=$referance";
try{
$liste=$db->query($sql);
return $liste;
}
catch (Exception $e){
    die('Erreur: '.$e->getMessage());
}
    
    return $req;
}
/*public function RecupererProduit($referance){
		$sql="SELECT * from Produit where (referance=$referance)";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}*/
/*function getre()
{
    $c=config::getConnexion();
        $sql = "SELECT * FROM produit";

 return $result = $c->query($sql);
}*/
 public function supprimerpromotion($referance)	
 {
 	$c=config::getConnexion();
 	$sql = "DELETE  FROM `promotion` WHERE `referance`=:referance";
 	$req= $c->prepare($sql);
 	$req->bindValue(':referance',$referance);
$req->execute();

 }

        function modifierpromotion($referance,$id_produit,$dateDebut,$dateFin,$pourcentage,$categoriepromotion)
    {
        
        $sql="UPDATE promotion.promotion SET referance= '$referance',id_produit= '$id_produit',dateDebut= '$dateDebut',dateFin= '$dateFin',pourcentage='$pourcentage',categoriepromotion=$categoriepromotion";
        $db = config::getConnexion();
       
        try
        {
            $db->query($sql);
        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
            
    }
        
  function rechercherpromotion($referance)
    {
        $sql="SELECT * from promotion.promotion where referance=$referance";
        $db = config::getConnexion();
        try{
        $req=$db->query($sql);
        return $req;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    function trierpromotion()
    {
        $sql = "SELECT * from promotion.promotion ORDER BY referance ASC";
        $db = config::getConnexion();
        try {
            $req = $db->query($sql);
            return $req;
        } catch (Exception $e)
         {
            die('Erreur: ' . $e->getMessage());
        }
    }
}



?>  



