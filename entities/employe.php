<?PHP
class Employe{
	private $cin;
	private $nom;
	private $prenom;

	private $tarifHoraire;
	private $adresse_m;
	private $numero;
	private $categorie;
	function __construct($cin,$nom,$prenom,$tarifHoraire,$adresse_m,$numero,$categorie){
		$this->cin=$cin;
		$this->nom=$nom;
		$this->prenom=$prenom;
	
		$this->tarifHoraire=$tarifHoraire;
		$this->adresse_m=$adresse_m;
		$this->numero=$numero;
		$this->categorie=$categorie;
	}
	
	function getCin(){
		return $this->cin;
	}
	function getNom(){
		return $this->nom;
	}
	function getPrenom(){
		return $this->prenom;
	}

	function getTarifHoraire(){
		return $this->tarifHoraire;
	}
	function getadresse_m(){
		return $this->adresse_m;
	}
	function getnumero(){
		return $this->numero;
	}
	function getcategorie(){
		return $this->categorie;
	}

	function setNom($nom){
		$this->nom=$nom;
	}
	function setPrenom($prenom){
		$this->prenom;
	}

	function setTarifHoraire($tarifHoraire){
		$this->tarifHoraire=$tarifHoraire;
	}
		function setadresse_m($adresse_m){
		$this->adresse_m=$adresse_m;
	}
	
		function setnumero($numero){
		$this->numero=$numero;
	}
	
		function setcategorie($categorie){
		$this->categorie=$categorie;
	}
	
	
}

?>