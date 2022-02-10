<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- aos master -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- font -->
    <?php include('font.php') ?>

    <title>coffee</title>
    <style>

    </style>

</head>

<body>
    <?php
    session_start();
    if (!isset($_SESSION['username'])) {
        include('navbar/navbar.php');
    } else {
        include('navbar/navbar_user.php');
    }

    ?>


    <div class="container p-1">
        <!-- carousel -->
        <div data-aos="fade-up" data-aos-duration="1000">
            <div id="carouselExampleCaptions" class="carousel slide carousel-fade px-3" data-bs-ride="carousel">
                <div class="carousel-indicators ">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="10000">
                        <img src="assets/carousel_img/1.png" class="d-block w-100" alt="...">

                    </div>
                    <div class="carousel-item" data-bs-interval="10000">
                        <img src="assets/carousel_img/2.png" class="d-block w-100" alt="...">

                    </div>
                    <div class="carousel-item" data-bs-interval="10000">
                        <img src="assets/carousel_img/3.png" class="d-block w-100" alt="...">

                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>


        <div class="container">

            <div class="row row-cols-1 row-cols-md-4 my-3 justify-content-center">
                <div class="col ">
                    <div class="dropdown">
                        <a class="btn btn-secondary d-md-block mx-auto btn-lg" href="#" role="button" id="asia" data-bs-toggle="dropdown" aria-expanded="false">
                            Asia
                        </a>

                        <ul class="dropdown-menu" aria-labelledby="asia">
                            <li class="text-start dropdown-item">
                                <b>Southeast Asia</b>
                            </li>
                            <li><a class="dropdown-item" href="#">Thailand</a></li>
                            <li><a class="dropdown-item" href="#">Vietnam</a></li>
                            <li><a class="dropdown-item" href="#">Indonesia</a></li>
                            <li><a class="dropdown-item" href="#">Malaysia</a></li>
                            <li><a class="dropdown-item" href="#">Laos</a></li>
                            <li><a class="dropdown-item" href="#">Philipines</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col">
                    <div class="dropdown">
                        <a class="btn btn-secondary d-md-block  mx-auto btn-lg" href="#" role="button" id="america" data-bs-toggle="dropdown" aria-expanded="false">
                            America
                        </a>

                        <ul class="dropdown-menu" aria-labelledby="america">
                            <li class="text-start dropdown-item">
                                <b>North America</b>
                            </li>
                            <li><a class="dropdown-item" href="#">Canada</a></li>
                            <li class="text-center">
                                <b>South America</b>
                            </li>
                            <li><a class="dropdown-item" href="#">Brazil</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col">
                    <div class="dropdown">
                        <a class="btn btn-secondary d-md-block  mx-auto btn-lg" href="#" role="button" id="africa" data-bs-toggle="dropdown" aria-expanded="false">
                            Africa
                        </a>

                        <ul class="dropdown-menu" aria-labelledby="america">
                            <li class="text-start dropdown-item">
                                <b>South Africa</b>
                            </li>
                            <li><a class="dropdown-item" href="#">Canada</a></li>
                            <li class="text-center">
                                <b>South America</b>
                            </li>
                            <li><a class="dropdown-item" href="#">Brazil</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col">
                    <div class="dropdown">
                        <a class="btn btn-secondary d-md-block  mx-auto btn-lg" href="#" role="button" id="america" data-bs-toggle="dropdown" aria-expanded="false">
                            Europe
                        </a>

                        <ul class="dropdown-menu" aria-labelledby="america">
                            <li class="text-start dropdown-item">
                                <b>North America</b>
                            </li>
                            <li><a class="dropdown-item" href="#">Canada</a></li>
                            <li class="text-center">
                                <b>South America</b>
                            </li>
                            <li><a class="dropdown-item" href="#">Brazil</a></li>
                        </ul>
                    </div>
                </div>
            </div>


            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card h-100 shadow text-center border-0">
                        <img src="assets/carousel_img/1.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                        <div class="p-3 bg-light">
                            <button class="btn btn-success">buy</button>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 shadow text-center border-0">
                        <img src="assets/carousel_img/1.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a short card.</p>
                        </div>
                        <div class="p-3 bg-light">
                            <button class="btn btn-success">buy</button>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 shadow text-center border-0">
                        <img src="assets/carousel_img/1.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                        </div>
                        <div class="p-3 bg-light">
                            <button class="btn btn-success">buy</button>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 shadow text-center border-0">
                        <img src="assets/carousel_img/1.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                        <div class="p-3 bg-light">
                            <button class="btn btn-success">buy</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer class="mt-5 ">
            <div class="container">
                <p>Pincoffee</p>
            </div>
        </footer>
        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
        <!-- jquery -->
        <script src="jquery.js"></script>
        <!-- sweet alert -->
        <!-- <script src="sweetalert.js"></script> -->
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init();

            //Login -------------------------------------------
            function login() {
                let username = $('#username');
                let password = $('#password');

                $("input").each(function() {
                    if ($(this).val().trim() == '') {
                        $(this).css('border-color', 'red');
                        $('.alert').show();
                        $('.alert').html("Please enter your data.");
                    } else
                        $(this).css('border-color', '');

                });

                if (isNotEmpty(username) && isNotEmpty(password)) {
                    $.ajax({
                        url: "login/login_check.php",
                        type: "POST",
                        dataType: "json",
                        data: {
                            username: username.val(),
                            password: password.val()
                        },
                        success: function(data) {

                            if (data.status == "logedin") {
                                swal({
                                        title: "Loged in",
                                        text: "Login success",
                                        icon: "success",
                                        button: false,
                                    })
                                    .then((value) => {
                                        window.location.replace("index.php");
                                    });
                            } else {
                                $('.alert').show();
                                $('.alert').html("Please check username and password");
                            }
                        },
                        error: function(data) {
                            console.log("error");
                            console.error(data);
                        }

                    });

                } else {

                }

            }

            function isNotEmpty(caller) {
                if (caller.val == "") {
                    return false;
                } else {
                    return true;
                }
            }
        </script>
</body>

</html>