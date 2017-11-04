<?php

require 'config.php';

session_start();
if(isset($_POST['submit']))
{
  $email = htmlentities($_POST['email']);
  $password = htmlentities($_POST['password']);

  if($email&&$password) {
    // $password = md5($password);
    $conn = new mysqli($hostDB, $userDB, $passwordDB, $nameDB);

    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";
    $sql = "SELECT * FROM membres WHERE email='$email'&&password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["email"]. " " . $row["password"]. "<br>"; // Non définitif, renverra sur WebPanel
      }
    }
    else
    {
      echo "Erreur de saisie";
    }

  }
  $conn->close();
}
?>
