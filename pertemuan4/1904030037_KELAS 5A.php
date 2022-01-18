<!DOCTYPE html>
<html>
<head>
	<title>pertemuan 4</title>
</head>
<body>
	<h1>Membuat Array</h1>
	<?php
	$values = array(1,2,3,4,5.60);
	var_dump($values);
	echo"<br>"; 
	echo($values[4]);


	echo"<br>";

	@prodi = ["T.Sipil","T.Industri","T.Informatika","T.Kimia"];
	var_dump($prodi);
	echo"<br>";
	echo "$prodi[3]";

	echo "<br>";
	// mengganti isi value
	$prodi[0] = "T.Nuklir";
	var_dump($prodi);

	// menambahkan value
	$prodi[] = "T.Komputer";
	var_dump($prodi);
	echo "<br>";


	// menghapus salah satu vanue
	usset($prodi[0]);
	var_dump($prodi);

	// menghitung total array
	echo "<br>";
	var_dump(count($prodi));


	?>

	<hr>

	<h1>map dengan array</h1>
	<?php

	$sukisno = array(
		"id" => "maskizz",
		"nama" => "Sukisno NHP",
		"umur" => 38
	);

	var_dump($sukisno);
	echo"<br>";
	$jamal = [
				"id" => "om jamal",
				"nama" => "Djamaludin",
				"umur" =>43,
				"alamat" => [
						"kota" => "Tangerang", "Prov" => "Banten"
				]

	];

	var_dump($jamal);
	echo"<br>";
	echo("nama id :".$jamal["id"]);

	echo"<br>";
	echo("nama lengkap :".$jamal["nama"]);

	echo"<br>";
	echo("umur :".$jamal["umur"]);


	?>

	<hr>
	<h1>Operator Matematika</h1>

	<?php
	$tambah = 10 + 10;
	$kurang = 100 - 10;
	$kali   = 5 * 5;
	$bagi   = 50 / 10;
	$modular = 100 % 3;
	$pangkat  = 4 ** 3;
	echo"Tambah :". $tambah . "<br>";
	echo"kurang :" . $kurang. "<br>";
	echo"kali :" . $kali. "<br>";
	echo"bagi :". $bagi . "<br>";
	echo"modular :". $modular. "<br>";
	echo"pankat :". $pangkat. "<br>";

	?>


	<hr>
	<h2>increment</h2>
	<?php
	$a = 10;
	$a++;
	// $a = $a + 1;
	$a++;
	$a- -;

	echo($a); 


	?>
</body>
</html>