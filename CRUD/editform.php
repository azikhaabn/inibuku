<!DOCTYPE html>
<html lang="en">
<head>
	<title>Toko Buku</title>
	<meta charset="utf-8">
</head>
<body>

<?php 
$id = $_GET['id']; 

//koneksi database
include('dbconnect.php');

//query
$query = "SELECT * FROM book WHERE id buku='$id'";
$result = mysqli_query($conn, $query);

?>

<div>

	<h3>Update Data Buku</h3>
	<form action="edit.php" method="get">

		<?php
		while ($row = mysqli_fetch_assoc($result)) {
		 	
		?>

		<input type="hidden" name="id buku" value="<?php echo $row['id buku']; ?>">

		<div>
			<td>Judul Buku</td>
			<td><input type="text" name="judul buku" value="<?php echo $row['judul buku']; ?>"></td>	
		</div>

		<div>
			<td>Penerbit Buku</td>
			<td><input type="text" name="penerbit buku" value="<?php echo $row['penerbit_buku']; ?>"></td>			
		</div>

		<div>
			<td>Genre Buku</td>
			<td><input type="text" name="genre buku" value="<?php echo $row['genre buku']; ?>"></td>			
		</div>

		<div>
			<td>Harga Buku</td>
			<td><input type="text" name="harga buku" value="<?php echo $row['harga buku']; ?>"></td>	
		</div>
		<button type="submit">Update Buku</button>

		<?php 
		}
		mysqli_close($conn);
		?>				
	</form>
</div>


</body>
</html> 