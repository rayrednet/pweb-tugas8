<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
    <head>
        <title>Silaturahmi Online</title>
        <link rel="icon" type="image/x-icon" href="assets/images/favicon.ico">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="assets/css/index.css">
    </head>
    <body>
        <div class= "container-fluid p-0">
            <img src ="assets/images/index-bg.png" class="bg-image">
            <img src = "assets/images/eri-cahyadi.png" class="overlay">
        </div>

        <div class = "container-fluid p-0">
            <img src ="assets/images/role-yay.png" class ="role">
            <a href="forum.php"> 
                <button class="button">User</button>
            </a>
            <a href="#">
                <button class="admin" data-bs-toggle="modal" data-bs-target="#passModal">Admin</button>
            </a>
            </div>
        <div class="modal fade" id="passModal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="ModalLabel">Admin Verification</h1>
                    </div>
                    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <div class="modal-body">
                        <!-- Add name and required attributes to the password input field -->
                        <input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock" name="admin_password" required>
                        <!-- Add note to the modal body -->
                        <div id="passwordHelpBlock" class="form-text">
                        Enter the password "adminpass" to access the admin dashboard.
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-danger" data-bs-dismiss="modal" value="Cancel"></input>
                        <input type="submit" name="submit" class="btn btn-success" value="Let's Go!"></input>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <?php
        if (isset($_POST['submit'])) {
            if (isset($_POST['admin_password'])) {
                $admin_password = $_POST['admin_password'];
                if ($admin_password === 'adminpass') {
                    header('Location: mailbox.php');
                    exit();
                } else {
                    echo "<div class='alert alert-danger text-center' role='alert'>Incorrect password. Please try again, the password is 'adminpass'.</div>";
                }
            }
        }
        ?>
    </div>
        </div>
    </body>
</html>
