<?php

include "config.php";
class categorieC
{
    function ajoutercategorie($categorie)
    {
        $sql= "insert into categorie (idcategorie,categoriepromotion) values (:idcategorie,:categoriepromotion)";
        $db = config::getConnexion();
        try
        {
            $req=$db->prepare($sql);
            $idcategorie=$categorie->getidcategorie();
            $categoriepromotion=$categorie->getcategoriepromotion();
            
            $req->bindValue(':idcategorie',$idcategorie);
            $req->bindValue(':categoriepromotion',$categoriepromotion);
            $req->execute();

        }
        catch (Exception $e)
        {
            die('Erreur: Une categorie avec ce nom existe deja');
        }   
    }

    function affichercategorie()
    {
        $sql="select * from promotion.categorie order by idcategorie asc";
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
   

    function modifiercategorie($idcategorie,$categoriepromotion)
    {
        
        $sql="UPDATE promotion.categorie SET idcategorie= '$idcategorie', categoriepromotion= '$categoriepromotion' WHERE idcategorie='$idcategorie'";
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

    function supprimercategorie($idcategorie)
    {
        $sql="DELETE FROM promotion.categorie WHERE idcategorie= '$idcategorie'";
        $db = config::getConnexion();
       
      
        try{
            $req=$db->query($sql);
      
    }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
    }

    function recherchercategoriee($categoriepromotion)
    {
		$sql="SELECT * from promotion.categorie where categoriepromotion=$categoriepromotion";
		$db = config::getConnexion();
		try{
		$req=$db->query($sql);
		return $req;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    function recherchercategorie($idcategorie)
    {
		$sql="SELECT * from promotion.categorie where idcategorie=$idcategorie";
		$db = config::getConnexion();
		try{
		$req=$db->query($sql);
		return $req;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    function triercategoriee()
	{
		$sql = "SELECT * from promotion.categorie ORDER BY categoriepromotion ASC";
		$db = config::getConnexion();
		try {
			$req = $db->query($sql);
			return $req;
        } catch (Exception $e)
         {
			die('Erreur: ' . $e->getMessage());
        }
    }

    function triercategorie()
	{
		$sql = "SELECT * from promotion.categorie ORDER BY idcategorie ASC";
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