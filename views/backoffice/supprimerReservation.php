<?PHP
include "../core/employeC.php";
$reservationC=new reservationC();
if (isset($_POST["id"])){
	$reservationC->supprimerreservation($_POST["id"]);
	header('Location: tables2.php');
}

?>