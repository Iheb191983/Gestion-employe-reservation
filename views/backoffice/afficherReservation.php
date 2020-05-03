<!DOCTYPE html>
<html>
<head>
	<title>gestion reservation</title>

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
include "../core/reservationC.php";
$reservation1C=new reservationC();
$listereservation=$reservation1C->afficherreservation();

//var_dump($listeEmployes->fetchAll());
?><center>
	 
<form method="POST">
        <br style="clear: both">
	<div>
<h1>gestion reservation </h1>
	</div>
<table border="1" id="tabl"><center>
<tr class="entete">
<td>id</td>
<td>Nom</td>
<td>Prenom</td>
<td>Heure</td>
<td>numero table </td>
<td>nombre </td>
<td>date  </td>
<td>supprimer</td>
<td>modifier</td>
</tr></center>

<?PHP
foreach($listereservation as $row){
	?>
	<center>
	<tr class="donn">
	<td><?PHP echo $row['id']; ?></td>
	<td><?PHP echo $row['nom']; ?></td>
	<td><?PHP echo $row['prenom']; ?></td>
	<td><?PHP echo $row['heure']; ?></td>
	<td><?PHP echo $row['ntable']; ?></td>
	<td><?PHP echo $row['nbr']; ?></td>
	<td><?PHP echo $row['date_']; ?></td>

	<td><form method="POST" action="supprimerReservation.php">
	<input type="submit" name="supprimer" value="supprimer" class="bouton"  onclick="return confirm('Etes vous sûre de vouloir supprimer la reservation suivante ?');" >
	<input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">
	</form>
	</td>
	<td><a href="modifierReservation.php?cin=<?PHP echo $row['id']; ?>">
	Modifier</a></td>
	</tr></center>
	<?PHP
}
?>
</table>
</div></form></center>
</body>

</html>

