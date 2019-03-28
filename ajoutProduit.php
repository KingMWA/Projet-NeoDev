<?PHP
include "../entities/produit.php";
include "../core/produitsC.php";

if (isset($_POST['Nom']) and isset($_POST['ID'])  and isset($_POST['Prix']) and isset($_POST['Taille'])){
$produit1=new produits($_POST['Nom'],$_POST['ID'],$_POST['Prix'],$_POST['Taille']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$produit1C=new ProduitsC();
$produit1C->ajouterProduit($produit1);
header('Location: afficherProduit.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>