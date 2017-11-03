<!DOCTYPE HTML>

<html>


<head>
  <!-- <link rel="icon" href="logo.png" /> -->
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <title>Master 2, Droit du Numérique - Caen</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>

  <!-- CSS -->
  <link href="style/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link rel='stylesheet' type='text/css' href='style/style.css'/>
  <link rel='stylesheet' href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel='stylesheet' href="https://www.w3schools.com/w3css/3/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
</head>


<body>
  <nav role="navigation">
      <div class="nav-wrapper container">
      <ul class="right hide-on-med-and-down">
        <li><a href="index.php">ACCUEIL</a></li>
        <li><a href="promotion.php">PROMOTION</a></li>
        <li><a href="">INTERVENANTS</a></li>
        <li><a href="">ACTIVITES</a></li>
        <li><a href="contact.php">CONTACTS</a></li>
        <li><a href="">LE MASTER</a></li>
      </ul>
      <ul id="nav-mobile" class="side-nav">
        <li><a href="index.php">ACCUEIL</a></li>
        <li><a href="promotion.php">PROMOTION</a></li>
        <li><a href="">INTERVENANTS</a></li>
        <li><a href="">ACTIVITES</a></li>
        <li><a href="contact.php">CONTACTS</a></li>
        <li><a href="">LE MASTER</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">Menu</i></a>
    </div>
  </nav>
  <br>
  <div class="w3-center w3-padding-64 w3-container w3-xlarge">
    <h2>Nous contacter :</h2>
    <p class="w3-medium">Nous suivre sur les réseaux :</p>
    <a href="https://www.facebook.com/M2NumeriqueCaen/?fref=ts"><i class="fa fa-facebook-official"></i></a>
    <a href="#"><i class="fa fa-linkedin"></i></a>
    <a href="#"><i class="fa fa-instagram"></i></a>
    <a href="#"><i class="fa fa-twitter"></i></a>
  </div>
  <div class="container w3-padding-64">
    <form method="POST"  enctype="multipart/form-data">
      <label for="lname">Email :</label>
      <input type="text" id="lname" name="email" placeholder="Votre Email...">

      <label for="fname">Prénom</label>
      <input type="text" id="fname" name="prenom" placeholder="Votre Prénom...">

      <label for="lname">Nom</label>
      <input type="text" id="lname" name="nom" placeholder="Votre Nom...">


      <label for="subject">Sujet</label>
      <textarea id="subject" name="message" placeholder="..." style="height:200px"></textarea>

      <input type="submit" value="Envoyer">

    </form>
  </div>
  <br>

<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-black w3-xlarge">
  <a href="https://www.facebook.com/M2NumeriqueCaen/?fref=ts"><i class="fa fa-facebook-official"></i></a>
  <a href="#"><i class="fa fa-linkedin"></i></a>
  <a href="#"><i class="fa fa-instagram"></i></a>
  <a href="#"><i class="fa fa-twitter"></i></a>
  <p class="w3-medium">
    Powered by <a href="https://www.linkedin.com/in/pierre-fortin-6b6908139/" target="_blank">Pierre Fortin</a>
  </p>
</footer>

<!-- Script  -->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="js/materialize.js"></script>
<script src="js/init.js"></script>
</body>

</html>
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
