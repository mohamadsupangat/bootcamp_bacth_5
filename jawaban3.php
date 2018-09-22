<?php

// mebuat fungsi emengganti angka dengan bilangan
function Terbilang($x) 
{ 
  $abil = array("", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas"); 
  if ($x < 12) 
    return " " . $abil[$x]; 
  elseif ($x < 20) 
    return Terbilang($x - 10) . "belas"; 
  elseif ($x < 100) 
    return Terbilang($x / 10) . " puluh" . Terbilang($x % 10); 
  elseif ($x > 100)
  	return  $x;

} 

// membuat fungsi untuk menghitung pecahan
function hitung_kembalian($total_belanja,$uang,$pecahan){
	$pecahan=explode(',', $pecahan);
	$sisa=$kembalian=$uang-$total_belanja;
	$pesan="Total belanja : Rp.".number_format($total_belanja,0,',','.'). " || Uang diterima Rp.".number_format($uang,0,',','.')." || Kembalian : Rp.".number_format($sisa,0,',','.').'<hr/>';
	foreach ($pecahan as $p) {
		if ($sisa>=$p) {
			$cek=$sisa/$p;
			if ($cek > 0) {
				$sisa=$sisa%$p;
				$pesan.= "<li>".Terbilang(abs((int) $cek))." pecahan ".number_format($p,0,',','.')." </li>";
			}

		}
	}
	return $pesan;                     
}



// memulai program

$total=12500;    // total belanja
$uang=50000;	// uang yang diterima
$pecahan="20000,5000,2000,1000,500";   // daftar uang pecahan di machine
echo hitung_kembalian($total,$uang,$pecahan);

?>