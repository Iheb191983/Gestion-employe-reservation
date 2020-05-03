<!DOCTYPE html>
<html>
<head>
	<title>gestion employe</title>

<style>
h1{height: 150 px; color: #2F4F4F;}
.entete{color: #A52A2A;}
.bouton{background-color: #00BFFF; color: black;}
.donn{color: #8B4513;
font-size: 25px;
font-style: italic;
}
table{width: 450px;
height: 200px;}
</style>

</head>
<body>

<?PHP
include "../core/employeC.php";
$employe1C=new EmployeC();
$listeEmployes=$employe1C->afficherEmployes();

//var_dump($listeEmployes->fetchAll());
?><center>
	 
<form method="POST">
        <br style="clear: both">
	<div>
<h1>gestion employe </h1>
	</div>
<table border="1" id="tabl"><center>
<tr class="entete">
<td>Cin</td>
<td>Nom</td>
<td>Prenom</td>
<td>salaire</td>
<td>adresse mail </td>
<td>numero </td>
<td>categorie</td>
<td>supprimer</td>
<td>modifier</td>
</tr></center>

<?PHP
foreach($listeEmployes as $row){
	?>
	<center>
	<tr class="donn">
	<td><?PHP echo $row['cin']; ?></td>
	<td><?PHP echo $row['nom']; ?></td>
	<td><?PHP echo $row['prenom']; ?></td>
	<td><?PHP echo $row['tarifHoraire']; ?></td>
	<td><?PHP echo $row['adresse_m']; ?></td>
	<td><?PHP echo $row['numero']; ?></td>
	<td><?PHP echo $row['categorie']; ?></td>
	<td><form method="POST" action="supprimerEmploye.php">
	<input type="submit" name="supprimer" value="supprimer" class="bouton"  onclick="return confirm('Etes vous sûre de vouloir supprimer l employe suivant ?');" >
	<input type="hidden" value="<?PHP echo $row['cin']; ?>" name="cin">
	</form>
	</td>
	<td><a href="modifierEmploye.php?cin=<?PHP echo $row['cin']; ?>">
	Modifier</a></td>
	</tr></center>
	<?PHP
}
?>
</table>
</div></form></center>
















</body>

</html>

