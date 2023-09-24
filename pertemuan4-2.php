<?php
// escape characters
echo "Baris\nbaru <br>";
echo 'Baris\nbaru <br>';

echo "Halo\rDunia <br>";
echo 'Halo\rDunia <br>';

echo "<pre>Halo\tDunia!</pre>";
echo '<pre>Halo\tDunia!</pre>';

echo "Katakanlah \"Tidak pada narkoba\" <br>";
echo 'Katakanlah \'Tidak pada narkoba\' <br>';

// karakter"<"(kurangdari) dan ">" (lebihdari)
$str = "Ini merupakan teks <b>bold</b> .";
echo htmlspecialchars($str);

// lebih lanjut Htmlspecialchars
$str = "Jane & 'Tarzan'";
echo "<br>";
echo htmlspecialchars($str, ENT_COMPAT);
echo "<br>";
echo htmlspecialchars($str, ENT_QUOTES);
echo "<br>";
echo htmlspecialchars($str, ENT_NOQUOTES);
echo "<br>";
$str = 'Mempelajari "PHP" cukup menyenangkan. ';
echo htmlspecialchars($str, ENT_QUOTES);
?>