<?php
session_start();
require_once(__DIR__ . "/../Includes/db.php");

if (!isset($_SESSION['user_id'])) {
    header("Location: ../dashboard.php?status=error&message=Please+login+first");
    exit();
}

if (isset($_POST['delete']) && isset($_POST['item_id']) && isset($_POST['item_type'])) {

    $item_id = $_POST['item_id'];
    $item_type = $_POST['item_type'];

    if ($item_type === 'Lost') {
        $table = 'Lost';
        $date_col = 'date_lost';
    } elseif ($item_type === 'Found') {
        $table = 'Found';
        $date_col = 'date_found';
    } else {
        header("Location: ../dashboard.php?status=error&message=Invalid+item+type");
        exit();
    }

    $stmt = $conn->prepare("SELECT * FROM $table WHERE id = ?");
    $stmt->bind_param("i", $item_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 0) {
        header("Location: ../dashboard.php?status=error&message=Item+not+found");
        exit();
    }

    $row = $result->fetch_assoc();

    if ($_SESSION['role'] !== 'admin' && $row['user_id'] != $_SESSION['user_id']) {
        header("Location: ../dashboard.php?status=error&message=Unauthorized+action");
        exit();
    }

    $user_id = $row['user_id'];
    $owner_name = $row['owner_name'];
    $phone = $row['phone'];
    $email = $row['email'];
    $item_name = $row['item_name'];
    $description = $row['discription'];
    $location = $row['locat'];
    $date = $row[$date_col];
    $img = $row['img'];


    if (!empty($img) && file_exists("../uploads/".$img)) {
        if (!is_dir("../uploads/history")) {
            mkdir("../uploads/history", 0777, true);
        }
        rename("../uploads/".$img, "../uploads/history/".$img);
    }

    $stmt = $conn->prepare("INSERT INTO history (user_id, owner_name, phone, email, item_name, discription, locat, item_type, item_date, img, deleted_at) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, NOW())");
    $stmt->bind_param("isssssssss", $user_id, $owner_name, $phone, $email, $item_name, $description, $location, $item_type, $date, $img);
    $stmt->execute();

    $stmt = $conn->prepare("DELETE FROM $table WHERE id = ?");
    $stmt->bind_param("i", $item_id);
    $stmt->execute();

    $stmt->close();
    $conn->close();

    header("Location: ../dashboard.php?status=success&message=Item+deleted+successfully");
    exit();

} else {
    header("Location: ../dashboard.php?status=error&message=Invalid+request");
    exit();
}
?>
