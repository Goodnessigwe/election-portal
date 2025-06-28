<?php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $polling_unit_id = intval($_POST['polling_unit_id']);
    $party = $_POST['party'];
    $score = intval($_POST['score']);

    $sql = "INSERT INTO announced_pu_results (polling_unit_uniqueid, party_abbreviation, party_score, entered_by_user, date_entered)
            VALUES (?, ?, ?, 'Admin', NOW())";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("isi", $polling_unit_id, $party, $score);

    if ($stmt->execute()) {
        echo "<p>Result added successfully!</p>";
    } else {
        echo "<p>Error: " . $conn->error . "</p>";
    }
    $stmt->close();
}
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
                <li><a href="index.php">Home</a></li>
                <li><a href="polling_unit_results.php">Polling Unit Results</a></li>
                <li><a href="lga_results.php">LGA Results</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
            <div class="nav-buttons">
                <a href="#" class="btn secondary">Log In</a>
                <a href="#" class="btn primary">Sign Up</a>
            </div>
        </nav>
    </header>

    <div class="container">
        <div class="form-container">

            <h2>Add Polling Unit Result</h2>
            <form method="POST">
                <label>Select Polling Unit:</label>
                <select name="polling_unit_id" required>
                    <option value="">-- Choose --</option>
                    <?php
                    $query = "SELECT uniqueid, polling_unit_name FROM polling_unit";
                    $result = $conn->query($query);
                    while ($row = $result->fetch_assoc()) {
                        echo "<option value='{$row['uniqueid']}'>{$row['polling_unit_name']}</option>";
                    }
                    ?>
                </select>

                <label>Party:</label>
                <input type="text" name="party" required>

                <label>Score:</label>
                <input type="number" name="score" required>

                <button type="submit">Add Result</button>
            </form>
        </div>
    </div>

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