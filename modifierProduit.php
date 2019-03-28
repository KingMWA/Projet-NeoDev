<HTML>
<head>
</head>
<body>
<?PHP
include "../entities/produit.php";
include "../core/produitsC.php";
if (isset($_GET['ID'])){
	$produitC=new ProduitsC();
    $result=$produitC->recupererProduits($_GET['ID']);
	foreach($result as $row){
		$ID=$row['ID'];
		$nom=$row['Nom'];
		$prix=$row['Prix'];
		$taille=$row['Taille'];
?>
<form method="POST">
<table>
<caption>Modifier Produits</caption>
<tr>
<td>ID</td>
<td><input type="number" name="ID" value="<?PHP echo $ID ?>"></td>
</tr>
<tr>
<td>Nom</td>
<td><input type="text" name="nom" value="<?PHP echo $Nom ?>"></td>
</tr>
<tr>
<td>Prix</td>
<td><input type="number" name="prix" value="<?PHP echo $Prix ?>"></td>
</tr>
<tr>
<td>Taille</td>
<td><input type="number" name="taille" value="<?PHP echo $Taille ?>"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="cin_ini" value="<?PHP echo $_GET['ID'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$produit=new produits($_POST['ID'],$_POST['Nom'],$_POST['Prix'],$_POST['Taille']);
	$produitsC->modifierProduits($produits,$_POST['cin_ini']);
	echo $_POST['cin_ini'];
	header('Location: afficherProduit.php');
}
?>
</body>
</HTMl>