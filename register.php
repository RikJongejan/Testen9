<?php
include "connect.php";

if (isset($_POST['register'])) {
    $naam = $_POST['naam'];
    $email = $_POST['email'];
    $wachtwoord = password_hash($_POST['wachtwoord'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO accounts (naam, email, wachtwoord) VALUES ('$naam', '$email', '$wachtwoord')";
    mysqli_query($conn, $sql);

    echo "Account aangemaakt. <a href='login.php'>Inloggen</a>";
    exit;
}
?>

<h1>Registreren</h1>

<form method="post">
    Naam:<br>
    <input type="text" name="naam"><br><br>

    E-mail:<br>
    <input type="email" name="email"><br><br>

    Wachtwoord:<br>
    <input type="password" name="wachtwoord"><br><br>

    <input type="submit" name="register" value="Registreren">
</form>

<br>
<a href="login.php">Ik heb al een account</a>
