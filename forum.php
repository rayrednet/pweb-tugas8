<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Silaturahmi PWeb</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
	<header class="text-center mb-4">
		<h1>Forum</h1>
	</header>

	<main class="container">
		<nav class="mb-3">
			<a href="tambah_pesan.php" class="btn btn-warning">[+] Tambah Baru</a>
		</nav>

		<div class="row row-cols-1 row-cols-md-2 g-4">
			<?php
			$sql = "SELECT * FROM pesan";
			$query = mysqli_query($db, $sql);

			while($hasil = mysqli_fetch_array($query)){
			?>
			<div class="col">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title"><?php echo $hasil['nama']; ?></h5>
						<p class="card-text"><?php echo $hasil['pesan']; ?></p>		
					</div>
					<div class="card-footer text-end">
						<p><?php echo ($hasil['pesan_balasan'] ? $hasil['pesan_balasan'] : 'Belum ada balasan dari admin (pejabat)'); ?></p>
						<small class="text-muted">~ Admin ~</small>
					</div>
				</div>
			</div>
			<?php } ?>
		</div>
	</main>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
