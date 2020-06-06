<?PHP
include "../entities/reservation.php";
include "../core/reservationC.php";

if (isset($_POST['id']) and isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['heure']) and isset($_POST['date_'])and isset($_POST['nbr'])){
$reservation1=new reservation($_POST['id'],$_POST['nom'],$_POST['prenom'],$_POST['heure'],$_POST['date_'],$_POST['nbr']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$reservation1C=new reservationC();
$reservation1C->ajouterreservation($reservation1);
header('Location: afficherreservation.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>