<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
    <head>
        <title>Silaturahmi Online</title>
        <link rel="icon" type="image/x-icon" href="assets/images/favicon.ico">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="assets/css/style.css">
    </head>
    <body class="bg-image">
        <header class="header-color">  
            <a href="#" class="logo"></a>
            <h1>Silaturahmi Online</h1>
        </header>
        <div class="container-box position-absolute top-50 start-50 translate-middle">
            <img src="assets/images/idul-fitri.png" alt="idul-fitri" width="500px">
            <nav class="nav-main justify-content-center">
                <a href="forum.php"> <button >User</button></a>
                <a href="#"><button data-bs-toggle="modal" data-bs-target="#passModal">Admin</button></a>
            </nav>
        </div>
        <div class="modal fade" id="passModal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="ModalLabel">Admin Password</h1>
                </div>
                <div class="modal-body">
                    <input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock">
                        <div id="passwordHelpBlock" class="form-text">
                        </div>
                    </input>
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-danger" data-bs-dismiss="modal"></input>
                    <a href="mailbox.php"><input type="button" class="btn btn-success"></input></a>
                </div>
            </div>
        </div>
    </div>
    </body>
</html>