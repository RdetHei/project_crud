<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
    <title>Document</title>
</head>
<body>

    <h1 align="center" style="margin-top: 200px;">SELAMAT DATANG ADMIN!</h1>
    <h3 align="center">Ini merupakan data Buku yang tersedia</h3>
    <table border="1" align="center">
		<tr>
		<th colspan='6'><a href="tambah.php">TAMBAH BUKU</a></th>
		</tr>
		<tr>
			<th>Id</th>
			<th>Nama Buku</th>
			<th>ISBN</th>
			<th>Genre</th>
			<th>UPDATE</th>
		</tr>
		<?php 
		include 'connect.php';
		$no = 1;
		$data = mysqli_query($koneksi,"SELECT * from buku");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td align="center"><?php echo $no++; ?></td>
				<td><?php echo $d['Nama_Buku']; ?></td>
				<td align="center"><?php echo $d['ISBN']; ?></td>
				<td><?php echo $d['Genre']; ?></td>

				<td>
					<a href="edit.php?Id=<?php echo $d['Id']; ?>">EDIT</a>
					<a href="hapus.php?Id=<?php echo $d['Id']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>

</body>
</html>