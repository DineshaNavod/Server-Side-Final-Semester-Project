<?php
require_once("./Includes/auth.php");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ELECTRIC XTRA - Cyberpunk Landing Page by TemplateMo</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700;900&family=Rajdhani:wght@300;400;500;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./assets/css/dashbord.css">
    <link rel="stylesheet" href="./assets/css/Form.css">
    <link rel="stylesheet" href="./assets/css/display.css">
    <link rel="stylesheet" href="./assets/css/delete.css">
  </head>

  <body>
    <!-- Animated Grid Background -->
    <div class="grid-bg"></div>
    <div class="gradient-overlay"></div>
    <div class="scanlines"></div>

    <!-- Animated Shapes -->
    <div class="shapes-container">
      <div class="shape shape-circle"></div>
      <div class="shape shape-triangle"></div>
      <div class="shape shape-square"></div>
    </div>

    <!-- Floating Particles -->
    <div id="particles"></div>
    
   <!-- Navigation -->
   <nav id="navbar">
      <div class="nav-container">
        <a href="#home" class="logo-link">
          <svg
            class="logo-svg"
            viewBox="0 0 40 40"
            xmlns="http://www.w3.org/2000/svg"
          >
            <defs>
              <linearGradient
                id="logoGradient"
                x1="0%"
                y1="0%"
                x2="100%"
                y2="100%"
              >
                <stop
                  offset="0%"
                  style="stop-color: #ff5e00; stop-opacity: 1"
                />
                <stop
                  offset="100%"
                  style="stop-color: #00b2ff; stop-opacity: 1"
                />
              </linearGradient>
            </defs>
            <polygon
              points="20,2 38,14 38,26 20,38 2,26 2,14"
              fill="none"
              stroke="url(#logoGradient)"
              stroke-width="2"
            />
            <polygon
              points="20,8 32,16 32,24 20,32 8,24 8,16"
              fill="url(#logoGradient)"
              opacity="0.3"
            />
            <circle cx="20" cy="20" r="3" fill="url(#logoGradient)" />
          </svg>
          <span class="logo-text">RETURNMATE</span>
        </a>
        <ul class="nav-links" id="navLinks">
          <li><a href="./phpScripts/logout.php" class="nav-link">Log Out</a></li>
        </ul>
        <div class="menu-toggle" id="menuToggle">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </nav>

   

    <!-- Features Section with Tabs -->
    <section class="features" id="features">
      <h2 class="section-title">Welcome, <?php echo htmlspecialchars($user_name);?>!</h2>
      <div class="features-container">
        <div class="feature-tabs">
          <div class="tab-item active" data-tab="performance">
            <span class="tab-icon">📦</span>
            <span>Lost Item</span>
          </div>
          <div class="tab-item" data-tab="security">
            <span class="tab-icon">✅</span>
            <span>Found Item</span>
          </div>
          <div class="tab-item" data-tab="network">
            <span class="tab-icon">🧾</span>
            <span>All Reports</span>
          </div>
          <div class="tab-item" data-tab="My_Post">
            <span class="tab-icon">✔️</span>
            <span>My Post</span>
          </div>
          <div class="tab-item" data-tab="analytics">
            <span class="tab-icon">⏳</span>
            <span>History</span>
          </div>
          <div class="tab-item" data-tab="integration">
            <span class="tab-icon">🛡️</span>
            <span>Disclaimer</span>
          </div>
        </div>

        <div class="feature-content">

            <!-- Bashitha HTML Part -->
          <div class="content-panel active" id="performance">
            <h3><center>Report Lost Item</center></h3>
            <div class="form-container">
              <form method="post" enctype="multipart/form-data" action="phpscripts/lost.php">
                <label>User Name: </label>
                <input
                  type="text"
                  name="owner_name"
                  placeholder="User Name"
                  required
                />

                <label>Phone Number: </label>
                <input 
                  type="text" 
                  name="phone" 
                  placeholder="Enter phone number" 
                  required
                />

                <label>Email: </label>
                <input 
                  type="email" 
                  name="email" 
                  placeholder="You account created email address" 
                  required
                />

                <label>Item Name: </label>
                <select name="item_name" id="it">
                  <option value="purse">Purse</option>
                  <option value="phone">Phone</option>
                  <option value="Bag">Bag</option>
                  <option value="Umbrella">Umbrella</option>
                  <option value="Book">Book</option>
                </select>

                <label style="margin-top: 20px;">Description: </label>
                <textarea
                  name="description"
                  placeholder="Description"
                  rows="3"
                  required
                ></textarea>
                <label>Location Lost: </label>
                <input
                  type="text"
                  name="location"
                  placeholder="Location Lost"
                  required
                />
                <label>Date: </label>
                <input type="date" name="date_lost" required />
                <label>Image: </label>
                <input type="file" name="image" accept="image/*" />
                <button type="submit" name="submit" class="lostdash_btn">Submit Report</button>
              </form>
            </div>
          </div>

        <!-- Chalindu HTML Part -->
        <div class="content-panel" id="security" >
        <h3><center>Report Found Item</center></h3>
        <div class="form-container">
            <form method="post" enctype="multipart/form-data" action="phpscripts/found.php">
            <label>User Name:</label>
            <input type="text" name="owner_name" placeholder="User Name" required>

            <label>Phone Number:</label>
            <input type="text" name="phone" placeholder="Enter phone number" required>

            <label>Email:</label>
            <input type="email" name="email" placeholder="You account created email address"  required>

            <label>Item Name:</label>
            <select name="item_name" required>
                <option value="">Select Item</option>
                <option value="Purse">Purse</option>
                <option value="Phone">Phone</option>
                <option value="Bag">Bag</option>
                <option value="Umbrella">Umbrella</option>
                <option value="Book">Book</option>
            </select><br>

            <label style="margin-top: 20px;">Description:</label>
            <textarea name="description" placeholder="Description" rows="3" required></textarea>

            <label>Location Found:</label>
            <input type="text" name="location" placeholder="Location Found" required>

            <label>Date Found:</label>
            <input type="date" name="date_found" required>

            <label>Image:</label>
            <input type="file" name="image" accept="image/*">

            <button type="submit" name="submit" class="lostdash_btn">Submit Report</button>
            </form>
        </div>
        </div>



        <!-- Chenuka Html Part -->

