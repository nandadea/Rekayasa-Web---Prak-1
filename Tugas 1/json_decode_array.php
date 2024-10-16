<?php
// Membuat variabel JSON
$jsonData = '{"nama":"Budi","umur":25,"pekerjaan":"Programmer"}';

// Decode ke bentuk PHP Array
$array = json_decode($jsonData, true);
echo "Nama (dari Array): " . $array['nama'] . "\n";
echo "Umur (dari Array): " . $array['umur'] . "\n";
echo "Pekerjaan (dari Array): " . $array['pekerjaan'] . "\n";
?>
