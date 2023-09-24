<!-- addclashses -->
<!-- addcslashes() adalah fungsi PHP yang digunakan untuk menambahkan karakter escape (\) sebelum karakter tertentu dalam sebuah string. -->
<?php 
$str = addcslashes("Hello World!","W");
echo $str;
?>

<!-- addslashes -->
<?php 
$str = addcslashes("Hello World!","o");
echo "<hr>" . $str; 
?>

<!-- bin2hex() -->
<!-- fungsi PHP bin2hex() untuk mengonversi string "Hello World!" menjadi format heksadesimal (hex). -->
<?php
$str = bin2hex("Hello World!");
echo "<hr>" . $str;
?>

<!-- chop() -->
<?php
$str = bin2hex("Hello World!");
echo "<hr>" . $str;
?>

<!-- chr() -->
<!-- fungsi chr() untuk mengonversi nilai desimal, oktal, dan heksadesimal menjadi karakter.  -->
<?php
echo "<hr>";
echo chr(52) . "<br>"; // Decimal value
echo chr(052) . "<br>"; // Octal value
echo chr(0x52) . "<br>"; // Hex value
?>

<!-- chunk_split() -->
<!-- fungsi chunk_split() untuk membagi string "Hello world!" menjadi bagian-bagian yang lebih kecil, dan setiap bagian dipisahkan oleh tanda "." (titik). -->
<?php
$str = "Hello world!";
echo "<hr>" .chunk_split($str,1,".");
?>

<!-- convert_cyr_string() -->
<?php
// fungsi convert_cyr_string untuk mwngkonversikan string contohnya karakter Arab
// error karena php versi 7 keatas tidak dapat medeteksi abjad
// $str = "Hello world! وّه";
// echo $str . "<br>";
// echo convert_cyr_string($str,'w','a'); 
?> 

<!-- convert_uudecode() -->
<!-- fungsi convert_uudecode() untuk mendekode string yang tampaknya telah dienkripsi dalam format uuencode.  -->
<!--  Fungsi ini digunakan untuk mendekode teks yang telah diencode menggunakan Uuencode. -->
<?php
$str = ",2&5L;&\@=V]R;&0A `";
echo "<hr>". convert_uudecode($str);
?>

<!-- convert_uuencode() -->
<!-- fungsi convert_uuencode() untuk mengenkripsi string "Hello world!" menjadi format uuencode. Fungsi ini digunakan untuk mengenkripsi teks dalam format uuencode. -->
<?php
$str = "Hello world!";
echo "<hr>" .convert_uuencode($str);
?>

<!-- count_chars() -->
<!-- fungsi count_chars() untuk menghitung karakter yang ada dalam string "Hello World!" dan mengembalikan daftar karakter yang ditemukan beserta jumlah kemunculannya dalam string tersebut. -->
<?php
$str = "Hello World!";
echo "<hr>" .count_chars($str,3);
?>

<!-- crc32() -->
<!-- fungsi crc32() untuk menghitung nilai CRC-32 dari string "Hello World!"  -->
<?php
$str = crc32("Hello World!");
printf("<hr> %u\n",$str);
?>

<!-- crypt() -->
<?php
// 2 character salt
if (CRYPT_STD_DES == 1)
{
echo "Standard DES: ".crypt('something','st')."\n<br>";
}
else
{
echo "Standard DES not supported.\n<br>";
}

// 4 character salt
if (CRYPT_EXT_DES == 1)
{
echo "Extended DES: ".crypt('something','_S4..some')."\n<br>";
}
else
{
echo "Extended DES not supported.\n<br>";
}

// 12 character salt starting with $1$
if (CRYPT_MD5 == 1)
{
echo "MD5: ".crypt('something','$1$somethin$')."\n<br>";
}
else
{
echo "MD5 not supported.\n<br>";
}

// Salt starting with $2a$. The two digit cost parameter: 09. 22 characters
if (CRYPT_BLOWFISH == 1)
{
echo "Blowfish: ".crypt('something','$2a$09$anexamplestringforsalt$')."\n<br>";
}
else
{
echo "Blowfish DES not supported.\n<br>";
}

// 16 character salt starting with $5$. The default number of rounds is 5000.
if (CRYPT_SHA256 == 1)
{
echo "SHA-256: ".crypt('something','$5$rounds=5000$anexamplestringforsalt$')."\n<br>"; }
else
{
echo "SHA-256 not supported.\n<br>";
}

// 16 character salt starting with $6$. The default number of rounds is 5000.
if (CRYPT_SHA512 == 1)
{
echo "SHA-512: ".crypt('something','$6$rounds=5000$anexamplestringforsalt$');
}
else
{
echo "SHA-512 not supported.";
}
?>

<!-- explode() -->
<!-- fungsi explode() untuk memisahkan string "Hello world.  -->
<?php
$str = "Hello world. It's a beautiful day.";
echo "<hr>";
print_r (explode(" ",$str));
?>

<!-- fprintf() -->
<!-- fungsi fprintf() untuk menulis teks ke dalam file "test.txt" dengan format tertentu. Fungsi ini mirip dengan printf(), tetapi data yang diformat akan ditulis ke dalam file yang ditentukan. -->
<?php
$number = 9;
$str = "Beijing";
$file = fopen("test.txt","w");
echo "<hr>";
echo fprintf($file,"There are %u million bicycles in %s.",$number,$str);
?>

<!-- get html translation table() -->
<!-- fungsi get_html_translation_table() untuk mendapatkan tabel konversi karakter HTML yang memetakan karakter-karakter spesial ke entitas HTML mereka. -->
<?php
echo "<hr>";
print_r (get_html_translation_table()); // HTML_SPECIALCHARS is default.
?>

<!-- hebrev() -->
<!-- fungsi hebrev() untuk mengubah teks berbahasa Ibrani yang telah dikodekan dengan metode "Visual" ke metode "Logical" yang sesuai dengan bahasa Ibrani. -->
<?php
echo "<hr>";
echo hebrev("á çùåï äúùñâ");
?>

<!-- hebrevc() -->
<!-- Fungsi hebrevc() pada PHP digunakan untuk mengonversi teks berbahasa Ibrani yang dikodekan dalam metode "Visual" ke metode "Logical".  -->
<?php
// echo "<hr>";
// echo hebrevc("� ���� �����\n� ���� �����");
?>