<div class="content-panel" id="network">
<h3>All Reports</h3>
  <div class="grid-container">
    <?php
      require './Includes/db.php';
      $sqlAllLost = "SELECT * FROM Lost ORDER BY date_lost DESC";
      $sqlAllFound = "SELECT * FROM Found ORDER BY date_found DESC";

      $resultAllLost = mysqli_query($conn, $sqlAllLost);
      $resultAllFound = mysqli_query($conn, $sqlAllFound);

      // Lost items
      if(mysqli_num_rows($resultAllLost) > 0){
          while($row = mysqli_fetch_assoc($resultAllLost)){
              echo '<div class="card">';
              $img = $row['img'] != "" ? "uploads/".$row['img'] : "https://via.placeholder.com/150x150?text=No+Image";
              echo '<img src="'.$img.'" alt="Lost Item">';
              echo '<div class="card-content">';
              echo '<h3>'.$row['item_name'].' (Lost)</h3>';
              echo '<p>Owner: '.$row['owner_name'].'</p>';
              echo '<p>Phone: '.$row['phone'].'</p>';
              echo '<p>Email: '.$row['email'].'</p>';
              echo '<p>Location: '.$row['locat'].'</p>';
              echo '<p>Date Lost: '.$row['date_lost'].'</p>';
              echo '<p>Description: '.$row['discription'].'</p>';
              echo '</div></div>';
          }
      } else {
          echo '<p style="text-align:center; color:#ccc;">No lost items reported.</p>';
      }

      // Found items
      if(mysqli_num_rows($resultAllFound) > 0){
          while($row = mysqli_fetch_assoc($resultAllFound)){
              echo '<div class="card">';
              $img = $row['img'] != "" ? "uploads/".$row['img'] : "https://via.placeholder.com/150x150?text=No+Image";
              echo '<img src="'.$img.'" alt="Found Item">';
              echo '<div class="card-content">';
              echo '<h3>'.$row['item_name'].' (Found)</h3>';
              echo '<p>Owner: '.$row['owner_name'].'</p>';
              echo '<p>Phone: '.$row['phone'].'</p>';
              echo '<p>Email: '.$row['email'].'</p>';
              echo '<p>Location: '.$row['locat'].'</p>';
              echo '<p>Date Found: '.$row['date_found'].'</p>';
              echo '<p>Description: '.$row['discription'].'</p>';
              echo '</div></div>';
          }
      }
      mysqli_close($conn);
    ?>
  </div>
