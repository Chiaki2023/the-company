<?php
session_start();

require '../classes/User.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete User</title>
    <!-- CDN CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- CDN font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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

<main class="card w-50 mx-auto border-0 my-5">
            <div class="card-header bg-white border-0">
                <i class="fas fa-exclamation-triangle text-warning display-4 d-block mb-2 text-center"></i>
                <h2 class="card-title text-center text-danger text-uppercase h4 mb-0">Delete Account</h2>
            </div>

            <div class="card-body">
                <div class="text-center mb-4">
                <p class="fw-bold mb-0">Are you sure you want to delete your account?</p>
                </div>
            
                <div class="row">
                    <div class="col">
                        <a href="dashboard.php?" class="btn btn-secondary w-100">Cancel</a>
                    </div>
                    <div class="col">
                        <form action="../actions/delete-user.php" method="post">
                            <button type="submit" class="btn btn-outline-danger w-100" name="btn_delete" >Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </main> 


    

<!-- CDN JS Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>