<?PHP
include "../core/produitsC.php";
$produitsC=new ProduitsC();
if (isset($_POST["ID"])){
	$produitsC->supprimerProduits($_POST["ID"]);
	header('Location: afficherProduit.php');
}

?>