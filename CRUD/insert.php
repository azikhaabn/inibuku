<?php
//add dbconnect

include('dbconnect.php');

$judul = $_POST['judul buku'];
$penerbit = $_POST['penerbit buku'];
$genre = $_POST['genre buku'];
$harga = $_POST['harga buku'];

//query

$query =  "INSERT INTO book(judul buku , penerbit buku , genre buku , harga buku) VALUES('$judul' , '$penerbit' , '$genre' , '$harga')";

if (mysqli_query($conn , $query)) {
	# code redicet setelah insert ke index
	header("location:index.php");
}
else{
	echo "ERROR, tidak berhasil". mysqli_error($conn);
}

mysqli_close($conn);
?>