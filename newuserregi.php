<?php
$servername = "localhost"; // Name des Datenbankservers
$username = "phpmyadmin"; // Dein Benutzername für die Datenbank
$password = "dein_passwort"; // Dein Passwort für die Datenbank
$dbname = "accounts"; // Der Name deiner Datenbank

// Verbindung zur Datenbank herstellen
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Verbindung fehlgeschlagen: " . mysqli_connect_error());
}

// Benutzer in die Datenbank einfügen
$sql = "INSERT INTO users (username, password) VALUES ('hierbn', 'hierpasswort')";
if (mysqli_query($conn, $sql)) {
    echo "Benutzer wurde erfolgreich eingefügt.";
} else {
    echo "Fehler beim Einfügen des Benutzers: " . mysqli_error($conn);
}

mysqli_close($conn); // Verbindung zur Datenbank schließen
?>