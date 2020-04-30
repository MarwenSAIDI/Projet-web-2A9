<?php

include "config.php";
class categorieC
{
    function ajoutercategorie($categorie)
    {
        $sql= "insert into categories (idcategorie,categorieproduit) values (:idcategorie,:categorieproduit)";
        $db = config::getConnexion();
        try
        {
            $req=$db->prepare($sql);
            $idcategorie=$categorie->getidcategorie();
            $categorieproduit=$categorie->getcategorieproduit();
            
            $req->bindValue(':idcategorie',$idcategorie);
            $req->bindValue(':categorieproduit',$categorieproduit);
            $req->execute();

        }
        catch (Exception $e)
        {
            die('Erreur: Une categorie avec ce nom existe deja');
        }   
    }

    function affichercategorie()
    {
        $sql="select * from produits.categories order by idcategorie asc";
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
   

    function modifiercategorie($idcategorie,$categorieproduit)
    {
        
        $sql="UPDATE produits.categories SET idcategorie= '$idcategorie',categorieproduit= '$categorieproduit' WHERE idcategorie='$idcategorie'";
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
        $sql="DELETE FROM produits.categories where idcategorie= '$idcategorie'";
        $db = config::getConnexion();
       
      
        try{
            $req=$db->query($sql);
      
    }
        catch (Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }
    }

    function recherchercategoriesparnom($categorieproduit)
    {
		$sql="SELECT * from produits.categories where categorieproduit=$categorieproduit";
		$db = config::getConnexion();
		try{
		$req=$db->query($sql);
		return $req;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    function recherchercategories($idcategorie)
    {
		$sql="SELECT * from produits.categories where idcategorie=$idcategorie";
		$db = config::getConnexion();
		try{
		$req=$db->query($sql);
		return $req;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    function triercategoriesparnom()
	{
		$sql = "SELECT * from produits.categories ORDER BY categorieproduit ASC";
		$db = config::getConnexion();
		try {
			$req = $db->query($sql);
			return $req;
        } catch (Exception $e)
         {
			die('Erreur: ' . $e->getMessage());
        }
    }

    function triercategories()
	{
		$sql = "SELECT * from produits.categories ORDER BY idcategorie ASC";
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