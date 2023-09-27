<?php
include 'essentials/_header.php';
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
input[type=number]::-webkit-inner-spin-button,
input[type=number]::-webkit-outer-spin-button {
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
}

#p4 {
    border: none;
}

#p5:hover {
    background-color: black;
    color: white;
}

#p6:hover {
    color: orange;
}
</style>

<div class="row my-5" style="width: 1500px;"><img src="materials/img.jpg"
        style="width: 450px; height: 650px; margin-left: 260px; margin-right: 20px;" alt="">
    <div class="row my-4" style="width: 650px;">
        <h4>Carpetmantra Silver Modern Carpet</h4>
        <ul class="mt-4" style="margin-left: 20px;">
            <li class="mb-2"><b>Material:</b> 100% New Zealand Wool</li>
            <li><b>Availability:</b> In stock</li>
        </ul>

        <p class="my-2"><b>Availabile offers</b></p>
        <ul class="" style="margin-left: 20px;">
            <li class="mb-2"><b>EMI is available with all leading banks powered by PayUMoney payment gateway.</b>
            </li>
        </ul>
        <hr>
        <p class="my-2"><b>SIZE *</b></p>
        <div class="mb-3 form-check" style="background-color: lightgray;">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label " for="exampleCheck1">4.6ft X 6.6ft
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <s style="color: gray;">₹14400</s> ₹7500
            </label>
        </div>
        <div class="row mb-4">
            <div class="container"
                style="border-style: solid; border-width: thin; width: 95px; margin-left: 0px; margin-right: 0px; padding: 6px; border-radius: 20px;">
                <button onclick="decrement()" id="p4" style="background-color: white;"><b>-</b></button>
                <input class="text-center" id=demoInput type=number min=1 max=10 value="1"
                    style="border-radius: 8px; border-style:none; width: 30px;">
                <button onclick="increment()" id="p4" style="background-color: white;"><b>+</b></button>
            </div>
            <button type="button" style="width: 150px; margin-left: 10px; border-radius: 20px;" id="p5">ADD
                TO CART</button>
            <button type="button" style="width: 42px; margin-left: 10px; border-radius: 30px; border-style: ridge;"
                id="p5"><i class="fa-regular fa-heart"></i></button>
            <h5 class="mt-4">Delivery By</h5>
            <p style="width: 260px; margin-left: 12px; margin-bottom: 0%; padding:0%;">Enter Pincode &nbsp;<input
                    type="number" name="abcd" id="abcd" style="width: 150px; border-radius: 20px;"></p> 
                    <!--Make Pincode limit to 6 or 7 digits -->
            <button type="submit" style="width: 90px; border-radius: 20px;" id="p5">Check</button>
        </div>
        <hr>
        <p><b>Key features</b></p>
        <ul>
            <li style="margin-left: 20px;"><b>Color: </b>Silver</li>
            <li style="margin-left: 20px;"><b>Thickness: </b>12mm</li>
            <li style="margin-left: 20px;"><b>Country of origin: </b>India</li>
            <li style="margin-left: 20px;"><b>Brand: </b>Insert name here</li>
            <li style="margin-left: 20px;"><b>Cleaning Process: </b>Dry clean washable</li>
            <li style="margin-left: 20px;"><b>Quality: </b>Handmade Carpet</li>
        </ul>
    </div>
    <hr>
    <p class="mt-5" style="width: 1220px; margin-left: 160px;"><b>Quick Overview</b>
        The handmade, construction adds durability to this carpet ensuring it will be a favorite for many years.Each
        carpet is handmade with pure, premium wool and has a exceptional texture, beauty and durability. This elegant
        carpet will give your home a sophisticated style for over years CARPET MANTRA has been crafting carpets of the
        higest quality and unmatched style.</p>
</div>
<!-- <hr>
    <div class="container">
    <h3>Similar Products</h3>
</div> -->
<!-- ADD AVERAGE RATING -->
<hr>
<div class="container my-3">
    <h4><b>Rate this product</b></h4>
    <h4><span id="" style="color: orange;" class="fa fa-star"></span>
        <span id="" style="color: orange;" class="fa fa-star"></span>
        <span id="" style="color: orange;" class="fa fa-star"></span>
        <span id="" style="color: orange;" class="fa fa-star"></span>
        <span id="p6" class="fa fa-star"></span>
    </h4>
    <h4><b>Write a Review</b></h4>
    <form class="my-3">
        <div class="input-group">
            <textarea class="form-control" aria-label="With textarea"></textarea>
        </div>
        <button type="submit" class="btn btn-success mt-3">Submit</button>
    </form>

</div>
<div class="container">
    <h4>Reviews</h4>
    <div class="card my-3" style="width: 21rem; margin-left: 35px;">
                <div class="card-body">
                    <img src="..." class="card-img" alt="Photo of product">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                </div>
            </div>
</div>
<script>
function increment() {
    document.getElementById('demoInput').stepUp();
}

function decrement() {
    document.getElementById('demoInput').stepDown();
}
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
    integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
</script>

</html>
<?php include 'essentials/_footer.php';?>