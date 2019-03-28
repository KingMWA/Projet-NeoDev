<?PHP
include "../config.php";
class ProduitsC {
function afficherProduit ($produits){
		echo "ID: ".$produits->getID()."<br>";
		echo "Nom: ".$produits->getNom()."<br>";
		echo "Prix: ".$produits->getPrix()."<br>";
		echo "taille: ".$produits->getTaille()."<br>";
	}
	
	function ajouterProduit($produits){
		$sql="insert into produits (Nom,ID,Prix,Taille) values (:Nom, :ID, :Prix,:Taille)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $Nom=$produits->getNom();
         $ID=$produits->getID();
        $Prix=$produits->getPrix();
        $Taille=$produits->getTaille();
		$req->bindValue(':Nom',$Nom);
		$req->bindValue(':ID',$ID);
		$req->bindValue(':Prix',$Prix);
		$req->bindValue(':Taille',$Taille);
		
            $req->execute();
            
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherProduits(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From produits";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerProduits($ID){
		$sql="DELETE FROM produits where ID= :ID";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':ID',$ID);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierProduits($produits,$ID){
		$sql="UPDATE produits SET ID=:id, Nom=:nom,Prix=:pr,Taille=:taille WHERE ID=:ID";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$id=$produits->getID();
        $nom=$produits->getNom();
        $pr=$produits->getPrix();
        $taille=$produits->getTaille();
		$datas = array(':id'=>$id, ':ID'=>$Id, ':nom'=>$nom,':pr'=>$prix,':taille'=>$ta);
		$req->bindValue(':id',$id);
		$req->bindValue(':ID',$Id);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':pr',$prix);
		$req->bindValue(':taille',$ta);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererProduits($ID){
		$sql="SELECT * from produits where ID=$ID";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListeProduits($prix){
		$sql="SELECT * from produits where Prix=$prix";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
}

?>