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
    <link href="./assets/css/index.css" rel="stylesheet" />
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
          <li><a href="#home" class="nav-link">Home</a></li>
          <li><a href="#about" class="nav-link">About</a></li>
        </ul>
        <div class="menu-toggle" id="menuToggle">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </nav>

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

    <!-- Login Popup -->
    <div class="login">
      <div class="text-feild">
        <h2 class="log-h1">LOGIN</h2>
        <div class="input-field">
          <form action="./login.php" method="POST">
            <label style="margin-bottom: 50px">Email:</label><br />
            <input
              type="email"
              name="email"
              id="login-email"
              class="lo-input"
              placeholder="Enter Email"
            /><br />
            <label>Password:</label><br />
            <input
              type="password"
              name="password"
              id="login-password"
              class="lo-input"
              placeholder="Enter Password"
            /><br />
            <p id="error-msg" style="font-size: 15px"></p>
            <input type="checkbox" name="remember_me" id="remember" />
            <label>Keep Me In Login</label>
            <button
              class="cta-button cta-primary"
              style="display: block; margin-top: 20px"
              id="submit-login-btn"
            >
              Log In
            </button>
          </form>
          <br />
          <p>
            New here? Let’s get you started — create your
            <button class="sign-up-btn" id="signup-btn">FREE ACCOUNT</button>
          </p>
        </div>
      </div>
      <div class="image-login">
        <button class="cta-button close">❌</button>
      </div>
    </div>

    <!-- Signup popup  -->
    <div class="signup">
      <div class="text-feild">
        <h2 class="log-h1">SIGN UP</h2>
        <div class="input-field-signup">
          <form action="signup.php" method="POST">
            <label>User Name:</label><br />
            <input
              type="text"
              name="uname"
              id="signup-uname"
              class="lo-input"
              placeholder="Enter User Name"
              required
            /><br />
            <label>Email:</label><br />
            <input
              type="email"
              name="email"
              id="signup-email"
              class="lo-input"
              placeholder="Enter Email"
              required
            /><br />
            <label>Password:</label><br />
            <input
              type="password"
              name="password"
              id="signup-password"
              class="lo-input"
              placeholder="Enter Password"
              required
            /><br />
            <label>Conform Password:</label><br />
            <input
              type="password"
              name="con-password"
              id="signup-con-password"
              class="lo-input"
              placeholder="Enter Password Again"
              required
            /><br />
            <p id="signup-error-msg"></p>
            <button
              class="cta-button cta-primary"
              style="display: block; margin-top: 20px"
              id="signup-btn-popup"
            >
              Sign Up
            </button>
          </form>
        </div>
      </div>
      <div class="image-login">
        <button class="cta-button close-sign">❌</button>
      </div>
    </div>

    <!-- Hero Section -->
    <section class="hero" id="home">
      <div class="hero-content">
        <div class="text-rotator">
          <div class="text-set active">
            <h1 class="glitch-text" data-text="FUTURE IS NOW">LOST IT?</h1>
            <p class="subtitle">Tell us what’s missing,</p>
          </div>
          <div class="text-set">
            <h1 class="glitch-text" data-text="BEYOND LIMITS">DON'T WORRY!</h1>
            <p class="subtitle">Let’s find it — together.</p>
          </div>
        </div>
      </div>
      <div class="cta-container">
        <button class="cta-button cta-primary" id="login-btn">
          Get Started
        </button>

        <a href="#about" class="cta-button cta-secondary">Learn More</a>
      </div>
    </section>

    <!-- About Section -->
    <section class="about" id="about">
      <h2 class="section-title">About ReturnMate</h2>
      <div class="about-content">
        <div class="about-text">
          <h2>Reuniting People, Restoring Possessions</h2>
          <p>
            At ReturnMate, we believe every lost item carries a story — and
            every story deserves a return. Our mission is to bridge the distance
            between what’s lost and who it belongs to, transforming confusion
            into connection and loss into relief.
          </p>
          <p>
            Born from a vision to simplify campus life, ReturnMate is more than
            a lost-and-found system — it’s a digital companion built to reunite
            people with their belongings swiftly and securely.
          </p>
          <p>
            We harness the power of smart data, intuitive design, and
            community-driven collaboration to make finding what’s lost easier
            than ever. Whether it’s a misplaced phone, an ID card, or something
            priceless, ReturnMate ensures that hope is never out of reach. Join
            us as we redefine how communities stay connected — because with
            ReturnMate, what’s lost doesn’t stay lost.
          </p>
        </div>
        <div class="about-visual">
          <div class="about-graphic"></div>
        </div>
      </div>

      <!-- Second row with reversed layout -->
      <div class="about-content" style="margin-top: 80px">
        <div class="about-visual">
          <div class="about-graphic-alt">
            <div class="hexagon"></div>
            <div class="hexagon"></div>
            <div class="hexagon"></div>
          </div>
        </div>
        <div class="about-text">
          <h2>Innovation at Every Level</h2>
          <p>
            Our drive for innovation goes beyond finding lost items — it’s about
            redefining how communities connect and care. With a passionate team
            of developers, designers, and visionaries, ReturnMate transforms the
            traditional lost-and-found process into a seamless digital
            experience.
          </p>
          <p>
            From intelligent matching algorithms to real-time tracking and
            secure data management, every feature is built to empower users and
            build trust. Our system evolves with every interaction, learning,
            adapting, and improving to serve people better each day.
          </p>
          <p>
            Experience the next generation of lost-and-found — where technology
            meets empathy, and innovation finds its purpose. With ReturnMate,
            returning what’s lost isn’t just a process — it’s a promise.
          </p>
        </div>
      </div>
    </section>

    <!-- Contact Section -->

    <form id="contactForm">
      <!-- <button type="submit" class="submit-btn">Send Message</button> -->
    </form>

    <!-- Footer -->
    <footer>
      <div class="footer-content">
        <div class="footer-links">
          <a href="#privacy">Privacy Policy</a>
          <a href="#terms">Terms of Service</a>
          <a href="#careers">Careers</a>
        </div>
        <p class="copyright">
          © 2025 RETURN-MATE. All rights reserved. Lost something? Add your info
          today. | Design By GROUP 03
        </p>
      </div>
    </footer>
    <script src="./assets/js/notification.js"></script>
    <script src="./assets/js/index.js"></script>
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
    <script>
      const loginBtn = document.getElementById("submit-login-btn");
      const signupBtn = document.getElementById("signup-btn-popup");
      console.log(signupBtn);
      loginBtn.addEventListener("click", function (event) {
        const emailLogin = document.getElementById("login-email").value.trim();
        const passLogin = document
          .getElementById("login-password")
          .value.trim();
        if (!emailLogin || !passLogin) {
          document.getElementById("error-msg").innerHTML =
            "<span style='color:red'>*</span>All fields must be filled before continuing.";
          event.preventDefault();
        }
      });

      signupBtn.addEventListener("click", function (event) {
        const unameSignup = document
          .getElementById("signup-uname")
          .value.trim();
        const emailSignup = document
          .getElementById("signup-email")
          .value.trim();
        const passSignup = document
          .getElementById("signup-password")
          .value.trim();
        const conPassSignup = document
          .getElementById("signup-con-password")
          .value.trim();

        if (!unameSignup || !emailSignup || !passSignup || !conPassSignup) {
          document.getElementById("signup-error-msg").innerHTML =
            "<span style='color:red'>*</span>All fields must be filled before continuing.";
          event.preventDefault();
        }
      });
    </script>
  </body>
</html>

