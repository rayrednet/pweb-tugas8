<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Silaturahmi Online</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<link rel="icon" type="image/x-icon" href="assets/images/favicon.ico">
	<!-- Additional CSS Files -->
	<link rel="stylesheet" href="assets/css/admin.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>

<body class = "bg-admin">	
	<header class="header-color">  
        <a href="#" class="logo"></a>
        <h1>Pesan-Pesan Masyarakat</h1>
    </header>

	<div class="alert <?php if($_GET['status'] == 'sukses') echo 'alert-success'; else if($_GET['status'] == 'gagal') echo 'alert-danger'; else echo 'd-none'; ?> text-center" role="alert">			
		<?php
			if($_GET['status'] == 'sukses'){
				echo "Penambahan balasan berhasil!";
			} else if($_GET['status'] == 'gagal'){
				echo "Penambahan balasan gagal!";
			} else {
				echo "&nbsp;";
			}
		?>
	</div>
	<div class="container">
		<div class="table-container">
		<table class="table">
			<thead>
				<tr>
					<th>Nama</th>
					<th>Pesan</th>
					<th>Balasan Admin</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>		
				<?php
				$sql = "SELECT * FROM pesan ORDER BY pesan_balasan IS NULL DESC";
				$query = mysqli_query($db, $sql);
				
				while($hasil = mysqli_fetch_array($query)){
					echo "<tr>";    
					echo "<td>".$hasil['nama']."</td>";
					echo "<td>".$hasil['pesan']."</td>";
					echo "<td>".$hasil['pesan_balasan']."</td>";
					echo "<td>";
					if ($hasil['pesan_balasan'] == null) {
						echo "<a href='balas_pesan.php?id=".$hasil['id']."' class='btn btn-primary'>Balas</a>";
					} else {
						echo "<button class='btn btn-danger' disabled>Balas</button>";
					}
					echo "</td>";    
					echo "</tr>";
				}
				?>  
			</tbody>
		</table>
		</div>
	</div>
</body>
</html>
