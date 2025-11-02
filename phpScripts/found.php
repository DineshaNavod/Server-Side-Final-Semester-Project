<?php
session_start();
require '../Includes/db.php'; 

if (!isset($_SESSION['user_id'])) {
    header("Location: ../index.php?status=error&message=Please+login+first");
    exit();
}

$success = false;
$error = "";

if (isset($_POST['submit'])) {
    $user_id = $_SESSION['user_id'];
    $owner_name = mysqli_real_escape_string($conn, $_POST['owner_name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $item_name = mysqli_real_escape_string($conn, $_POST['item_name']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    $location = mysqli_real_escape_string($conn, $_POST['location']);
    $date_found = $_POST['date_found'];

    $image_name = "";
    if (!empty($_FILES['image']['name'])) {
        $original_name = $_FILES['image']['name'];
        $tmp_name = $_FILES['image']['tmp_name'];
        $image_name = time() . "_" . basename($original_name);
        $upload_path = "../uploads/" . $image_name;

        if (!move_uploaded_file($tmp_name, $upload_path)) {
            $error = "❌ Image upload failed!";
            $image_name = "";
        }
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "❌ Invalid Email Address!";
    } elseif (!preg_match('/^\+?[0-9]{10,15}$/', $phone)) {
        $error = "❌ Invalid Phone Number!";
    }

    if (empty($error)) {
        $sql = "INSERT INTO Found (user_id, owner_name, phone, email, item_name, discription, locat, date_found, img)
                VALUES ('$user_id', '$owner_name', '$phone', '$email', '$item_name', '$description', '$location', '$date_found', '$image_name')";

        if (mysqli_query($conn, $sql)) {
            $success = true;
        } else {
            $error = "❌ Database Error: " . mysqli_error($conn);
        }
    }

    if (!empty($error)) {
        echo "<script>
                window.addEventListener('DOMContentLoaded', () => {
                    alert('" . addslashes($error) . "');
                    window.location.href = '../dashboard.php';
                });
              </script>";
    } elseif ($success) {
        echo "<script>
                window.addEventListener('DOMContentLoaded', () => {
                    alert('✅ Found item reported successfully!');
                    window.location.href = '../dashboard.php';
                });
              </script>";
    }
}

mysqli_close($conn);
?>
