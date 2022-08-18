<?php 
// memulai session
session_start();

// membuat variable random dengan value string kosong
$random = "";

// melakukan perulangan untuk teks captcha menggunakan ascii code 65 sampai 90
// yang artinya A sampai Z
for($i = 1; $i < 5; $i++){
	$random .= chr(rand(65, 90));
}

// membuat variable random padding dengan string kosong sebagai valuenya
// yang nanti akan di isi dengan padding yang diperlukan untuk captcha

$random_padding = "";

// melakukan perulangan untuk variable random_padding
for($j = 1; $j < 3; $j++){
	$random_padding .= chr(rand(49, 57));
}

// variable captcha yang valuenya sudah berisi dengan value random dari variable $random 
// tugas variable ini untuk mengkonversi number menjadi string
$captcha_code = substr($random, 0, 4);

$_SESSION["captcha_code"] = $captcha_code;

// membuat gambar
header("Content-Type: image/png");

// warna gambar
// membuat ukuran gambar
$image = imagecreatetruecolor(200, 38);

// variable yang berisi warna untuk background
$background_color = imagecolorallocate($image, 255, 255, 255);

// variable yang bersisi warna untuk teks
$color_text = imagecolorallocate($image, 0, 0, 0);

// variable yang memiliki value isi dari variable diatas
// seperti warna teks dan bentuk gambar
imagefilledrectangle($image, 0, 0, 200, 38, $background_color);

// variable yang berisikan font yang akan kita gunakan untuk captcha 
$font = "FiraCode-Bold.ttf";


// berisi segala keperluan untuk teks, mulai dari warna text, besar font, kemiringan tulisan, padding kiri kanan,. padding atas bawah, jenis font, dan captcha yg sudah di generate
imagettftext($image, 20, 19, $random_padding, 38, $color_text, $font, $captcha_code);
// value kedua (20) untuk mengatur size dari teks
// value ketiga (19) berguna untuk mengatur lurus vertical dari teks
// value kelima (38) berguna untuk margin atas jadi semakin tinggi valuenya maka teks akan menurun posisinya


// untuk membuat tampilan ada efek kabur gunakan pixxellate
imagefilter($image, IMG_FILTER_PIXELATE, 2.8);
// IMG_FILTER_PIXELATE

// perintah untuk mengenerate image
imagepng($image);
imagedestroy($image);

 ?>