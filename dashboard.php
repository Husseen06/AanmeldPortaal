<?php
// Start the session
session_start();

// Check if the user is logged in by checking the session
if (!isset($_SESSION['gebruikersnaam'])) {
    // If the session is not set, redirect to the login page
    header('Location: login.php');
    exit;
}

// Get the username from the session
$gebruikersnaam = htmlspecialchars($_SESSION['gebruikersnaam']);
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            margin: 50px;
            text-align: center;
        }
        h1 {
            color: #333;
        }
        .logout {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welkom op je dashboard, <?php echo $gebruikersnaam; ?>!</h1>
        <p>Je bent succesvol ingelogd.</p>
        <div class="logout">
            <a href="logout.php">Uitloggen</a>
        </div>
    </div>
</body>
</html>
