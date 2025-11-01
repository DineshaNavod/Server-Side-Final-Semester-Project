<?php
session_start();
require_once("./Includes/db.php");

$current_page = basename($_SERVER['PHP_SELF']);

if ($current_page == 'index.php') {
    if (isset($_SESSION['user_id']) || isset($_COOKIE['remember_me'])) {
        header("Location: dashbord.php");
        exit();
    }
}

if (!in_array($current_page, ['index.php'])) {

    if (isset($_SESSION['user_id'])) {
        $user_id = $_SESSION['user_id'];
        $user_name = $_SESSION['user_name'];

    } elseif (isset($_COOKIE['remember_me'])) {
        $token = $_COOKIE['remember_me'];

        $stmt = $connection->prepare("SELECT user_id, user_name FROM users WHERE remember_token = ?");
        $stmt->bind_param("s", $token);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();

            $_SESSION['user_id'] = $user['user_id'];
            $_SESSION['user_name'] = $user['user_name'];

            setcookie("remember_me", $token, time() + 604800, "/", "", false, true);
            $user_id = $user['user_id'];
            $user_name = $user['user_name'];

        } else {
            header("Location: index.php?status=error&errorMsg=Please+login+first.");
            exit();
        }

    } else {
        header("Location: index.php?status=error&errorMsg=Please+login+first.");
        exit();
    }
}
?>
