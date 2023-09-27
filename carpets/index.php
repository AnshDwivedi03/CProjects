<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>insert name here</title>
        <script src="https://kit.fontawesome.com/d523688fb7.js" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <style>
        #p2 {

            width: 90%;
        }
        </style>
    </head>

    <body>
        <!-- -------------------------------------------Header--------------------------------------------------------- -->
        <?php include 'essentials/_header.php';
        include 'essentials/_dbconnect.php'; ?>
        <!-- -------------------------------------------------Picture------------------------------------------------ -->
        <div class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="materials/slide.jpg" class="d-block" style="width: 1600px; height: 450px;" alt="...">
                </div>
            </div>
        </div>
        <!-- --------------------------------------------------Heading----------------------------------------------- -->
        <div class="container my-3 text-center">
            <!-- baad mein styling karke ye lines lagaunga -->
            <h2>----------Browse Categories-------------</h2>
        </div>
        <!-- --------------------------------------------Categories/Catalogues--------------------------------------- -->

        <div class="row" style="margin-left: 150px; margin-right: 0px;">
            <div class="card my-3" style="width: 22rem; margin-left: 20px; margin-right: 0px;">
                <div class="card-body">
                    <p class="card-text"><a href="buypage.php">Some quick example text to build on the card title and make up the bulk of
                        the card's content</a></p>
                        <img src="materials/img.jpg" class="card-img" alt="...">
                </div>
            </div>
            <div class="card my-3" style="width: 22rem; margin-left: 20px; margin-right: 0px;">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                        the card's content</p>
                        <img src="materials/img.jpg" class="card-img" alt="...">
                </div>
            </div>
            <div class="card my-3" style="width: 22rem; margin-left: 20px; margin-right: 0px;">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                        the card's content</p>
                        <img src="materials/img.jpg" class="card-img" alt="...">
                </div>
            </div>
            
        </div>

        <!-- --------------------------------------------Customer Reviews------------------------------------------- -->
        <!-- baaad mein style kar denge ye lines -->
        <h2 class="text-center">-----------Customer Reviews------------</h2>
        <div class="row" style="margin-right: 0px;margin-left: 150px; width: 1115px;">
            <div class="card my-3" style="width: 21rem; margin-left: 35px;">
                <div class="card-body">
                    <img src="materials/slide.jpg" class="card-img" alt="...">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                </div>
            </div>
        </div>

        <!-- ---------------------------------------Benefits of buying from us-------------------------------------- -->
        <!-- baaad mein style kar denge ye lines -->
        <h2 class="text-center">-------------Why Buy from us--------------</h2>
        <div class="container">
            <ul>
                <p>Pepperfry carpets and furnishing products transform houses into homes. Buy an area rug or a carpet online on Pepperfry & avail huge discounts and attractive deals. You will also get flexible payment options like Visa, MasterCard, RuPay, e-wallets, and Cash on Delivery (COD). If you feel that the product is not what you expected to be, you may return it to us within seven days via our 7-Day Easy Return policy. We only stock items that are 100 percent genuine. You may opt for internet banking, cash on delivery, no cost EMI, and other payment.</p>
                <p>Carpets on pepperfry are available in various materials like Wool, Nylon, Polyester, Viscose , Cotton etc</p>
                <p>Top carpet brands available on Pepeprfry are: Saral Home, Status, Obsessions, Jaipur Rugs, Designs View, Imperial Knots</p>
            </ul>
        </div>

        <!-- ----------------------------------------------FOOTER--------------------------------------------------- -->
        <?php include 'essentials/_footer.php'; ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
            integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
        </script>
    </body>

</html>