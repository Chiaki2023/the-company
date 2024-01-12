<?php
session_start();

require '../classes/User.php';

$user = new User;
$user_details = $user->getUser();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <!-- CDN CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- CDN font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <nav class="navbar navbar-expand navbar-dark bg-dark" style="margin-bottom: 80px;">
        <div class="container">
            <a href="dashboard.php" class="navbar-brand">
                <h1 class="h3">The Company</h1>
            </a>
            <div class="navbar-nav">
                <span class="navbar-text"><?=$_SESSION['full_name']?></span>
                <form action="../actions/logout.php" method="post" class="d-flex ms-2">
                    <button type="submit" class="text-danger bg-transparent border-0">Log out</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container w-50">
        <form action="../actions/edit-user.php" method="post" enctype="multipart/form-data">
            <h1 class="text-uppercase text-center">Edit User</h1>

            <?php
                if($user_details['photo']){
            ?>
            <img src="../assets/images/<?= $user_details['photo']?>" alt="<?= $user_details['photo']?>" class="d-block mx-auto edit-photo">
            <?php
                }else{ 
            ?>
            <i class="fa-solid fa-user text-secondary d-block text-center edit-icon"></i>
            <?php
                }
            ?>

            <div class="row w-50 mx-auto">
                <input type="file" name="photo" id="photo" >
            </div>

            <div class="row mt-4">
                <label for="" class="form-label">First Name</label>
                <input type="text" name="first_name" id="first_name" value="<?=$user_details['first_name']?>" class="form-control">
            </div>
            <div class="row mt-4">
                <label for="" class="form-label">Last Name</label>
                <input type="text" name="last_name" id="last_name" value="<?=$user_details['last_name']?>" class="form-control">
            </div>
            <div class="row mt-4">
                <label for="" class="form-label fw-bold">Username</label>
                <input type="text" name="username" id="username" value="<?=$user_details['username']?>" class="form-control fw-bold">
            </div>
            <div class="row mt-4">
                <div class="col text-end">
                    <a href="dashboard.php" class="btn btn-secondary ">Cancel</a>
                </div>
                <div class="col text-start">
                    <button type="submit" name="save" class="btn btn-warning">Save</button>
                </div>
            </div>
        </form>

    </div>
    


    

<!-- CDN JS Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>