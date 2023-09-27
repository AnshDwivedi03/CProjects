    <?php include 'essentials/_header.php';
        include 'essentials/_dbconnect.php';?>

    <body>

        <!-- image of the category -->
        <div class="carousel slide mb-3" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="materials/slide.jpg" class="d-block" style="width: 1600px; height: 450px;" alt="...">
                </div>
            </div>
        </div>
        <h1 class="text-center">--------------Category name-------------------</h1>
        <!-- products based on category -->
        <!-- <div class="row" style="margin-left: 150px; margin-right: 0px;"> -->
        <div class="row" style="margin-right: 0px;">
            <div class="container" style="width: 200px; margin-left: 50px; margin-right: 75px;">
                <ul style="padding-left: 0px;">
                    <h5>
                        <li><b>Filter by Color</b></li>
                        <ul>
                            <li>Red</li>
                            <li>Green</li>
                            <li>Blue</li>
                        </ul>
                    </h5>
                </ul>
                <ul style="padding-left: 0px;">
                    <h5>
                        <li><b>Filter by Material</b></li>
                        <ul>
                            <li>Cotton</li>
                            <li>Wool</li>
                            <li>Jute</li>
                        </ul>
                    </h5>
                </ul>
                <ul style="padding-left: 0px;">
                    <h5>
                        <li><b>Filter by Size</b></li>
                        <ul>
                            <li>2 x 6</li>
                            <li>2 x 8</li>
                            <li>3 x 5</li>
                        </ul>
                    </h5>
                </ul>
                <ul style="padding-left: 0px;">
                    <h5>
                        <li><b>Filter by Price</b></li>
                        <ul>
                            <li>Under - ₹5000</li>
                            <li>₹5000 - ₹10000</li>
                            <li>₹10000-₹20000</li>
                        </ul>
                    </h5>
                </ul>
            </div>
            <div class="card my-3" style="width: 17rem; margin-left: 20px;">
                <div class="card-body">
                    <p class="card-text"><a href="productpage.php">Some quick example text to build on the card title and make up the bulk of
                        the card's content</a></p>
                    <img src="materials/img.jpg" class="card-img" alt="...">
                </div>
            </div>
        <!-- PAGINATION -->
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled" style="color: black;">
                    <a class="page-link">Previous</a>
                </li>
                <li class="page-item"><a class="page-link" href="#" style="color: black;">1</a></li>
                <li class="page-item"><a class="page-link" href="#" style="color: black;">2</a></li>
                <li class="page-item"><a class="page-link" href="#" style="color: black;">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#" style="color: black;">Next</a>
                </li>
            </ul>
        </nav>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
            integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
            integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous">
        </script>
    </body>
    <?php include 'essentials/_footer.php'; ?>