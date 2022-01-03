<?php
session_start(); // fungsi untuk memulai session
$random_alpha = md5(rand()); // merubah data dan akan di gantikan dengan data acak dan kemudian akan di generate ke MD5
$captcha_code = substr($random_alpha, 0, 6); // memberikan batasan pada kode captcha yang akan tampil nanti nanya berupa 6 kode saja.
$_SESSION["captcha_code"] = $captcha_code; //
$target_layer = imagecreatetruecolor(70, 30);
$captcha_background = imagecolorallocate($target_layer, 255, 160, 119); // mengatur background dari kode captcha
imagefill($target_layer, 0, 0, $captcha_background);
$captcha_text_color = imagecolorallocate($target_layer, 0, 0, 0); // mengatur warna kode captcha
imagestring($target_layer, 5, 5, 5, $captcha_code, $captcha_text_color);
header("Content-type: image/jpeg");
imagejpeg($target_layer);
?>