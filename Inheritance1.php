<?php
echo "==================CONTOH SINGLE INHERITANCE===================<br>";
class Bapak{
	var $nama="Bapak";
	function Bapak($n){
		$this->nama = $n;
	}
	function Hallo(){
		echo "Halo, saya  ".$this->nama."<br>";
	}
}
class Anak extends Bapak{
}
$test = new Anak("Okto dari Bapak Siswoyo");
$test->Hallo();
$test2  = new Anak("paijo anak ke 2 dari  Bapak Siswoyo");
$test2->Hallo();
?>