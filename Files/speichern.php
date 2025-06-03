<?php
$vorname = $_POST['vorname'] ?? '';
$nachname = $_POST['nachname'] ?? '';
$anliegen = $_POST['anliegen'] ?? '';
$email = $_POST['email'] ?? '';

$daten = [$vorname, $nachname, $anliegen, $email];

$datei = 'kontakte.csv';
$handle = fopen($datei, 'a');
fputcsv($handle, $daten);
fclose($handle);

echo "<script>
  alert('Formular erfolgreich gesendet und gespeichert!');
  window.location.href = 'kontakt.html';
</script>";
?>
