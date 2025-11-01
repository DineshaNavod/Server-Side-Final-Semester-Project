<?php
  require_once("./Includes/auth.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="./assets/css/notification.css" rel="stylesheet" />
</head>
<body>
  <h1>Welcome, <?php echo htmlspecialchars($user_name); ?>!</h1>
  <a href="logout.php">
    <button type="button">Logout</button>
</a>

<!-- Success Massege -->
    <div id="notification" class="notification">
      <div class="notification__body">
        <h2>Success</h2>
        <p id="status-msg-success"></p>
      </div>
      <button id="closeBtn" class="notification__close">✕</button>
    </div>

    <!-- Error Massege -->
    <div id="notification-error" class="notification-error">
      <div class="notification__body">
        <h2>Failed</h2>
        <p id="status-msg-error"></p>
      </div>
      <button id="closeErrorBtn" class="notification__close">✕</button>
    </div>


<script>
      window.onload = function () {
        const params = new URLSearchParams(window.location.search);
        if (params.get("status") === "success") {
          const popup = document.getElementById("notification");
          const succMsg=document.getElementById("status-msg-success");
          succMsg.innerHTML = params.get("successMsg");
          popup.classList.add("show");
          setTimeout(() => {
            popup.classList.remove("show");
          }, 3000);
          const newUrl = window.location.pathname;
          window.history.replaceState({}, document.title, newUrl);
        } else if (params.get("status") === "error") {
          const errorMsg=document.getElementById("status-msg-error");
          const popup = document.getElementById("notification-error");
          errorMsg.innerHTML = params.get("errorMsg");
          popup.classList.add("show");
          setTimeout(() => {
            popup.classList.remove("show");
          }, 3000);
          const newUrl = window.location.pathname;
          window.history.replaceState({}, document.title, newUrl);
        }
      };
    </script>
</body>
</html>