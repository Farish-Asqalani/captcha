<?php 
// session_start();

// $random_alpha = "";

// for($i = 0; $i < 5; $i++) {
//     $random_alpha .= chr(rand(65, 90));
// }

// $captcha_code = substr($random_alpha, 0, 4);

// $_SESSION['captcha_code'] = $captcha_code;

// // membuat gambar
// header("Content-Type: image/png");

// // warna gambar
// $image = imagecreatetruecolor(200, 38);
// $background_color = imagecolorallocate($image,231, 100, 18);
// $text_color = imagecolorallocate($image, 255, 255, 255);

// imagefilledrectangle($image, 0, 0, 200, 38, $background_color);

// // font
// $font = dirname(__FILE__) . '/Arialn.ttf';

// imagettftext($image, 20, 5, 60, 38, $text_color, $font, $captcha_code);

// imagepng($image);

// imagedestroy($image);







// session_start();


// $random = "";

// for($i = 1; $i < 5; $i++){
//     $random .= chr(rand(65, 90));
// }

// $captcha_code = substr($random, 0, 4);

// $_SESSION["captcha_code"] = $captcha_code;

// // membuat gambar
// header("Content-Type: image/png");

// // mewarnai gambar
// $image = imagecreatetruecolor(200, 38);
// $background_color = imagecolorallocate($image, 255, 255, 255);
// $color_text = imagecolorallocate($image, 0, 0, 0);

// imagefilledrectangle($image, 0, 0, 200, 38, $background_color);

// // font
// $font = dirname(__FILE__) . '/Arialn.ttf';

// imagettftext($image, 20, 5, 50, 38, $color_text, $font, $captcha_code);

// imagepng($image);
// imagedestroy($image);





// session_start();
// $random = "";

// for($i = 1; $i < 5; $i++) {
//     $random .= chr(rand(65, 90));
// }

// $captcha_code = substr($random, 0, 4);

// $_SESSION["captcha_code"] = $captcha_code;

// // membbuat gambar
// header("Content-Type: image/png");

// // warna gambar
// $image = imagecreatetruecolor(200, 38);
// $background_color = imagecolorallocate($image, 255, 255, 255);
// $color_text = imagecolorallocate($image, 0, 0, 0);

// imagefilledrectangle($image, 0, 0, 200, 38, $background_color);

// $font = dirname(__FILE__) . '/Arialn.ttf';

// imagettftext($image, 20, 5, 60, 38, $color_text, $font, $captcha_code);

// imagepng($image);
// imagedestroy($image);




// untuk memulai sesi
session_start();

// sebagai random character captcha text, 65 -= n90 adalah ASCII code daroi keyboard
$random = "";


for($i = 1; $i < 5; $i++) {
    $random .= chr(rand(65, 90));
}


// random padding adalah variable yang berisi random padding dari text yang akan ditampilkan
$random_padding = "";

for($j = 1; $j < 3; $j++){
    $random_padding .= chr(rand(49, 57));
}

// variable berisi captcha yuangh sudah di random dari varaible random, tugas var ini untuk mengkonversi number ke string
$captcha_code = substr($random, 0, 4);


$_SESSION["captcha_code"] = $captcha_code;

// membuat gambar
header("Content-Type: image/png");

// warnagambar
// membuat ukuran gambar
$image = imagecreatetruecolor(200, 38);
// variable yg berisi background gambar seperti warna
$background_color = imagecolorallocate($image, 255, 255, 255);
// warna untuk teks yg ditampilkan
$color_text = imagecolorallocate($image, 0, 0, 0);

// berisi segala variable dan isi dari warna, dan juga bentuk gambar
imagefilledrectangle($image, 0, 0, 200, 38, $background_color);


// Set the environment variable for GD
// putenv('GDFONTPATH=' . realpath('.'));

// Name the font to be used (note the lack of the .ttf extension)
$font = "FiraCode-Bold.ttf";
// $font = dirname('BRITANIC.TTF',1);

// berisi segala keperluan untuk teks, mulai dari warna text, besar font, kemiringan tulisan, padding kiri kanan,. padding atas bawah, jenis font, dan captcha yg sudah di generate
imagettftext($image, 20, 10, $random_padding, 38, $color_text, $font, $captcha_code);

// untuk memnbuat tampilannya menjadi lebih kabur (pixxellate)
imagefilter($image, IMG_FILTER_PIXELATE, 2);

// peritah untuk mengenerate image
imagepng($image);
imagedestroy($image);
// var_dump($font);


?>
