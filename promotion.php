<?php
class Promotion{
	private $referance;
	private $id_produit;
	private $dateDebut;
	private $dateFin;
	private $pourcentage;
	private $categoriepromotion;
	public function __construct($referance,$id_produit,$dateDebut,$dateFin,$pourcentage,$categoriepromotion)/*on peut avoir q'un sel constructeur*/ 
	{
		$this->referance=$referance;
        $this->id_produit=$id_produit;
	    $this->dateDebut=$dateDebut;
        $this->dateFin=$dateFin;
		$this->pourcentage=$pourcentage;
		$this->categoriepromotion=$categoriepromotion;
	}
	public function getreferance(){return $this->referance ;}
	public function getid_produit(){return $this->id_produit ;}
	public function getdateDebut(){return $this->dateDebut ;}
	public function getdateFin(){return $this->dateFin ;}
	public function getpourcentage(){return $this->pourcentage ;}
	public function getcategoriepromotion(){return $this->categoriepromotion ;}


	public function setreference($referance){$this->referance=$referance;}
	public function setid_produit($id_produit){$this->id_produit=$id_produit;}
	public function setdateDebut($dateDebut){$this->dateDebut=$dateDebut;}
	public function setdateFin($dateFin){$this->dateFin=$dateFin;}
	public function setpourcentage($pourcentage){$this->pourcentage=$pourcentage;}
	public function setcategoriepromotion($categoriepromotion){$this->categoriepromotion=$categoriepromotion;}
	}
	?>