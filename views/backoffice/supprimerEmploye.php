<?PHP
include "../core/employeC.php";
$employeC=new EmployeC();
if (isset($_POST["cin"])){
	$employeC->supprimerEmploye($_POST["cin"]);
	header('Location: tables2.php');
}

?>