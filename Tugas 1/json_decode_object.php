<?php
// Membuat variabel JSON
$jsonData = '{"nama":"Budi","umur":25,"pekerjaan":"Programmer"}';

// Decode ke bentuk PHP Object
$object = json_decode($jsonData);
echo "Nama (dari Object): " . $object->nama . "\n";
echo "Umur (dari Object): " . $object->umur . "\n";
echo "Pekerjaan (dari Object): " . $object->pekerjaan . "\n";
?>
