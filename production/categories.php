<?PHP
class categorie
{
	private $idcategorie;
	private $categorieproduit;



	function __construct($idcategorie,$categorieproduit)
	{
		$this->idcategorie=$idcategorie;
		$this->categorieproduit=$categorieproduit;
		
		
	}


	function getidcategorie()
	{
		return $this->idcategorie;
	}
	function getcategorieproduit()
	{
		return $this->categorieproduit;
	}

	
	function setidcategorie($idcategorie)
	{
		return $this->idcategorie=$idcategorie;
	}
	function setcategorieproduit($categorieproduit)
	{
		return $this->categorieproduit=$categorieproduit;	
	}
	
	
}

?>