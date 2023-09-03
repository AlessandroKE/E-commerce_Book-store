<?php

session_start();

define("APPURL", "http://localhost/bookstore/");

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Bookstore</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <div class="container" style="margin-top: none">
            <a class="navbar-brand  text-white" href="<?php echo APPURL; ?>">Bookstore</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form> -->
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active  text-white" aria-current="page" href="<?php echo APPURL; ?>">Home</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link  text-white" href="<?php echo APPURL; ?>/contact.php">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active  text-white" aria-current="page" href="<?php echo APPURL; ?>/categories/index.php">Categories</a>
                    </li>

                    <?php if (isset($_SESSION['username'])) : ?>
                        <li class="nav-item">
                            <a class="nav-link active  text-white" aria-current="page" href="<?php echo APPURL; ?>/shopping/cart.php"><i class="fas fa-shopping-cart"></i>(2)</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle  text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <?php echo $_SESSION['username']; ?>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li><a class="dropdown-item" href="<?php echo APPURL; ?>/auth/logout.php">Logout</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Under Development</a></li>
                            </ul>
                        </li>

                    <?php else : ?>
                        <li class="nav-item">
                            <a class="nav-link  text-white" href="<?php echo APPURL; ?>/auth/login.php">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  text-white" href="<?php echo APPURL; ?>/auth/register.php">Register</a>
                        </li>

                    <?php endif; ?>
                </ul>

            </div>
        </div>
    </nav>

