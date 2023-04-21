<!DOCTYPE html>
<html>
<head>
	<title>Silaturahmi PWeb</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
	<div class="container mt-5">
		<div class="jumbotron">
			<h1 class="display-4 text-center">Contact Book<br>Selamat Hari Raya Silaturahmi</h1>
			<form action="proses-tambah.php" method="POST" class="mt-5">
				<div class="mb-3">
					<label for="nama" class="form-label">Nama:</label>
					<input type="text" class="form-control" id="nama" name="nama" placeholder="Nama lengkap">
				</div>
				<div class="mb-3">
					<label for="pesan" class="form-label">Pesan:</label>
					<textarea class="form-control" id="pesan" name="pesan"></textarea>
				</div>
				<div>
					<button type="submit" class="btn btn-primary" name="done">Selesai</button>
				</div>
			</form>
		</div>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>