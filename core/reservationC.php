<?PHP
include "../config.php";
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