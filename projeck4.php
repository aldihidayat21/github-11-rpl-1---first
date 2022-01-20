<?php
// membuat array
$barang = ["Buku Tulis", "Penghapus", "Spidol"];

// menampilkan isi array
echo"Menambahkan array<br>";
echo"<br>";
echo $barang[0]."<br>";
echo $barang[1]."<br>";
echo $barang[2]."<br>";

//menghapus buku tulis


unset($barang[0]);

echo"<hr>";
echo"Menghapus array<br>";
echo"<br>";
echo ($barang[1]."<br>");
echo ($barang[2]."<br>");
?>