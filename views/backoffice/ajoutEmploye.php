<?PHP
include "../entities/employe.php";
include "../core/employeC.php";

if (isset($_POST['cin']) and isset($_POST['nom']) and isset($_POST['prenom'])  and isset($_POST['tarifH'])and isset($_POST['adresse_m'])and isset($_POST['numero'])and isset($_POST['categorie'])){
$employe1=new employe($_POST['cin'],$_POST['nom'],$_POST['prenom'],$_POST['tarifH'],$_POST['adresse_m'],$_POST['numero'],$_POST['categorie']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$employe1C=new EmployeC();
$employe1C->ajouterEmploye($employe1);
header('Location: tables2.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>