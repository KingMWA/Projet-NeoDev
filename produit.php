<?PHP
class Produits{
	private $ID;
	private $nom;
	private $prix;
	private $taille;
	function __construct($ID,$nom,$pr,$taille){
		$this->ID=$ID;
		$this->nom=$nom;
		$this->prix=$pr;
		$this->taille=$taille;
		$this->nbHeures=$nb;
	}
	
	function getID(){
		return $this->ID;
	}
	function getNom(){
		return $this->nom;
	}
	function getPrix(){
		return $this->prix;
	}
	function getTaille(){
		return $this->taille;
	}

	function setNom($nom){
		$this->nom=$nom;
	}
	function setPrix($prenom){
		$this->prix;
	}
	function setTaille($taille){
		$this->taille=$taille;
	}
	
}

?>