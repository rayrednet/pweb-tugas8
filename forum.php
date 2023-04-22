<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Silaturahmi Online</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.ico">
    
    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="bg-image">      
    <header class="header-color">  
        <a href="#" class="logo"></a>
        <h1>Forum Silaturahmi Online</h1>
    </header>

    <div class="alert <?php if($_GET['status'] == 'sukses') echo 'alert-success'; else if($_GET['status'] == 'gagal') echo 'alert-danger'; else echo 'd-none'; ?> text-center" role="alert">            
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Penambahan pesan baru berhasil!";
            } else if($_GET['status'] == 'gagal'){
                echo "Penambahan pesan baru gagal!";
            } else {
                echo "&nbsp;";
            }
        ?>
    </div>

    <main class="container">
        <nav class="mb-3">
            <a href="tambah_pesan.php" class="btn btn-warning btn-new-message">[+] Buat Pesan Baru</a>
        </nav>
        <div class="container-box">
            <div class="card-columns">
                <?php
                $sql = "SELECT * FROM pesan ORDER BY pesan_balasan IS NULL ASC";
                $query = mysqli_query($db, $sql);

                while ($hasil = mysqli_fetch_array($query)) {
                    ?>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $hasil['nama']; ?></h5>
                            <p class="card-text"><?php echo $hasil['pesan']; ?></p>
                        </div>
                        <?php if ($hasil['pesan_balasan']) { ?>
                            <div class="card-footer text-end bg-admin">
                                <p class="text-admin"><?php echo $hasil['pesan_balasan']; ?></p>
                                <small class="text-admin">~ Admin ~</small>
                            </div>
                        <?php } ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </main>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