</div>

<!-- Girls part -->

<div class="content-panel" id="analytics">
    <h3>Deleted Items History</h3>
 

    <div class="grid-container">
        <?php
        require './Includes/db.php'; 

        $isAdmin = (isset($_SESSION['role']) && $_SESSION['role'] === 'admin');

        $sqlHistory = "SELECT * FROM history ORDER BY deleted_at DESC";
        $resultHistory = mysqli_query($conn, $sqlHistory);

        if(mysqli_num_rows($resultHistory) > 0){
            while($row = mysqli_fetch_assoc($resultHistory)){
                echo '<div class="card">';
                
                if($row['img'] != ""){
                    echo '<img src="uploads/'.$row['img'].'" alt="Item Image">';
                } else {
                    echo '<img src="https://via.placeholder.com/150x150?text=No+Image" alt="No Image">';
                }

                echo '<div class="card-content">';
                echo '<h3>'.$row['item_name'].' ('.$row['item_type'].')</h3>';
                echo '<p><span>Owner:</span> '.$row['owner_name'].'</p>';
                echo '<p><span>Phone:</span> '.$row['phone'].'</p>';
                echo '<p><span>Email:</span> '.$row['email'].'</p>';
                echo '<p><span>Location:</span> '.$row['locat'].'</p>';
                echo '<p><span>Date:</span> '.$row['item_date'].'</p>';
                echo '<p><span>Description:</span> '.$row['discription'].'</p>';
                echo '<p><span>Deleted At:</span> '.$row['deleted_at'].'</p>';
                echo '</div></div>';
            }
        } else {
            echo '<p style="text-align:center; color:#ccc;">No deleted items yet.</p>';
        }

        mysqli_close($conn);
        ?>
    </div>
</div>


