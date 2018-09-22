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
```
4.
```php
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
```
5.
```php
<?php

// membuat function 
function tampilkan()
{

	$buka='<table style="width: auto;float: left;margin-right: 10px;">';$tutup='</table>';
	$d1='<td>';$d2='</td>';
	$r1='<tr>';$r2='</tr>';
	return $buka.$r1."".$d1."DW".$d2."".$d1."DW".$d2."".$d1."".$d2."".$r2."".$r1."".$d1."DW".$d2."".$d1."".$d2."".$d1."DW".$d2."".$r2."".$r1."".$d1."DW".$d2."".$d1."".$d2."".$d1."".$d2."".$d1."DW".$d2."".$r2."".$r1."".$d1."DW".$d2."".$d1."".$d2."".$d1."".$d2."".$d1."DW".$d2."".$r2."".$r1."".$d1."DW".$d2."".$d1."".$d2."".$d1."DW".$d2."".$d1."".$d2."".$r2."".$r1."".$d1."DW".$d2."".$d1."DW".$d2."".$d1."".$d2."".$r2.$tutup.$buka.$r1."".$d1."DW".$d2."".$d1."".$d2."".$d1."".$d2."".$d1."".$d2."".$d1."".$d2."".$d1."".$d2."".$d1."DW".$d2."".$r2."".$r1."".$d1."DW".$d2."".$d1."".$d2."".$d1."".$d2."".$d1."".$d2."".$d1."".$d2."".$d1."".$d2."".$d1."DW".$d2."".$r2."".$r1."".$d1."DW".$d2."".$d1."".$d2."".$d1."".$d2."".$d1."DW".$d2."".$d1."".$d2."".$d1."".$d2."".$d1."DW".$d2."".$r2."".$r1."".$d1."DW".$d2."".$d1."".$d2."".$d1."DW".$d2."".$d1."DW".$d2."".$d1."DW".$d2."".$d1."".$d2."".$d1."DW".$d2."".$r2."".$r1."".$d1."DW".$d2."".$d1."DW".$d2."".$d1."".$d2."".$d1."".$d2."".$d1."".$d2."".$d1."DW".$d2."".$d1."DW".$d2."".$r2."".$r1."".$d1."".$d2."".$d1."".$d2."".$d1."".$d2."".$d1."".$d2."".$d1."".$d2."".$d1."".$d2."".$d1."".$d2."".$r2."".$r1."".$d1."DW".$d2."".$d1."".$d2."".$d1."".$d2."".$d1."".$d2."".$d1."".$d2."".$d1."".$d2."".$d1."DW".$d2."".$r2.$tutup;

}


// mengeksekusi function

echo tampilkan();

?>
```
6. 
```php
<?php
$db=mysqli_connect("localhost","root","pangat","jawaban");
$query1=mysqli_query($db,"SELECT *, posts.id AS pid FROM posts JOIN users ON posts.createdBy = users.id ORDER BY posts.id DESC");
while ($post=mysqli_fetch_object($query1)) {
	echo "<ul>";
	echo "<li>posts.title: ".$post->title."</li>";
	echo "<li>posts.users.username: dibuat oleh ".$post->username."</li>";
	echo "<li> Comments: <ul> ";
		$query2=mysqli_query($db,"SELECT * FROM comments WHERE postId = ".$post->pid."  ORDER BY id DESC");
		while ($c=mysqli_fetch_object($query2)) {
			echo "<li>".$c->comment."</li>";
		}
		echo "</ul></li></ul>";
}
?>
```
7.
```
<!DOCTYPE html>
<html>
<head>
	<title>Jawaban  No.7</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
<div class="container mt-2">
	<?php
	$db=mysqli_connect("localhost","root","pangat","jawaban");
	$query1=mysqli_query($db,"SELECT *, posts.id AS pid FROM posts JOIN users ON posts.createdBy = users.id ORDER BY posts.id DESC");
	while ($post=mysqli_fetch_object($query1)) {
	?>
	<div class="row">
		<div class="col-md-8">
			<div class="card">
				<div class="card-body">
					<h3>posts.title: <?= $post->title; ?></h3>
					<small >posts.users.username: dibuat oleh <?= $post->username; ?></small>
					<hr>
					<?= $post->content; ?>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card">
				<div class="card-body">
					<h5>Comments on <?= $post->title ;?> :</h5>
					<hr>
					<?php
						$query2=mysqli_query($db,"SELECT * FROM comments WHERE postId = ".$post->pid."  ORDER BY id DESC");
						while ($c=mysqli_fetch_object($query2)) {
							echo "<div class='card'> <div class='card-body'>".$c->comment."</div></div>";
						}
					?>
				</div>
			</div>			
		</div>
	</div>
	<?php
	}
	?>
</div>
</body>
</html>
```
