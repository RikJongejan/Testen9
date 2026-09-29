<?php
session_start();

if (isset($_SESSION['account_id'])) {
    header("Location: account.php");
} else {
    header("Location: login.php");
}
exit;
?>
