<?php
// perbedaan String ('') ("")
$nama = 'jojon';
$pesan = "Selamat Datang {$nama}";
$pesan2 = 'Selamat Datang {$nama}';
echo $pesan .'<br>';
echo $pesan2 . '<br>';

// operator assignment '.='
$namaDepan = "jojon";
$namaBelakang = "Resse";
$namaLengkap = $namaDepan . ' ' . $namaBelakang;
echo ($namaLengkap);

// operator dan tipe data 
$i = 5;
echo "Hasil akhir: " .($i + 3);

// panjang karakter string
$loremIpsum = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati quo ipsa temporibus tenetur fugiat corporis iusto, minus, dolorem nemo libero perspiciatis in assumenda repellat officiis doloribus nostrum molestiae totam unde.";
echo "<p>" . $loremIpsum ."<br>";
echo "panjang Karakter: " . strlen($loremIpsum) . "<br>";
// menghitung jumlah kata
echo "Panjang Kata: " . str_word_count($loremIpsum) . "<br>";
// memotong string
// dari index 0 sampai sepanjang 150 karakter
echo "<p>" . substr($loremIpsum,0 , 150) . "<br>";
// dari index 30 sampai sepanjang 150 karakter
echo "<p>" . substr($loremIpsum,30 , 150) . "<br>";
// dari index 100 sampai sepanjang 150 karakter
echo "<p>" . substr($loremIpsum,100) . "<br>";
//  ambil 100 karakter terakhir
echo "<p>" . substr($loremIpsum, -100) . "<br>";
// uppercase string
echo "<p>" . strtoupper($loremIpsum). "<br>";
// lowercase string
echo "<p>" . strtolower($loremIpsum). "</p>";

// membalik string
$pesan = "saya sudah makan";
echo strrev($pesan) . "<br>";

// pencarian string
$judulBerita = "Microsoft membeli github";
echo strpos($judulBerita, "github") . "<br>";
echo strpos($judulBerita, "Github") . "<br>";
echo stripos($judulBerita, "Github") . "<br>";
 
// replace karakter string
$judulBerita = "Microsoft membeli github";
echo "Judul asli: {$judulBerita} <br>";
echo "Judul baru: " . str_replace("membeli", "menjual", $judulBerita) . "<br>";
?>