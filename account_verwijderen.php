<?php
session_start();
include "connect.php";

if (!isset($_SESSION['account_id'])) {
    header("Location: login.php");
    exit;
}

$id = $_SESSION['account_id'];

$sql = "DELETE FROM accounts WHERE id=$id";
mysqli_query($conn, $sql);

session_destroy();

header("Location: register.php");
exit;
?>
