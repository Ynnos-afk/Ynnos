<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>iVoteAssist</title>
  <link rel="stylesheet" href="styles.css">
  <!-- Optional: Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body>
  <!-- Header -->
  <header class="navbar">
    <div class="logo">
      <img src="logo.png" alt="iVoteAssist Logo"> <!-- your logo -->
      <span>iVoteAssist</span>
    </div>
    <nav>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">How it Works</a></li>
        <li><a href="#">About</a></li>
      </ul>
    </nav>
    <div class="auth-buttons">
      <a href="#" class="login-btn">Login</a>
      <a href="#" class="signup-btn">Sign Up</a>
    </div>
  </header>

  <!-- Hero Section -->
  <section class="hero">
    <div class="hero-text">
      <h1>Skip the Help Desk.<br>Find Your Voting Room Instantly.</h1>
      <p>
        iVoteAssist is a digital tool that helps residents of Barangay San Bartolome
        find their designated voting room using their precinct number.
      </p>
      <div class="hero-buttons">
        <a href="#" class="btn btn-primary">Get Started</a>
        <a href="#" class="btn btn-secondary">Learn More</a>
      </div>
    </div>
    <div class="hero-phone">
      <form class="room-form" method="post">
        <label for="precinct">Find Your Room</label>
        <input type="text" name="precinct" id="precinct" placeholder="Enter Precinct Number" required>
        <button type="submit">Find My Room</button>
        <?php
        // simple PHP logic for demonstration
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
          $precinct = htmlspecialchars($_POST['precinct']);
          // pretend mapping precinct → room
          $room = "204"; // in real app you’d fetch from database
          echo "<div class='result'>✅ You are assigned to Room $room</div>";
        }
        ?>
      </form>
    </div>
  </section>
</body>
</html>
