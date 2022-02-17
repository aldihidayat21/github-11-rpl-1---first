<?php
$hewan = [
       [
           'nama' => "Abdul",
           'peliharaan' => 
           [
               ['nama' => "Kelinci"],
               ['nama' => "Ikan"]
           ]
        ],
        [
            'nama' => "Rianto",
            'peliharaan'=>
            [
                ['nama' => "Kucing"],
                ['nama' => "Burung"],
                ['nama' => "Macan"]
            ]
        ]
];

foreach($hewan as $data) {
    echo "Nama Pemilik : ".$data['nama']."<br>";
    echo "Daftar Hewan Peliharaan :";
    echo "<ul>";
    foreach($data['peliharaan'] as $peliharaan) {
        echo "<li>".$peliharaan['nama']."</li>";
    }
    echo "</ul>";