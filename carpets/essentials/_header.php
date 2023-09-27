<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>insert name here</title>
        <script src="https://kit.fontawesome.com/d523688fb7.js" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    </head>
    <style>
    .nav-item:hover .dropdown-menu {
        display: block;
    }
    </style>
    <?php 
include 'essentials/_dbconnect.php';
$sql = 'SELECT * FROM `categories`';
$result = mysqli_query($conn, $sql);
?>

    <nav class="navbar navbar-expand-lg" style="background-color: lightgray;">
        <div class="container-fluid">
            <a class="navbar-brand" href="/carpets/">Insert Site Name</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#">
                            Categories
                        </a>
                        <ul class="dropdown-menu">
                            <?php
                           while ($row = mysqli_fetch_assoc($result)) {
                           $cat = $row['category_name'];
                          echo '<li><a class="dropdown-item" href="buypage.php">'. $cat .'</a></li>';}
                        ?>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#">
                            Color
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#">
                            Size
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#">Price</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Under-₹5000</a></li>
                            <li><a class="dropdown-item" href="#">₹5000-₹10000</a></li>
                            <li><a class="dropdown-item" href="#">₹10000-Above</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex container-fluid" style="margin-right: 60px;" role="search">
                    <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn" style="background-color: white;" type="submit"><i
                            class="fa-solid fa-magnifying-glass"></i></button>
                </form>
                <!-- BAAD MEIN YE TEENO KO HATA KE WO IMAGE LAGA DENGE PROFILE, WISHLIST, CART WAALI -->
                <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="padding-right: 40px;">
                    <li class="nav-item dropdown">
                        <a class="btn btn nav-link"><i class="fa-solid fa-user"></i></a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Manage Account</a></li>
                            <li><a class="dropdown-item" href="#">Create an Account</a></li>
                            <li><a class="dropdown-item" href="#">Login</a></li>
                        </ul>
                    </li>
                    <button class="btn btn"><i class="fa-solid fa-heart"></i></button>
                    <button class="btn btn"><i class="fa-solid fa-cart-shopping"></i></button>
                </ul>
            </div>
        </div>
    </nav>

</html>