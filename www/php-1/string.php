<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>String PHP</title>
</head>
<body>
    <h1>Berlatih String PHP</h1>
    <?php   
        echo "<h3> Soal No 1</h3>";
        
        $first_sentence = "Hello PHP!" ; 
        // Menggunakan fungsi strlen() dan str_word_count()
        echo "Kalimat: \"$first_sentence\" <br>";
        echo "Panjang string: " . strlen($first_sentence) . ", jumlah kata: " . str_word_count($first_sentence) . "<br><br>";

        $second_sentence = "I'm ready for the challenges"; 
        echo "Kalimat: \"$second_sentence\" <br>";
        echo "Panjang string: " . strlen($second_sentence) . ", jumlah kata: " . str_word_count($second_sentence) . "<br>";
        
        echo "<h3> Soal No 2</h3>";
        
        $string2 = "I love PHP";
        
        echo "<label>String: </label> \"$string2\" <br>";
        echo "Kata pertama: " . substr($string2, 0, 1) . "<br>"; 
        // Mengambil 4 karakter mulai dari indeks ke-2
        echo "Kata kedua: " . substr($string2, 2, 4) . "<br>";
        // Mengambil 3 karakter mulai dari indeks ke-7
        echo "Kata Ketiga: " . substr($string2, 7, 3) . "<br>";

        echo "<h3> Soal No 3 </h3>";
        
        $string3 = "PHP is old but sexy!";
        echo "String: \"$string3\" <br>"; 
        
        // Mengganti kata "sexy!" menjadi "awesome"
        $string3_modified = str_replace("sexy!", "awesome", $string3);
        echo "Output : \"$string3_modified\"";
    ?>
</body>
</html>