<?PHP
include "../entities/reservation.php";
include "../core/reservationC.php";

if ( isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['heure']) and isset($_POST['date_'])and isset($_POST['nbr'])){
$reservation1=new reservation('0003','maha','sg',$_POST['heure'],$_POST['ntable'],$_POST['nbr'],$_POST['date_']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$reservation1C=new reservationC();
$reservation1C->ajouterreservation($reservation1);
header('Location: valid.php');
  
}else{
  echo "vérifier les champs";
}
//*/

?>