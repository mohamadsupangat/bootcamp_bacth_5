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