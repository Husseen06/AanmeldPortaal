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
    <title>Homepagina</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <header>
        <div class="header-container">
            <h1>Login Project</h1>
            <nav>
                <a href="dashboard.php">Dashboard</a>
                <a href="logout.php">Uitloggen</a>
            </nav>
        </div>
    </header>

    <main>
        <div class="profile">
            <img src="path/to/default-profile.jpg" alt="Profielafbeelding" class="profile-picture">
            <h2>Welkom, <?php echo $gebruikersnaam; ?>!</h2>
            <p>Bekijk je feed, update je status, en meer!</p>
        </div>

        <div class="feed">
            <div class="post">
                <h3>Gebruiker 1</h3>
                <p>Dit is een voorbeeldbericht op de feed.</p>
            </div>
            <div class="post">
                <h3>Gebruiker 2</h3>
                <p>Nog een voorbeeldbericht op de feed.</p>
            </div>
        </div>
    </main>

    <footer>
        <p>&copy; <?php echo date('Y'); ?> Hussseen Media. Alle rechten voorbehouden.</p>
    </footer>
</body>
</html>
