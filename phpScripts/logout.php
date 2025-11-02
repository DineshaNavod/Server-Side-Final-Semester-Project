<?php
session_start();
require_once("../Includes/db.php");

session_unset();
session_destroy();

if (isset($_COOKIE['remember_me'])) {
    $token = $_COOKIE['remember_me'];

    $stmt = $conn->prepare("UPDATE users SET remember_token = NULL WHERE remember_token = ?");
    $stmt->bind_param("s", $token);
    $stmt->execute();

    setcookie("remember_me", "", time() - 3600, "/", "", false, true);
}

header("Location: ../index.php?status=success&successMsg=You+have+been+logged+out.");
exit();
?>
