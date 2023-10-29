<?php
session_start();

// if (!isset($_COOKIE['key'])) {
//     header("Location: login.php"); // Redirect to the main page if the cookie exists.
//     exit();
// }

$msg = [];

// Load and display previous messages from a database or file
// $message = $_POST["message"];

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat App</title>

    <!-- Link to css Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #ddd;
        }

        .hero {
            background-image: linear-gradient(108.7deg, rgba(221, 22, 224, 1) 11%, rgba(111, 22, 190, 1) 88.2%);
        }

        .btnHero {
            background-color: #111;
        }

        .btnHero:hover {
            background-color: #555;
        }

        .sneakers {
            box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
            transition: .4s;
            background-color: #f2f2f2;
        }

        .sneakers:hover {
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
            transform: translate(0px, -8px);
        }

        .nike {
            transition: .2s;
        }

        .nike:hover {
            transform: translate(0px, -8px);
        }

        .btn1 {
            background-color: #cc0000;
        }

        .btn1:hover {
            background-color: #aa0000;
        }

        .btn2 {
            background-color: #4444cc;
        }

        .btn2:hover {
            background-color: #4444aa;
        }

        ul li {
            list-style-type: none;
        }

        .linkA {
            color: #777;
        }

        .linkA:hover {
            color: #111;
        }

        .sosmed {
            background-color: #bbb;
        }

        .sosmed:hover {
            background-color: #f2f2f2;
        }

        .footList li a {
            color: #999;
        }

        .footList li a:hover {
            color: #f2f2f2;
        }

        #chat {
            width: 300px;
            margin: 0 auto;
            border: 1px solid #ccc;
            padding: 10px;
        }

        #messages {
            height: 200px;
            overflow-y: scroll;
            border: 1px solid #ccc;
            padding: 10px;
        }
    </style>
</head>

