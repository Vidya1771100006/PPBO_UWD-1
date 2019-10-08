<?php
class mobil{
	private $merk;
	private $harga;
	private $warna;
	private $tipe;
function __construct($merk,$harga,$warna,$tipe){
	$this->merk=$merk;
	$this->harga=$harga;
	$this->warna=$warna;
	$this->tipe=$tipe;
}
function BacaMerk(){
	return $this->merk;
}
function BacaHarga(){
	return $this->harga;
}
function BacaWarna(){
	return $this->warna;
}
function BacaTipe(){
	return $this->tipe;
}
//function __destruct(){
	//echo "Merk, harga, warna dan tipe telah dihapus";
//}
}
$mobil = new mobil("Avanza", 191100000, "Silver", "T");
echo " Merk mobil = ".$mobil->BacaMerk()."<br>";
echo " Harga mobil = ".$mobil->BacaHarga()."<br>";
echo " Merk mobil = ".$mobil->BacaWarna()."<br>";
echo " Harga mobil = ".$mobil->BacaTipe()."<br>";
?>