<?php

$siswa1 = [ "nama" => "abduh",
            "kelas" => "laravel",
            "nilai" => 70
          ];
print_r($siswa1['kelas']);

// menambahkan key value baru ke array $siswa1
$siswa1["nama"] = "abduh";

print_r($siswa1);