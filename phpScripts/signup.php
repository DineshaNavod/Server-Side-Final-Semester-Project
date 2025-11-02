<?php
    require_once("../Includes/db.php");

    if($_SERVER['REQUEST_METHOD']=='POST'){
        $username=$_POST["uname"];
        $email=$_POST["email"];
        $password=$_POST["password"];
        $comformPassword=$_POST["con-password"];
    
    
    if($password!=$comformPassword){
        header("Location: ../index.php?status=error&errorMsg=Oops!+Those+passwords+don’t+match.+Try+typing+them+again.");
        exit();
    }

    $checkEmail = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $checkEmail->bind_param("s", $email);
    $checkEmail->execute();
    $result = $checkEmail->get_result();

    if ($result->num_rows > 0) {
        header("Location: ../index.php?status=error&errorMsg=Email already registered.");
        exit();
    }

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO users (user_name, email, password, role) VALUES (?, ?, ?, 'user')");
    $stmt->bind_param("sss", $username, $email, $hashedPassword);


    if ($stmt->execute()) {
        header("Location:../index.php?status=success&successMsg=🎉+Account+created+successfully!+Please+login+to+continue.");
        exit();
    } else {
        header("Location: ../index.php?status=error&errorMsg=Something+went+wrong.+Please+try+again.");
        exit();
    }

    $stmt->close();
    $checkEmail->close();
    $conn->close();
    
 }  else {
        header("Location: ../index.php?status=error&errorMsg=Something+went+wrong.+Please+try+again.");
    exit();
}



?>