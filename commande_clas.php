<?PHP
class commande{
	//protected $nom;
	//protected $prenom;
	protected $cin;
	protected $address;
	protected $mail_address;
	protected $ville;
	protected $region;
	protected $postal;
	//protected $num_tel;
	protected $comment;
	protected $ID;
	
	function __construct($ID,$cin,$address,$mail_address,$ville,$region,$postal,$comment){
		//$this->nom=$nom;
		//$this->prenom=$prenom;
		$this->cin=$cin;
		$this->address=$address;
        $this->mail_address=$mail_address;
        $this->ville=$ville;
        $this->region=$region;
        $this->postal=$postal;
        //$this->num_tel=$num_tel;
        $this->comment=$comment;
        $this->ID=$ID;



	}

	function getID(){
		return $this->ID;
	}
	function getnom(){
		return $this->nom;
	}
	function getprenom(){
		return $this->prenom;
	}
	function getCIN(){
		return $this->cin;
	}
	function getaddress(){
		return $this->address;
	}
	function getmail(){
		return $this->mail_address;
	}
	function getville(){
		return $this->ville;
	}
	function getregion(){
		return $this->region;
	}
	function getpostal(){
		return $this->postal;
	}
	function getTel(){
		return $this->num_tel;
	}
	function getcomment(){
		return $this->comment;
	}

	function setCIN($num){
		$this->numCompte=$num;
	}
	
	
}

?>