<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $str = "Belajar PHP ternyata Menyenangkan";
        echo strtolower($str);  //ubah huruf ke kecil semua
        echo "<br>";
        echo strtoupper($str);  //ubah huruf ke kecil semua
        echo "<br>";
        echo str_replace("Menyenangkan", "Mudah lho", $str);    //mengganti string
      ?>
</body>
</html>