<?php

include "config.php";
class produitC
{
    function ajouterproduit($produit)
    {
        $sql= "insert into produit(idproduit,nomproduit,categorieproduit,marqueproduit,quantiteproduit,prixproduit,code) values (:idproduit,:nomproduit,:categorieproduit,:marqueproduit,:quantiteproduit,:prixproduit,:code)";
        $db = config::getConnexion();
        try
        {
            $req=$db->prepare($sql);

            $idproduit=$produit->getidproduit();
            $categorieproduit=$produit->getcategorieproduit();
            $nomproduit=$produit->getnomproduit();
            $marqueproduit=$produit->getmarqueproduit();
            $quantiteproduit=$produit->getquantiteproduit();
            $prixproduit=$produit->getprixproduit();
            $code=$produit->getcode();

            
           

          
            $req->bindValue(':idproduit',$idproduit);
            $req->bindValue(':categorieproduit',$categorieproduit);
            $req->bindValue(':nomproduit',$nomproduit);
            $req->bindValue(':marqueproduit',$marqueproduit);
            $req->bindValue(':quantiteproduit',$quantiteproduit);
            $req->bindValue(':prixproduit',$prixproduit);
            $req->bindValue(':code',$code);

            $req->execute();

        }
        catch (Exception $e)
        {
            die('Erreur: Un produit avec ce nom existe deja');

        }
    }
    function afficherproduit()
    {

        $sql="select * from produits.produit order by nomproduit asc";

        $db = config::getConnexion();
        try
        {
            $list=$db->query($sql);
            return $list;
        }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
    }
   

    function modifierproduit($idproduit,$nomproduit,$categorieproduit,$marqueproduit,$quantiteproduit,$prixproduit,$code)
    {
        
        $sql="UPDATE produits.produit SET nomproduit= '$nomproduit',categorieproduit= '$categorieproduit',marqueproduit= '$marqueproduit',quantiteproduit= '$quantiteproduit',prixproduit='$prixproduit',code= '$code' WHERE idproduit='$idproduit'";
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

    function supprimerproduit($idproduit)
    {
        $sql="DELETE FROM produits.produit where idproduit= '$idproduit'";
        $db = config::getConnexion();
       
      
        try{
            $req=$db->query($sql);
      
    }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
    }

    function rechercherproduit($idproduit)
    {
		$sql="SELECT * from produits.produit where idproduit=$idproduit";
		$db = config::getConnexion();
		try{
		$req=$db->query($sql);
		return $req;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    function trierproduit()
	{
		$sql = "SELECT * from produits.produit ORDER BY idproduit ASC";
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