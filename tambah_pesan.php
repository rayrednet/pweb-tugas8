<!DOCTYPE html>
<html>
<head>
	<title>Silaturahmi Online</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<link rel="icon" type="image/x-icon" href="assets/images/favicon.ico">
	<!-- Additional CSS Files -->
	<link rel="stylesheet" href="assets/css/style.css">
	<!-- Additional JS Files -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<body class="bg-image">      
    <header class="header-color">  
        <a href="#" class="logo"></a>
        <h1>Contact Book</h1>
    </header>
	<div class ="container-letter">
		<div class="input-group mb-3">
			<div class="input-group-prepend col-md-6">
				<img src="assets/images/2-peeps.png" class="image-size">
			</div>
			<div class="col-md-6">
				<form action="proses-tambah.php" method="POST" class="mt-5">
					<div class="mb-3">
						<input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" required>
					</div>
					<div class="mb-3">
						<textarea class="form-control" id="pesan" name="pesan" placeholder="Isi pesan" required></textarea>
					</div>
					<div class="mb-3 mt-3">
						<button type="submit" class="button" name="done" >Selesai</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>
