<?php
session_start();
include "connect.php";

if (!isset($_SESSION['account_id'])) {
    header("Location: login.php");
    exit;
}

$id = $_SESSION['account_id'];

if (isset($_POST['opslaan'])) {
    $naam = $_POST['naam'];
    $email = $_POST['email'];

    $sql = "UPDATE accounts SET naam='$naam', email='$email' WHERE id=$id";
    mysqli_query($conn, $sql);

    header("Location: account.php");
    exit;
}

$sql = "SELECT * FROM accounts WHERE id=$id";
$result = mysqli_query($conn, $sql);
$account = mysqli_fetch_assoc($result);
?>

<h1>Account bewerken</h1>

<form method="post">
    Naam:<br>
    <input type="text" name="naam" value="<?php echo $account['naam']; ?>"><br><br>

    E-mail:<br>
    <input type="email" name="email" value="<?php echo $account['email']; ?>"><br><br>

    <input type="submit" name="opslaan" value="Opslaan">
</form>

<br>
<a href="account.php">Terug</a>
