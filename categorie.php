<?PHP
class categorie
{
	private $idcategorie;
	private $categoriepromotion;



	function __construct($idcategorie,$categoriepromotion)
	{
		$this->idcategorie=$idcategorie;
		$this->categoriepromotion=$categoriepromotion;
		
		
	}


	function getidcategorie()
	{
		return $this->idcategorie;
	}
	function getcategoriepromotion()
	{
		return $this->categoriepromotion;
	}

	
	function setidcategorie($idcategorie)
	{
		return $this->idcategorie=$idcategorie;
	}
	function setcategoriepromotion($categoriepromotion)
	{
		return $this->categoriepromotion=$categoriepromotion;	
	}
	
	
}

?>