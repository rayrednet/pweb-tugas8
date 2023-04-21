<?php 
include("config.php");
if (!isset($_GET['id'])) {
  // kalau tidak ada id di query string
  header('Location: mailbox.php');
}
//ambil id dari query string
$id = $_GET['id'];
// buat query untuk ambil data dari database
$sql = "SELECT * FROM pesan WHERE id=$id";
$query = mysqli_query($db, $sql);
$hasil = mysqli_fetch_assoc($query);
// jika data tidak ditemukan
if (mysqli_num_rows($query) < 1) {
  die("data tidak ditemukan...");
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Silaturahmi PWeb</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="icon" type="image/x-icon" href="assets/images/favicon.ico">
</head>
<body>
  <div class="container mt-5">
      <div class="jumbotron">
        <h1 class="display-4 text-center">Reply Silaturahmi Masyarakat</h1>
        <form action="proses-reply.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $hasil['id'] ?>" />
        <div class="form-group">
          <label for="nama">Nama:</label>
          <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $hasil['nama'] ?>" readonly>
        </div>
        <div class="form-group">
          <label for="pesan">Pesan:</label>
          <textarea class="form-control" id="pesan" name="pesan" rows="3" readonly><?php echo $hasil['pesan'] ?></textarea>
        </div>
        <div class="form-group">
          <label for="balasan">Balasan:</label>
          <textarea class="form-control" id="balasan" name="balasan" rows="3" required></textarea>
        </div>
        <br>
        <button type="submit" class="btn btn-primary" name="save">Simpan</button>
      </form>
      </div>
    </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
