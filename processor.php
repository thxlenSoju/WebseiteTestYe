<?php
header('Content-Type: text/plain');

// Path to the file where the data will be stored
$file = '/var/www/html/device_data.txt';

// Receiving data
$udid = $_POST['UDID'] ?? 'No UDID';
$imei = $_POST['IMEI'] ?? 'No IMEI';
$serial = $_POST['SERIAL'] ?? 'No Serial';

// Writing data to file
$data = "UDID: $udid, IMEI: $imei, Serial: $serial\n";
file_put_contents($file, $data, FILE_APPEND);

echo "Data Received";
// Note the absence of a closing PHP tag here