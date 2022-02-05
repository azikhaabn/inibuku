<!DOCTYPE html>
<html lang="en">
<head>
	<title>buku</title>
	<link rel="stylesheet" href="style.css">
	
</head>
<body>

	<?php
	//tambahkan dbconnect
	include('dbconnect.php');

	//query
	$query = "SELECT * FROM book";

	$result = mysqli_query($conn , $query);

	?>

	<div class="container">
	
		<h3>Data Buku</h3>
		<table >
		<hr>
		<div>
			<div>
				<h3>Form Tambah Buku</h3>
				<form action="insert.php" method="post">
					<tr>
						<td>Judul Buku</td>
						<td><input type="text" name="judul buku"></td>
					</tr>

					<tr>
						<td>Penerbit Buku</td>
						<td><input type="text" name="penerbit buku"></td>
					</tr>

					<tr>
						<td>Genre Buku</td>
						<td><input type="text" name="genre buku"></td>
					</tr>

					<tr>
						<td>Harga Buku</td>
						<td><input type="text" name="harga buku"></td>
					</tr>
					</table>
					<input type="submit"></input>	
					</form>		
	</div>		
				
			</div>
				<h3>Tabel Buku</h3>
				<table border="1" class="container">
						<tr>
							<th>id</th>
							<th>Judul Buku</th>
							<th>Penerbit Buku</th>
							<th>Genre Buku</th>
							<th>Harga Buku</th>
						</tr>
					
						
						<?php
							$no = 1;  
							while ($row = mysqli_fetch_assoc($result)) {
						?>
						<tr>
							<td><?php echo $no++; ?></td>
							<td><?php echo $row['judul buku']; ?></td>
							<td><?php echo $row['penerbit buku']; ?></td>
							<td><?php echo $row['genre buku']; ?></td>
							<td><?php echo $row['harga buku']; ?></td>
							<td>
								<a href="editform.php?id=<?php echo $row['id buku'];?>" class="btn btn-success" role="button">Edit</a>
								<a href="delete.php?id=<?php echo $row['id buku']?>" class="btn btn-danger" role="button">Delete</a>
							</td>
						</tr>
						
						<?php
							}
							mysqli_close($conn); 
						?>
					</tbody>
				</table>
			</div>
			
		</div>
		
	</div>
</body>
</html> 
<head>
