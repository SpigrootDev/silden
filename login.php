<?php
// Verbindung zur Datenbank herstellen
$servername = "localhost"; // Name des Datenbankservers
$username = "phpmyadmin"; // Dein Benutzername für die Datenbank
$password = "dein_passwort"; // Dein Passwort für die Datenbank
$dbname = "accounts"; // Der Name deiner Datenbank

$conn = new mysqli($servername, $username, $password, $dbname);

// Überprüfung der Benutzerdaten
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Benutzerdaten sind korrekt
    // Weiterleitung zur personalisierten Seite
    header('Location: personalisierte_seite.php');
} else {
    // Benutzerdaten sind falsch
    // Fehlermeldung ausgeben oder Zurückleitung zum Login-Formular
    header('Location: login.html');
}

$conn->close(); // Verbindung zur Datenbank schließen
?>