<?php
echo "==============================================<br>";
echo "============= Menghitung Bidang Datar ===============<br>";
echo "==============================================<br>";
echo "Luas Persegi Panjang <br>";
function hitungLuasPersegiPanjang($panjang, $lebar){
	$luas = $panjang * $lebar;
	echo $luas;
	echo " cm";
	}
	$X = 5;
	$Y = 10;
	hitungLuasPersegiPanjang($X, $Y);
echo "<br>--------------------------------------------------------------------<br>";
echo "Luas Persegi <br>";
function hitungLuasPersegi($sisi){
	$luas1 = $sisi * $sisi;
	echo $luas1;
	echo " cm";
}
	$X = 6;
	hitungLuasPersegi($X);
echo "<br>--------------------------------------------------------------------<br><br>";
echo "bisa ditambah dengan yang lain.<br>";	
?>