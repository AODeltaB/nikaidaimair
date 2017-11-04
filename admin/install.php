 <!DOCTYPE HTML>

 <html>

 <!-- HEAD -->
 <head>
   <!-- <link rel="icon" href="logo.png" /> -->
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
   <title>Master 2, Droit du Numérique - Caen</title>
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>

   <!-- CSS -->
   <link href="../style/style.css" type='text/css' rel='stylesheet'>
   <link href="../style/materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
   <link rel='stylesheet' href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel='stylesheet' href="https://www.w3schools.com/w3css/3/w3.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
 </head>

 <!-- BODY -->
 <body>
   <nav role="navigation">
     <div class="nav-wrapper container">
       <ul class="right hide-on-med-and-down">
         <li><a href="../index.php">ACCUEIL</a></li>
         <li><a href="../promotion.php">PROMOTION</a></li>
         <li><a href="../intervenants.php">INTERVENANTS</a></li>
         <li><a href="../activites.php">ACTIVITES</a></li>
         <li><a href="../contact.php">CONTACTS</a></li>
         <li><a href="../master.php">LE MASTER</a></li>
       </ul>
       <ul id="nav-mobile" class="side-nav">
         <li><a href="../index.php">ACCUEIL</a></li>
         <li><a href="../promotion.php">PROMOTION</a></li>
         <li><a href="../intervenants.php">INTERVENANTS</a></li>
         <li><a href="../activites.php">ACTIVITES</a></li>
         <li><a href="../contact.php">CONTACTS</a></li>
         <li><a href="../master.php">LE MASTER</a></li>
       </ul>
       <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">Menu</i></a>
     </div>
   </nav>

   <div class="formulaireConnexion w3-container w3-center">
     <form id="regForm" method="post" action="post_install.php">
     <div class="tab">
       <h1>Setup 1/2</h1>
       <p>Configuration de la base de données :</p>
       <p><input name="hostDB" placeholder="localhost" oninput="this.className = ''" required></p>
       <p><input name="userDB" placeholder="Utilisateur" oninput="this.className = ''" required></p>
       <p><input name="passwordDB" type="password" placeholder="Mots de passe" oninput="this.className = ''" required></p>
       <p><input name="nameDB" placeholder="Nom de la BDD" oninput="this.className = ''" required></p>
     </div>

     <div class="tab">
       <h1>Setup 2/2</h1>
       <p>Configuration du compte Administrateur</p>
       <p><input name="email" type="email" placeholder="Email..." oninput="this.className = ''" required></p>
       <p><input name="password" type="password" placeholder="Mot de Passe..." oninput="this.className = ''" required></p>
       <p><input name="password2" type="password" placeholder="Confirmation..." oninput="this.className = ''" required></p>
     </div>

     <div style="overflow:auto;">
       <div style="float:right;">
         <input type="button" id="prevBtn" onclick="nextPrev(-1)" value="Précedent">
         <input type="button" id="nextBtn" onclick="nextPrev(1)"value="Suivant">
       </div>
       <div style="text-align:center;margin-top:40px;">
         <span class="step"></span>
         <span class="step"></span>
       </div>
   </div>
 </form>
 </div>

   <!-- Footer -->
   <footer class="w3-container w3-padding-64 w3-center w3-black w3-xlarge">
     <a href="https://www.facebook.com/M2NumeriqueCaen/?fref=ts"><i class="fa fa-facebook-official"></i></a>
     <a href="#"><i class="fa fa-linkedin"></i></a>
     <a href="#"><i class="fa fa-instagram"></i></a>
     <a href="#"><i class="fa fa-twitter"></i></a>
     <p class="w3-medium">
       Powered by <a href="https://www.linkedin.com/in/pierre-fortin-6b6908139/s" target="_blank">Pierre Fortin</a>
     </p>
   </footer>

   <!-- Script  -->
   <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
   <script src="../js/materialize.js"></script>
   <script src="../js/init.js"></script>
   <script src="multistep.js"></script>

 </body>
 </html>
 <style>


 /* Hide all steps by default: */
 .tab {
   display: none;
 }

 /* Make circles that indicate the steps of the form: */
 .step {
   height: 15px;
   width: 15px;
   margin: 0 2px;
   background-color: #bbbbbb;
   border: none;
   border-radius: 50%;
   display: inline-block;
   opacity: 0.5;
 }
 .step.active {
   opacity: 1;
 }
 /* Mark the steps that are finished and valid: */
 .step.finish {
   background-color: #4CAF50;
 }
 </style>
