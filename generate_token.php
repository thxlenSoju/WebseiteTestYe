<?php
session_start();

// Funktion zur Generierung eines sicheren Tokens
function generateSessionToken($udid) {
    // Beispiel: Ein einfacher Weg, einen zufälligen Token zu generieren
    return md5($udid . time() . rand());
}

// UDID empfangen, z.B. über eine GET-Anfrage
$udid = $_GET['UDID'] ?? 'Unknown';

// Session-Token generieren
$_SESSION['token'] = generateSessionToken($udid);
$_SESSION['udid'] = $udid;  // UDID in der Session speichern

// Nutzer zurück zur Order-Seite leiten mit dem Token als URL-Parameter
header('Location: https://thxlensoju.github.io/WebseiteTestYe/order.html?token=' . $_SESSION['token']);
exit;