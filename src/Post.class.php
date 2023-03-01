<?php
class Post {
    static function upload(string $tempFileName){
        $uploadDir = "img/";
        $imageInfo = getimagesize($tempFileName);
    if(!is_array($imageInfo)) {
        die("BŁĄD: Nieprawidłowy format obrazu");
    }
    $randomSeed = rand(10000,99999) . hrtime(true);
    $hash = hash("sha256", $randomSeed);
    $targetFileName = $uploadDir . $hash . ".webp";
    if(file_exists($targetFileName)){
        die("BŁĄD: Plik o tej nazwie juz istnieje");
    }
    $imageString = file_get_contents($tempFileName);
    $gdImage = @imagecreatefromstring($imageString);
    imagewebp($gdImage, $targetFileName);
    }
}

?>