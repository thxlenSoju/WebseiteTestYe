document.getElementById("fetch-udid").addEventListener("click", function() {
    // Leitet den Benutzer an einen Link weiter, um das iOS-Profil herunterzuladen
    window.location.href = "https://yourserver.com/download-udid-profile";

    // Beispielcode, um das UDID-Feld zu füllen
    // Der tatsächliche Code würde abhängig von der Serverantwort implementiert werden
    // Hier wird ein Demo-UDID verwendet
    setTimeout(function() {
        const exampleUdid = "00000000-0000000000000000"; // Beispielwert
        document.getElementById("udid").value = exampleUdid;
    }, 3000); // Wartezeit simuliert die Dauer bis zum Profilabruf
});