<body>
    <nav class="navbar" style="background-color: #111;">
        <div class=" d-flex w-100">
            <h4 class="text-white ps-3">Halo</h4>
        </div>
    </nav>


    <div class="hero row container-fluid row-cols-2 ms-0 shadow-lg">
        <div class="col text-center text-white my-auto">
            <h2 class="fw-bold">RUN YOUR RUN</h2>
            <P>Follow the feeling that keeps you running your best in the city</P>
            <div class="row row-cols-2 justify-content-around w-100">
                <div class="btnHero col rounded-5 w-auto">
                    <a class="text-white text-decoration-none" href="">Shop Apparel</a>
                </div>
                <div class="btnHero col rounded-5 w-auto">
                    <a class="text-white text-decoration-none" href="">Shop Footwear</a>
                </div>
            </div>
        </div>
        <div class="col d-flex justify-content-center">
            <img class="nike img-fluid w-50 pt-5" src="assets/image/nike1.png" alt="" title="Skate Nike One">
        </div>
    </div>

    <div class="content">
        <div>
            <h3 class="p-3">Gear Up</h3>
        </div>
        <div class="row w-100 gap-3 d-flex justify-content-center">
            <div class="sneakers card rounded col-5 d-flex justify-content-center flex-col
            umn shadow-lg w-25">
                <img class="img-fluid w-50 mx-auto" src="assets/image/nike2.png" alt="" title="Nike Air Pegasus">
                <div class="text-center">
                    <h2>Nike Air Pegasus</h2>
                    <p class="text-black-50">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque, laborum.
                    </p>
                    <h3>$75.00</h3>
                    <button type="button" class="btn btn1 w-auto text-white mb-2">Buy Now
                    </button>
                </div>
            </div>
            <div class="sneakers rounded col-5 d-flex justify-content-center flex-column shadow-lg w-25">
                <img class="img-fluid w-50 mx-auto" src="assets/image/nike5.png" alt="" title="Nike Dunk SB">
                <div class="text-center">
                    <h2>Nike Dunk SB</h2>
                    <p class="text-black-50">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque, sed!</p>
                    <h3>$100.00</h3>
                    <button type="button" class="btn btn2 w-auto text-white">Buy Now
                    </button>
                </div>
            </div>
        </div>


        <div class="row mt-5 mb-5">
            <div class="bawah col text-center">
                <p>Shoes</p>
                <ul class="list-group list-group-flush">
                    <li><a class="linkA text-decoration-none" href="">All Shoes</a></li>
                    <li><a class="linkA text-decoration-none" href="">Custom Shoes</a>
                    </li>
                    <li><a class="linkA text-decoration-none" href="">Jordan Shoes</a>
                    </li>
                    <li><a class="linkA text-decoration-none" href="">Running Shoes</a>
                    </li>
                </ul>
            </div>
            <div class="bawah col text-center">
                <p>Clothing</p>
                <ul class="list-group list-group-flush">
                    <li><a class="linkA text-decoration-none" href="">All Clothing</a></li>
                    <li><a class="linkA text-decoration-none" href="">Modest Wear</a>
                    </li>
                    <li><a class="linkA text-decoration-none" href="">Hoodies dan Pullovers</a>
                    </li>
                    <li><a class="linkA text-decoration-none" href="">Shirt dan Tops</a>
                    </li>
                </ul>
            </div>
            <div class="bawah col text-center">
                <p>Kids</p>
                <ul class="list-group list-group-flush">
                    <li><a class="linkA text-decoration-none" href="">Infant & Toddler Shoes</a></li>
                    <li><a class="linkA text-decoration-none" href="">Kid's Shoes</a>
                    </li>
                    <li><a class="linkA text-decoration-none" href="">Kid's Clothing</a>
                    </li>
                    <li><a class="linkA text-decoration-none" href="">Running Backpack</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- <div id="messages">

    </div>

    <form method="post" action="">
        <input type="text" name="message" placeholder="Type your message" required>
        <input type="submit" name="submit" value="Send">
    </form> -->

    <!-- Footer  -->
    <footer class="d-flex row row-cols-2 w-100 ms-0 mt-3" style="background-color: #111;">
        <div class="col d-flex p-5" style="font-size: small;">
            <div class="w-100 text-white">
                <p>FIND A STORE</p>
                <p>BECOME A MEMBER</p>
                <p>STUDENT DISCOUNTS</p>
                <p>Send Us Feedback</p>
            </div>
            <div class="w-100 text-white">
                <p class="ps-4">GET HELP</p>
                <ul class="footList">
                    <li><a class="text-decoration-none " href="">Order Status</a></li>
                    <li><a class="text-decoration-none " href="">Delivery</a></li>
                    <li><a class="text-decoration-none " href="">Returns</a></li>
                    <li><a class="text-decoration-none " href="">Payment Options</a></li>
                    <li><a class="text-decoration-none " href="">Contact Us</a></li>
                </ul>
            </div>
            <div class="w-100 text-white">
                <p class="ps-4">ABOUT NIKE</p>
                <ul class="footList">
                    <li><a class="text-decoration-none " href="">News</a></li>
                    <li><a class="text-decoration-none " href="">Careers</a></li>
                    <li><a class="text-decoration-none " href="">Inverstors</a></li>
                    <li><a class="text-decoration-none " href="">Sustainability</a></li>
                </ul>
            </div>
        </div>
        <div class="col d-flex gap-3 justify-content-end pt-5 pe-5">
            <div class="sosmed rounded-5 d-flex justify-content-center align-items-center" style="height: 40px;width: 40px; 
            ">
                <a href="">
                    <img src="assets/icon/twitter.svg" alt="">
                </a>
            </div>
            <div class="sosmed rounded-5 d-flex justify-content-center align-items-center" style="height: 40px;width: 40px; 
            ">
                <a href="">
                    <img src="assets/icon/facebook.svg" alt="">
                </a>
            </div>
            <div class="sosmed rounded-5 d-flex justify-content-center align-items-center" style="height: 40px;width: 40px; 
            ">
                <a href="">
                    <img src="assets/icon/youtube.svg" alt="">
                </a>
            </div>
            <div class="sosmed rounded-5 d-flex justify-content-center align-items-center" style="height: 40px;width: 40px; 
            ">
                <a href="">
                    <img src="assets/icon/instagram (2).svg" alt="">
                </a>
            </div>
        </div>
        <!-- Copyright -->
        <div class="d-flex justify-content-center p-3 w-100 text-white gap-1" style="font-size: 12px;">
            <div class="d-flex align-items-center" style="height: fit-content;">
                <img src="assets/icon/map-pin.svg" alt="">
            </div>
            <div class="d-flex justify-content-center gap-2 mt-1" style="height:20px;">
                <p class=""><strong>Indonesia</strong></p>
                <a class="text-white-50 text-decoration-none" href="#">@ 2023 3C - Informatika, Inc. All Rights
                    Reserved</a>
            </div>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer End -->

    <!-- Link to js Bootstrap -->
    <scriC3pt src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>

</body>

</html>