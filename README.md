## Mohamad Supangat
#### Jl. Kasegeran Rt9/2, Desa. Kasegeran, Kec. Cilongok, Kab. Banyumas 
##### No. Telp / Wa 083873272419 , Email : zpid3805@gmail.com
1.

```php
<?php
// membuat function biodata
function biodata($name="",$address="",$hobbies="",$is_married="",$school="",$skill="")
{
	$data['name']=$name;
	$data['address']=$address;
	$data['hobbies']=explode(',', $hobbies);
	if ($is_married=="Sudah") {
		$data['is_married']=true;
	} else {
		$data['is_married']=false;
	}
	$data['school']=array('highSchool' => substr($school, 0,3), 'university' => $school );
	$data['skill']=explode(",", $skill,-1);
	return json_encode($data);
}


// input biodata saya
$nama="Mohamad Supangat";
$alamat="Jl. Kasegeran Rt9/2, Desa. Kasegeran, Kec. Cilongok, Kab. Banyumas";
$hobi="Belajar IT, Bermain Gitar, Belajar tentang Linux";
$menikah="Belum";
$sekolah="SMK Ma'arif NU 1 Ajibarang";
$skill="html, css, javascript, jquery, php, mysql, codeigniter";


// eksekusi fungsi biodata
printf(biodata($nama,$alamat,$hobi,$menikah,$sekolah,$skill));

?>
```
2. 
```html
<!DOCTYPE html>
<html>
<head>
	<title>Soal 2</title>
</head>
<body>
	<form method="post" action="" onsubmit="return cek()">
		<p>
			<label>Username</label>
			<input type="text" name="username" id="username">
		</p>
		<p>
			<label>Email</label>
			<input type="text" name="email" id="email">
		</p>
		<p>
			<label>Phone Number</label>
			<input type="text" name="phone_number" id="no_hp">
		</p>
		<p>
			<input type="submit" name="" value="kirim">
		</p>
	</form>
</body>
</html>

<script type="text/javascript">
	function cek() {
		// cek username
		var u = document.getElementById("username").value;
		var u_test = /^[a-z]+$/g;
		if (!u_test.test(u)) {
			alert('username tidak boleh menggunakan Huruf Kapital, angka dan symbol');
			return false;
		}
		var e_test = /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;
		var e = document.getElementById("email").value;
		if (!e_test.test(e)) {
			alert('Email yang kamu masukan tidak valid ');
			return false;
		}


		var no_test =/^[0-9+ ]*$/;
		var no = document.getElementById("no_hp").value;
		if (!no_test.test(no)) {
			alert('No telephone yang anda masukan  tidak valid, hanya angka dan symbol + dan spasi yang di perbolehkan');
			return false;
		}

		alert('sukses');
	}
</script>
```
3.
```php
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
