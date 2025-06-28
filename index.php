<?php
include 'db_connect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Election Portal</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <header>
        <nav class="navbar">
            <div class="logo">🗳️ PollTracker</div>
            <ul class="nav-links">
                <li><a href="polling_unit_results.php">Polling Unit Results</a></li>
                <li><a href="lga_results.php">LGA Results</a></li>
                <li><a href="new_polling_unit.php">Add New Polling Unit</a></li>
                <li><a href="#">About</a></li>
                <!-- <li><a href="#">Wards</a></li>
                <li><a href="#">Polling Units</a></li> -->
                <li><a href="#">Contact</a></li>
            </ul>
            <div class="nav-buttons">
                <a href="#" class="btn secondary">Log In</a>
                <a href="#" class="btn primary">Sign Up</a>
            </div>
        </nav>
    </header>

    <main class="hero">
        <div class="hero-text">
            <h1>
                The <span class="highlight">results</span><br />
                you’ve been<br />
                waiting for
            </h1>
            <p>
                This platform helps track real-time election results across polling units, wards, and LGAs in Delta
                State.
            </p>
            <a href="#" class="btn primary">Start Tracking</a>
        </div>
        <div class="hero-image">
            <img src="./images/polling-solution.jpg" alt="Election Official" />
        </div>
    </main>

    <footer>
        <div class="footer-container">
            <div class="footer-logo">🗳️ PollTracker</div>
            <div class="footer-links">
                <a href="#">Privacy Policy</a>
                <a href="#">Terms of Service</a>
                <a href="#">Support</a>
            </div>
            <p class="footer-note">&copy; 2025 PollTracker. All rights reserved.</p>
        </div>
    </footer>
</body>

</html>