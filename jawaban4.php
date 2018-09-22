<?php

// membuat function deret fibonacci
function fibo($kolom,$baris)
{
	$tmp_baris=$tmp_kolom=0;
	$pertama=0;
	$kedua=1;
	echo $pertama.",";
	$tmp_kolom++;
	echo $kedua.",";
	$tmp_kolom++;
	while (true) {
		$ketiga=$pertama+$kedua;
		$pertama=$kedua;
		$kedua=$ketiga;
		echo $kedua.",";
		$tmp_kolom++;
		if ($tmp_kolom/$kolom==1) {
			echo "<br/>";
			$tmp_kolom=0;
			$tmp_baris++;
		}

		if ($tmp_baris/$baris==1) {
			return false;
		}
	}	

}

// mengeksekusi function
fibo(4,3);

?>