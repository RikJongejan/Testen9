<?php
session_start();
include "connect.php";

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $wachtwoord = $_POST['wachtwoord'];

    $sql = "SELECT * FROM accounts WHERE email='$email'";
    $result = mysqli_query($conn, $sql);
    $account = mysqli_fetch_assoc($result);

    if ($account && password_verify($wachtwoord, $account['wachtwoord'])) {
        $_SESSION['account_id'] = $account['id'];
        header("Location: account.php");
        exit;
    } else {
        echo "E-mail of wachtwoord is fout.<br><br>";
    }
}
?>

<h1>Inloggen</h1>

<form method="post">
    E-mail:<br>
    <input type="email" name="email"><br><br>

    Wachtwoord:<br>
    <input type="password" name="wachtwoord"><br><br>

    <input type="submit" name="login" value="Inloggen">
</form>

<br>
<a href="register.php">Account registreren</a>
