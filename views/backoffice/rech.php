
     <html>
     <form method="POST" action=""> 
     Rechercher un mot : <input type="text" name="recherche">
     <input type="SUBMIT" value="Search!"> 
     </form>
     </html>

<?php


    $db_server = 'localhost'; // Adresse du serveur MySQL
    $db_name = 'omek_houria';            // Nom de la base de données
    $db_user_login = 'root';  // Nom de l'utilisateur
    $db_user_pass = '';       // Mot de passe de l'utilisateur

    // Ouvre une connexion au serveur MySQL
    $conn = mysqli_connect($db_server,$db_user_login, $db_user_pass, $db_name);


     // Récupère la recherche
     $recherche = isset($_POST['recherche']) ? $_POST['recherche'] : '';

     // la requete mysql
     $q = $conn->query(
     "SELECT nom, prenom, cin FROM employe
      WHERE nom LIKE '%$recherche%'
      OR prenom LIKE '%$recherche%'
      LIMIT 10");

     // affichage du résultat
     while( $r = mysqli_fetch_array($q)){
     echo 'Résultat de la recherche: '.$r['nom'].', '.$r['prenom'].' <br/>';
     echo "<tr><td>";
        echo $r['nom'];
        echo "</td>";
        echo "<td><div align =\"right\">";
        echo $r['prenom'];
        echo "</div></td></tr>";
        echo $r['cin'];
        echo "</div></td></tr>";
     }
           ?>
        </form>    
        </div>      
    </div>
</div>
<br>
<br>
<br>
<br> 
  </body>

  <footer class="container-fluid bg-4 text-center">
  <br>
  <p> Omek houria 2020 | &copy All Rights Reserved </p>
  <br>
  </footer>
</html> 