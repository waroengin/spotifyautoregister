<?php
require "function.php";
date_default_timezone_set("Asia/Jakarta");

$run = banner($Green,$White);
echo " Spotify Account Generator x Samsung Offer\n 1. Account Generator x Samsung Promo\n 2. Soon Update\n\n Masukan Pilihanmu : ";
$pilih = trim(fgets(STDIN));
if($pilih == "1"){
	$run = generateAccount($Red,$White,$Green,$Grey,$Blue);
	} else {
		exit("\n$Red Sudah tersedia Auto Pay Update 1 Agustus 2023\n$White Hubungi Telegram @agathasangkara atau @muhrifq\n");
}
?>