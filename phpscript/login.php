<?php

session_start();
    //Include db connection
    require_once("./Includes/db.php");

    if($_SERVER["REQUEST_METHOD"]=="POST"){
         
        $email = $_POST['email'];
        $password=$_POST['password'];

        $sql="SELECT * FROM users WHERE EMAIL=?";
        $emailGet=$connection->prepare($sql);

        //Assign email veriable for ?
        $emailGet->bind_param("s",$email);
        $emailGet->execute();

        $result=$emailGet->get_result();

        if($result->num_rows>0){
            $user=$result->fetch_assoc();
            if (password_verify($password, $user['password'])) {
                $_SESSION['user_id'] = $user['user_id'];
                $_SESSION['user_name'] = $user['user_name'];

                if(isset($_POST['remember_me'])){
                    // generate a random token
                    $token = bin2hex(random_bytes(16));
                    echo $token;

                    // save token in database
                    $stmt = $connection->prepare("UPDATE users SET remember_token = ? WHERE user_id = ?");
                    $stmt->bind_param("si", $token, $user['user_id']);
                    $stmt->execute();

                    // set cookie for 7 days
                    setcookie("remember_me", $token, time() + 604800, "/", "", false, true);
                }
                header("Location: dashbord.php?status=success&successMsg=Login+successful.+Welcome+back!");
                exit();
            } else {
                header("Location: index.php?status=error&errorMsg=Oops!+That+password+doesn’t+look+right.");
                exit();
            }

        }else{
            header("Location: index.php?status=error&errorMsg=No+account+exists+with+this+email+address.");
            exit();
        }

    }
?>