<?php
// Membuat array
$array = array("nama" => "Budi", "umur" => 25, "pekerjaan" => "Programmer");

// Encode ke format JSON
$json = json_encode($array);

// Tampilkan hasil encode JSON
echo "Hasil JSON Encode: " . $json . "\n";
?>
