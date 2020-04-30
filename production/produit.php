<?PHP
class produit{
	private $idproduit;
	private $nomproduit;
	private $categorieproduit;
	private $marqueproduit;
	private $quantiteproduit;
	private $prixproduit;
	private $code;

	function __construct($idproduit,$nomproduit,$categorieproduit,$marqueproduit,$quantiteproduit,$prixproduit,$code){
		$this->idproduit=$idproduit;
		$this->nomproduit=$nomproduit;
		$this->categorieproduit=$categorieproduit;
		$this->marqueproduit=$marqueproduit;
		$this->quantiteproduit=$quantiteproduit;
		$this->prixproduit=$prixproduit;
		$this->code=$code;
	}
	
	function getprixproduit(){
		return $this->prixproduit;
	}
	function getnomproduit(){
		return $this->nomproduit;
	}
	
	function getcategorieproduit(){
		return $this->categorieproduit;
	}
	function getmarqueproduit(){
		return $this->marqueproduit;
	}
	function getquantiteproduit(){
		return $this->quantiteproduit;
	}
	function getidproduit(){
		return $this->idproduit;
	}
	function getcode(){
		return $this->code;
	}



	function setprixproduit($prixproduit){
		return $this->prixproduit=$prixproduit;
	}
	function setnomproduit($nomproduit){
		return $this->nomproduit=$nomproduit;
	}
	
	function setcategorieproduit($categorieproduit){
		return $this->categorieproduit=$categorieproduit;
	}
	function setmarqueproduit($marqueproduit){
		return $this->marqueproduit=$marqueproduit;
	}
	function setquantiteproduit($quantiteproduit){
		return $this->quantiteproduit=$quantiteproduitquantite;
	}
	function setidproduit($idproduit){
		return $this->idproduit=$idproduit;
	}
	function setcode($code){
		return $this->code=$code;
	}

	
	
}

?>