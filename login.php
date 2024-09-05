<?php
// Verbind met de database
$dsn = "mysql:host=localhost;dbname=inlog project"; // Data Source Name
$conn = new PDO($dsn, 'root', ''); // PDO-verbinding

// Controleer of het formulier is verzonden
if (isset($_POST['submit'])) {
    // Verkrijg de ingediende gegevens
    $gebruikersnaam = $_POST['gebruikersnaam'];
    $wachtwoord = $_POST['wachtwoord'];

    // Bereid een SQL-statement voor om de gebruiker te controleren
    $stmt = $conn->prepare("SELECT * FROM inlog WHERE gebruikersnaam = ? AND wachtwoord = ?");
    $stmt->execute([$gebruikersnaam, $wachtwoord]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // Controleer of er een gebruiker is gevonden
    if ($user) {
        // Log de gebruiker in (bijv. start een sessie)
        session_start();
        $stmt->execute([
            $naam, $achternaam, $email, $gebruikersnaam, $wachtwoord
         ]);
         header('Location: login.html');
         exit;
    } else {
        echo "Invalid username or password.";
    }
}
?>
