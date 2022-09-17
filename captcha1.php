<?php 
// session_start();

// header("Content-Type: image/png");

// $_SESSION["Captcha"]="";

// $gambar = imagecreate(200, 50);

// imagecolorallocate($gambar, 167, 218, 239);

// $abu = imagecolorallocate($gambar, 128, 128, 128);

// $black = imagecolorclosest($gambar, 0, 0, 0);

// $font = "FiraCode-Bold.ttf";

// for($i = 0; $i < 5; $i++){
//     $nomor = rand(65, 90);

//     $_SESSION["Captcha"].= $nomor;

//     $sudut = rand(-25, 25);

//     imagefttext($gambar, 20, $sudut, 8 + 15 * $i, 25, $black, $font, $nomor);

//     imagefttext($gambar, 20, $sudut, 9 + 15 * $i, 26, $abu, $font, $nomor);
// }

// imagepng($gambar);
// imagedestroy($gambar);

// session_start();

// $random = "";

// for($i = 1; $i < 5; $i++){
//     $random .= chr(rand(65, 90));
// }

// $random_padding = "";

// for($j = 1; $j < 3; $j++){
//     $random_padding .= chr(rand(49, 57));
// }

// $captcha_code = substr($random, 0, 4);

// $_SESSION["captcha_code"] = $captcha_code;

// header("Content-Type: image/png");

// $image = imagecreatetruecolor(200, 30);
// $background_color = imagecolorallocate($image, 255, 255, 255);

// $color_text = imagecolorallocate($image, 0, 0, 0);

// imagefilledrectangle($image, 0, 0, 200, 38, $background_color);

// $font = "FiraCode-Bold.ttf";

// imagettftext($image, 21, 20, $random_padding, 38, $color_text, $font, $captcha_code);

// imagefilter($image, IMG_FILTER_PIXELATE, 2);

// imagepng($image);
// imagedestroy($image);

session_start();


$random = "";

for($i = 0; $i < 5; $i++){
    $random .= chr(rand(65, 90));
}

$captcha_code = substr($random, 0, 4);

$_SESSION["captcha_code"] = $captcha_code;

// membuat gambar
header("Content-Type: image/png");

// mewarnai gambar
$image = imagecreatetruecolor(200, 38);
$background_color = imagecolorallocate($image, 255, 255, 255);
$color_text = imagecolorallocate($image, 0, 0, 0);

imagefilledrectangle($image, 0, 0, 200, 38, $background_color);

// font
$font = dirname(__FILE__) . '/Hack-Bold.ttf';

imagettftext($image, 20, 5, 50, 38, $color_text, $font, $captcha_code);

imagepng($image);
imagedestroy($image);


?>