<div class="content-panel" id="My_Post">
  <h3>My Reports</h3>
  <div class="grid-container">
    <?php
      require './Includes/db.php';
      $currentUserId = (int)$_SESSION['user_id'];


      $sqlMyLost = "SELECT * FROM Lost WHERE user_id=$currentUserId ORDER BY date_lost DESC";
      $resultMyLost = mysqli_query($conn, $sqlMyLost);

      if(mysqli_num_rows($resultMyLost) > 0){
          while($row = mysqli_fetch_assoc($resultMyLost)){
              echo '<div class="card">';
              

              echo '<form method="post" action="phpscripts/delete_post.php" onsubmit="return confirm(\'Are you sure you want to delete this post?\');">
                      <input type="hidden" name="item_id" value="'.$row['id'].'">
                      <input type="hidden" name="item_type" value="Lost">
                      <button type="submit" name="delete" class="delete-btn">❌</button>
                    </form>';

              $img = $row['img'] != "" ? "uploads/".$row['img'] : "https://via.placeholder.com/150x150?text=No+Image";
              echo '<img src="'.$img.'" alt="Lost Item">';
              echo '<div class="card-content">';
              echo '<h3>'.$row['item_name'].' (Lost)</h3>';
              echo '<p>Owner: '.$row['owner_name'].'</p>';
              echo '<p>Phone: '.$row['phone'].'</p>';
              echo '<p>Email: '.$row['email'].'</p>';
              echo '<p>Location: '.$row['locat'].'</p>';
              echo '<p>Date Lost: '.$row['date_lost'].'</p>';
              echo '<p>Description: '.$row['discription'].'</p>';
              echo '</div></div>';
          }
      }

      $sqlMyFound = "SELECT * FROM Found WHERE user_id=$currentUserId ORDER BY date_found DESC";
      $resultMyFound = mysqli_query($conn, $sqlMyFound);

      if(mysqli_num_rows($resultMyFound) > 0){
          while($row = mysqli_fetch_assoc($resultMyFound)){
              echo '<div class="card">';
              
              echo '<form method="post" action="phpscripts/delete_post.php" onsubmit="return confirm(\'Are you sure you want to delete this post?\');">
                      <input type="hidden" name="item_id" value="'.$row['id'].'">
                      <input type="hidden" name="item_type" value="Found">
                      <button type="submit" name="delete" class="delete-btn">❌</button>
                    </form>';

              $img = $row['img'] != "" ? "uploads/".$row['img'] : "https://via.placeholder.com/150x150?text=No+Image";
              echo '<img src="'.$img.'" alt="Found Item">';
              echo '<div class="card-content">';
              echo '<h3>'.$row['item_name'].' (Found)</h3>';
              echo '<p>Owner: '.$row['owner_name'].'</p>';
              echo '<p>Phone: '.$row['phone'].'</p>';
              echo '<p>Email: '.$row['email'].'</p>';
              echo '<p>Location: '.$row['locat'].'</p>';
              echo '<p>Date Found: '.$row['date_found'].'</p>';
              echo '<p>Description: '.$row['discription'].'</p>';
              echo '</div></div>';
          }
      }

      mysqli_close($conn);
    ?>
  </div>
</div>


          <div class="content-panel" id="integration">
            <h3>Disclaimer for uses</h3>
            <ul class="feature-list">
              <li style="line-height: 25px;">The information provided on this Lost and Found Management System is submitted by users in good faith. While we make every effort to verify and maintain the accuracy of the details posted, returnmate cannot guarantee that all listed items or claims are genuine or up to date.</li>
              <li style="line-height: 25px;">Users are solely responsible for the information they share and any actions taken based on the listings. returnmate is not liable for any loss, damage, or dispute arising from the use of this platform.</li>
              <li  style="line-height: 25px;">By using this website, you agree to use it ethically and responsibly, avoiding any misuse or fraudulent reporting.</li>
            </ul>
          </div>
          </section>

    <footer>
      <div class="footer-content">
        <div class="footer-links">
          <a href="#privacy">Privacy Policy</a>
          <a href="#terms">Terms of Service</a>
          <a href="#careers">Careers</a>
        </div>
        <p class="copyright">
        RETURNMATE © 2025 GROUP 03 — Restoring trust in a digital world. Lost today, found tomorrow.
        </p>
      </div>
    </footer>

    <script src="<?php echo './assets/js/dashboard.js'; ?>"></script>

    <?php if (isset($_GET['status'])): ?>
        <script>
            window.addEventListener('DOMContentLoaded', () => {
                <?php if ($_GET['status'] === 'success' && $_GET['type'] === 'lost'): ?>
                    alert("✅ Lost item reported successfully!");
                <?php elseif ($_GET['status'] === 'error' && isset($_GET['message'])): ?>
                    alert("❌ <?= addslashes($_GET['message']) ?>");
                <?php endif; ?>
            });
        </script>
    <?php endif; ?>

    
  
    </body>
</html>