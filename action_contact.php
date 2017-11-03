<?php

if($_SERVER['REQUEST_METHOD']=='POST') {
  $prenom = htmlentities($_POST['prenom']);
  $nom = htmlentities($_POST['nom']);
  $email = htmlentities($_POST['email']);
  $message = htmlentities($_POST['message']);

  if (($nom=="")||($email=="")||($message=="")|($prenom==""))
  {
    echo '<script>alert("Tous les champs sont nécesaires");</script>';
  }

  else
  {


  $destinataire = 'aodeltab@gmail.com';
  $sujet = 'M2 Droit Num Caen - Contact';
  $contenu = '<html><head><title>Titre du message</title></head><body>';
  $contenu = '<p>Nouvelle demande de contact du site M2 Droit du Numérique Caen</p>';
  $contenu = '<p><strong>Nom : '.$nom.' Prénom :'.$prenom.'</strong></p>';
  $contenu = '<p><strong>Adresse Mail : '.$email.'</strong></p>';
  $contenu = '<p><strong>Message : </strong>'.$message.'</p>';
  $contenu = '</body></html>';


  $headers = 'MIME-Version: 1.0'."\r\n";
  $headers = 'Content-type: text/html;charset=UTF-8'."\r\n";


  mail($destinataire, $sujet, $contenu, $headers);
  echo'<script>alert("Message envoyé !");</script>';
  sleep(2);
  header('Location: index.php');
    }
}





?>
