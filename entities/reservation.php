<?PHP
class reservation{
	private $id;
	private $nom;
	private $prenom;
	private $heure;
	private $ntable;
	private $nbr;
	private $date_;
	function __construct($id,$nom,$prenom,$heure,$ntable,$nbr,$date_){
		$this->id=$id;
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->heure=$heure;
		$this->ntable=$ntable;
		$this->nbr=$nbr;
		$this->date_=$date_;
	}
	
	function getid(){
		return $this->id;
	}
	function getNom(){
		return $this->nom;
	}
	function getPrenom(){
		return $this->prenom;
	}
	function getheure(){
		return $this->heure;
	}
	function getdate_(){
		return $this->date_;
	}
	function getnbr(){
		return $this->nbr;
	}
	function getntable(){
		return $this->ntable;
	}

	function setNom($nom){
		$this->nom=$nom;
	}
	function setPrenom($prenom){
		$this->prenom;
	}
	function setheure($heure){
		$this->heure=$heure;
	}
	function setdate_($date_){
		$this->date_=$date_;
	}
	function setnbr($nbr){
		$this->nbr=$nbr;
	}
	function setntable($ntable){
		$this->ntable=$ntable;
	}
	
}

?>