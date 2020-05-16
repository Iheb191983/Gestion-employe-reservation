<?php
  $dest = "mahasegni20@gmail.com";
  $sujet = "Email de test";
  $corp = "Salut ceci est un email de test envoyer par un script PHP";
  $headers = "From: mahasegni00@gmail.com";
  if (mail($dest, $sujet, $corp, $headers)) {
    echo "Email envoyé avec succès à $dest ...";
  } else {
    echo "Échec de l'envoi de l'email...";
  }
?>