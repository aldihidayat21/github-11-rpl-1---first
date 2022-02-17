<?php

$kuliah = [
    [
        'nama dosen' => "Aceng Fikri",
        'nama mahasiswa' => "Maul",
        'mata kuliah' => 
        [
           ['makul' => "RPL"],
           ['makul' => "Database"],
           ['makul' => "OOP"]
        ],

        'hobi' =>
        [
            ['hobb' => "Menggambar"],
            ['hobb' => "Ngoding"],
        ]
    
    ],

    [
        'nama dosen' => "Aceng Fikri",
        'nama mahasiswa' => "Messi",
        'mata kuliah' => 
        [
           ['makul' => "Fisika"],
           ['makul' => "Biologi"],
           ['makul' => "Kimia"]
        ],
        'hobi' => 
        [
            ['hobb' => "Menulis"],
            ['hobb' => "Bersepeda"],
        ]
       
    ],

    [
        'nama dosen' => "Aceng Fikri",
        'nama mahasiswa' => "Adam",
        'mata kuliah' => 
        [
           ['makul' => "Java"],
           ['makul' => "Fisiologi"],
           ['makul' => "OOP"]
        ],
        'hobi' => 
        [
            ['hobb' => "Berenang"],
            ['hobb' => "Melukis"],
        ]
       
    ],

    [
        'nama dosen' => "Ujang Betok",
        'nama mahasiswa' => "David",
        'mata kuliah' => 
        [
           ['makul' => "TKJ"],
           ['makul' => "Matematika"],
           ['makul' => "B. Inggris"]
        ],
        'hobi' => 
        [
            ['hobb' => "Berolahraga"],
            ['hobb' => "Bermain Game"],
        ]
        
    ],

    [
        'nama dosen' => "Ujang Betok",
        'nama mahasiswa' => "Kimmy",
        'mata kuliah' => 
        [
           ['makul' => "Sains"],
           ['makul' => "Teknologi"],
           ['makul' => "Ekonomi"]
        ],
        'hobi' =>
        [
           ['hobb' => "Basket"],
           ['hobb' => "Berbinis"],
        ] 
        
    ],

    [
        'nama dosen' => "Ujang Betok",
        'nama mahasiswa' => "Yogi",
        'mata kuliah' => 
        [
           ['makul' => "RPL"],
           ['makul' => "PHP"],
           ['makul' => "Function"]
        ],
        'hobi' => 
        [
           ['hobb' => "Voly"],
           ['hobb' => "Badminton"],
        ]
       
    ],

   
];

foreach($kuliah as $data){
    echo "Nama Dosen : " . $data['nama dosen'] . "<br>";
    echo "Nama Mahasiswa : ". $data['nama mahasiswa'] . "<br>";
    echo "Mata Kuliah : ";
    echo "<ul>";
   foreach($data['mata kuliah'] as $isi){
       echo "<li>" . $isi['makul'] . "</li>";
   }
   echo "</ul>";

   echo "Hobi : ";
   echo "<ul>";
   foreach($data['hobi'] as $hoby){
       echo "<li>" . $hoby['hobb'] . "</li>";
   }
   echo "</ul>";
}

?>