<?php
if(isset($_POST['valider']))
{
// 1 : on ouvre le fichier
// $fichierConfig = fopen('config.php', 'r+');

// 2 : on fera ici nos opérations sur le fichier...
$hostDB = htmlentities(trim($_POST['hostDB']));
$userDB = htmlentities(trim($_POST['userDB']));
$passwordDB = htmlentities(trim($_POST['passwordDB']));
$nameDB = htmlentities(trim($_POST['nameDB']));
$email = htmlentities(trim($_POST['email']));
$password = htmlentities(trim($_POST['password']));

// Create connection
$conn = new mysqli($hostDB, $userDB, $passwordDB, $nameDB);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
echo "Connected successfully";
$sql = "INSERT INTO membres (email, password, date_enregistrement) VALUES ('$email', '$password', NOW())";
$result = $conn->query($sql);

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}
// Après Test, si test true alors écrire les informations dans le fichier

// 3 : quand on a fini de l'utiliser, on ferme le fichier
// fclose($fichierConfig);
?>
