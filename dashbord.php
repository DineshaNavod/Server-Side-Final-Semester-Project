<?php session_start(); ?>

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
        </a>

        <div class="menu-toggle" id="menuToggle">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </nav>

    <!-- Features Section with Tabs -->
    <section class="features" id="features">
      <h2 class="section-title">Core Features</h2>
      <div class="features-container">
        <div class="feature-tabs">
          <div class="tab-item active" data-tab="performance">
            <span class="tab-icon">⚡</span>
            <span>Lost Item</span>
          </div>
          <div class="tab-item" data-tab="security">
            <span class="tab-icon">🔒</span>
            <span>Found Item</span>
          </div>
          <div class="tab-item" data-tab="network">
            <span class="tab-icon">🌐</span>
            <span>Network</span>
          </div>
          <div class="tab-item" data-tab="analytics">
            <span class="tab-icon">📊</span>
            <span>Analytics</span>
          </div>
          <div class="tab-item" data-tab="integration">
            <span class="tab-icon">🔧</span>
            <span>Integration</span>
          </div>
        </div>

        <div class="feature-content">

            <!-- Bashitha HTML Part -->
          <div class="content-panel active" id="performance">
            <h3>Lost</h3>
            <h3><center>Report Lost Item</center></h3>
            <div class="form-container">
              <form method="post" enctype="multipart/form-data" action="phpscripts/lost.php">
                <label>Your Name: </label>
                <input
                  type="text"
                  name="owner_name"
                  placeholder="Owner Name"
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
                  placeholder="Enter email address" 
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

                <label>Description: </label>
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
        <h3>Found</h3>
        <h3><center>Report Found Item</center></h3>
        <div class="form-container">
            <form method="post" enctype="multipart/form-data" action="phpscripts/found.php">
            <label>Your Name:</label>
            <input type="text" name="owner_name" placeholder="Owner Name" required>

            <label>Phone Number:</label>
            <input type="text" name="phone" placeholder="Enter phone number" required>

            <label>Email:</label>
            <input type="email" name="email" placeholder="Enter email address" required>

            <label>Item Name:</label>
            <select name="item_name" required>
                <option value="">Select Item</option>
                <option value="Purse">Purse</option>
                <option value="Phone">Phone</option>
                <option value="Bag">Bag</option>
                <option value="Umbrella">Umbrella</option>
                <option value="Book">Book</option>
            </select>

            <label>Description:</label>
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
          <h3>Lost & Found Items</h3>
          <h4>Items History</h4>
          <div class="grid-container">
              <?php
              require './Includes/db.php'; 

              $sqlLost = "SELECT * FROM Lost ORDER BY date_lost DESC";
              $resultLost = mysqli_query($conn, $sqlLost);

              if(mysqli_num_rows($resultLost) > 0){
                  while($row = mysqli_fetch_assoc($resultLost)){
                      echo '<div class="card">';
                      if($row['img'] != ""){
                          echo '<img src="uploads/'.$row['img'].'" alt="Item Image">';
                      } else {
                          echo '<img src="https://via.placeholder.com/150x150?text=No+Image" alt="No Image">';
                      }
                      echo '<div class="card-content">';
                      echo '<h3>'.$row['item_name'].' (Lost)</h3>';
                      echo '<p><span>Owner:</span> '.$row['owner_name'].'</p>';
                      echo '<p><span>Phone:</span> '.$row['phone'].'</p>';
                      echo '<p><span>Email:</span> '.$row['email'].'</p>';
                      echo '<p><span>Location:</span> '.$row['locat'].'</p>';
                      echo '<p><span>Date Lost:</span> '.$row['date_lost'].'</p>';
                      echo '<p><span>Description:</span> '.$row['discription'].'</p>';
                      echo '<p><span>#tag:</span> #'.$row['item_name'].'</p>';
                      echo '</div></div>';
                  }
              } else {
                  echo '<p style="text-align:center; color:#ccc;">No lost items reported yet.</p>';
              }

              // --- Display Found Items ---
              $sqlFound = "SELECT * FROM Found ORDER BY date_found DESC";
              $resultFound = mysqli_query($conn, $sqlFound);

              if(mysqli_num_rows($resultFound) > 0){
                  while($row = mysqli_fetch_assoc($resultFound)){
                      echo '<div class="card">';
                      if($row['img'] != ""){
                          echo '<img src="uploads/'.$row['img'].'" alt="Item Image">';
                      } else {
                          echo '<img src="https://via.placeholder.com/150x150?text=No+Image" alt="No Image">';
                      }
                      echo '<div class="card-content">';
                      echo '<h3>'.$row['item_name'].' (Found)</h3>';
                      echo '<p><span>Owner:</span> '.$row['owner_name'].'</p>';
                      echo '<p><span>Phone:</span> '.$row['phone'].'</p>';
                      echo '<p><span>Email:</span> '.$row['email'].'</p>';
                      echo '<p><span>Location:</span> '.$row['locat'].'</p>';
                      echo '<p><span>Date Found:</span> '.$row['date_found'].'</p>';
                      echo '<p><span>Description:</span> '.$row['discription'].'</p>';
                      echo '<p><span>#tag:</span> #'.$row['item_name'].'</p>';
                      echo '</div></div>';
                  }
              } else {
                  echo '<p style="text-align:center; color:#ccc;">No found items reported yet.</p>';
              }

              mysqli_close($conn);
              ?>
          </div>
      </div>


        <div class="content-panel" id="analytics">
            <h3>Advanced Analytics</h3>
            <p>
              Harness the power of AI-driven insights to make data-driven
              decisions. Real-time analytics and predictive modeling at your
              fingertips.
            </p>
            <ul class="feature-list">
              <li>Machine learning algorithms</li>
              <li>Predictive analytics</li>
              <li>Custom dashboard creation</li>
              <li>Real-time data visualization</li>
              <li>Automated reporting</li>
            </ul>
          </div>

          <div class="content-panel" id="integration">
            <h3>Seamless Integration</h3>
            <p>
              Connect with thousands of apps and services through our universal
              API. Built to work with your existing tools and workflows.
            </p>
            <ul class="feature-list">
              <li>RESTful API architecture</li>
              <li>WebSocket support</li>
              <li>SDK for major platforms</li>
              <li>One-click integrations</li>
              <li>Custom webhook support</li>
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
          © 2025 ELECTRIC XTRA. All rights reserved. Building tomorrow, today. |
          Design:
          <a
            href="https://templatemo.com"
            target="_blank"
            rel="nofollow noopener"
            >TemplateMo</a
          >
        </p>
      </div>
    </footer>

    <script src="<?php echo './assets/js/dashboard.js'; ?>"></script>
    <?php
        if (isset($_GET['status']) && isset($_GET['type'])): ?>
        <script>
            window.addEventListener('DOMContentLoaded', () => {
                <?php if ($_GET['status'] == 'success' && $_GET['type'] == 'lost'): ?>
                    alert("✅ Lost item reported successfully!");
                <?php elseif ($_GET['status'] == 'success' && $_GET['type'] == 'found'): ?>
                    alert("✅ Found item reported successfully!");
                <?php elseif ($_GET['status'] == 'error' && isset($_GET['message'])): ?>
                    alert("❌ <?= addslashes($_GET['message']) ?>");
                <?php endif; ?>
            });
        </script>
    <?php endif; ?>
  
    </body>
</html>