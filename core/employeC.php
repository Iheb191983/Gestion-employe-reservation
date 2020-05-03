<?PHP
include "../config.php";
class EmployeC {
function afficherEmploye ($employe){
		echo "Cin: ".$employe->getCin()."<br>";
		echo "Nom: ".$employe->getNom()."<br>";
		echo "Prénom: ".$employe->getPrenom()."<br>";
		echo "salaire: ".$employe->getTarifHoraire()."<br>";
				echo "adresse mail: ".$employe->getadresse_m()."<br>";
		echo "numero: ".$employe->getnumero()."<br>";
		echo "categorie: ".$employe->getcategorie()."<br>";
	}

	function ajouterEmploye($employe){
		$sql="insert into employe (cin,nom,prenom,tarifHoraire,adresse_m,numero,categorie) values (:cin, :nom,:prenom,:tarifHoraire,:adresse_m,:numero,:categorie)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
        $cin=$employe->getCin();
        $nom=$employe->getNom();
        $prenom=$employe->getPrenom();
       
        $tarifHoraire=$employe->getTarifHoraire();
        $adresse_m=$employe->getadresse_m();
        $numero=$employe->getnumero();
        $categorie=$employe->getcategorie();
		$req->bindValue(':cin',$cin);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		
		$req->bindValue(':tarifHoraire',$tarifHoraire);
		$req->bindValue(':adresse_m',$adresse_m);
		$req->bindValue(':numero',$numero);
		$req->bindValue(':categorie',$categorie);
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherEmployes(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From employe";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerEmploye($cin){
		$sql="DELETE FROM employe where cin= :cin";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':cin',$cin);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierEmploye($employe,$cin){
		$sql="UPDATE employe SET cin=:cin, nom=:nom,prenom=:prenom,tarifHoraire=:tarifHoraire,adresse_m=:adresse_m,numero=:numero,categorie=:categorie WHERE cin=:cin";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$cin=$employe->getCin();
        $nom=$employe->getNom();
        $prenom=$employe->getPrenom();
      
        $tarifHoraire=$employe->getTarifHoraire();
        $adresse_m=$employe->getadresse_m();
        $numero=$employe->getnumero();
        $categorie=$employe->getcategorie();
		$datas = array( ':cin'=>$cin, ':nom'=>$nom,':prenom'=>$prenom,':tarifHoraire'=>$tarifHoraire,':adresse_m'=>$adresse_m,':numero'=>$numero,':categorie'=>$categorie);
		$req->bindValue(':cin',$cin);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		
		$req->bindValue(':tarifHoraire',$tarifHoraire);
		$req->bindValue(':adresse_m',$adresse_m);
		$req->bindValue(':numero',$numero);
		$req->bindValue(':categorie',$categorie);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererEmploye($cin){
		$sql="SELECT * from employe where cin=$cin";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListeEmployes($tarif){
		$sql="SELECT * from employe where tarifHoraire=$tarif";
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

class reservationC {
		/*function afficherreservation ($reservation){
	    echo "id: ".$reservation->getid()."<br>";
		echo "Nom: ".$reservation->getNom()."<br>";
		echo "Prénom: ".$reservation->getPrenom()."<br>";
		echo "heure: ".$reservation->getheure()."<br>";
		echo "date_: ".$reservation->getdate_()."<br>";
		echo "nbr: ".$reservation->getnbr()."<br>";
	}*/
	function ajouterreservation($reservation){
		$sql="insert into reservation (id,nom,prenom,heure,ntable,nbr,date_) values (:id, :nom,:prenom,:heure,:ntable,:nbr,:date_)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
        $id=$reservation->getid();
        $nom=$reservation->getNom();
        $prenom=$reservation->getPrenom();
        $heure=$reservation->getheure();
        $ntable=$reservation->getntable();
        $nbr=$reservation->getnbr();
         $date_=$reservation->getdate_();
		$req->bindValue(':id',$id);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':heure',$heure);
		$req->bindValue(':ntable',$ntable);
		$req->bindValue(':nbr',$nbr);
		$req->bindValue(':date_',$date_);
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherreservation(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From reservation";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerreservation($id){
		$sql="DELETE FROM reservation where id= :id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierreservation($reservation,$id){
		$sql="UPDATE reservation SET id=:id, nom=:nom,prenom=:prenom,heure=:heure,ntable=:ntable,nbr=:nbr,date_=:date_  WHERE id=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$id=$reservation->getid();
        $nom=$reservation->getNom();
        $prenom=$reservation->getPrenom();
        $heure=$reservation->getheure();
        $ntable=$reservation->getntable();
        $nbr=$reservation->getnbr();
        $date_=$reservation->getdate_();
		$datas = array(':id'=>$id,':nom'=>$nom,':prenom'=>$prenom,':heure'=>$heure,':ntable'=>$ntable,':nbr'=>$nbr,':date_'=>$date_);
		$req->bindValue(':id',$id);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':heure',$heure);
		$req->bindValue(':ntable',$ntable);
		$req->bindValue(':nbr',$nbr);
		$req->bindValue(':date_',$date_);
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererreservation($id){
		$sql="SELECT * from reservation where id=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherreservation($heure){
		$sql="SELECT * from reservation where heure=$heure";
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