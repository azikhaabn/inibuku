<?php
//include('dbconnected.php');
include('dbconnect.php');

$id = $_GET['id buku'];
$judul = $_GET['judul buku'];
$penerbit = $_GET['penerbit buku'];
$genre = $_GET['genre buku'];
$harga = $_GET['harga buku'];

//query update
$query = "UPDATE book SET judul_buku='$judul' , penerbit_buku='$penerbit' , genre_buku='$genre' , harga_buku='$harga' WHERE id_buku='$id' ";

if (mysqli_query($conn, $query)) {
	# credirect ke page index
	header("location:index.php");
	
}
else{
	echo "ERROR, data gagal diupdate". mysqli_error($conn);
}

mysqli_close($conn);
?>