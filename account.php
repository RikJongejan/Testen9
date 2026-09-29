<?php
session_start();
include "connect.php";

if (!isset($_SESSION['account_id'])) {
    header("Location: login.php");
    exit;
}

$id = $_SESSION['account_id'];
$sql = "SELECT * FROM accounts WHERE id=$id";
$result = mysqli_query($conn, $sql);
$account = mysqli_fetch_assoc($result);
?>

<h1>Mijn account</h1>

<p>Naam: <?php echo $account['naam']; ?></p>
<p>E-mail: <?php echo $account['email']; ?></p>

<a href="account_bewerken.php">Account bewerken</a><br><br>
<a href="account_verwijderen.php">Account verwijderen</a><br><br>
<a href="logout.php">Uitloggen</a>
