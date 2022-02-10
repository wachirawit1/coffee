<!doctype html>
<html lang="en">

<head>
    <!-- meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- aos master -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- font -->
    <?php include('../font.php') ?>

    <title>Coffee Pin</title>

</head>

<body>
    <nav class="navbar navbar-light bg-white">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="../assets/logo/logo.png" alt="" width="100"></a>
        </div>
    </nav>
    <div class="container-fluid">
        <div data-aos="zoom-in" data-aos-duration="1000">
            <div class="row py-3 bg-light">
                <div class="col text-center position-relative">
                    <h3 class="text-center">Welcome to My Coffe Pin</h3>

                    <div class="position-absolute top-50 start-50 translate-middle">
                        <img src="../assets/carousel_img/3.png" alt="">
                    </div>

                </div>
                <div class="col">
                    <div class="row ">
                        <div class="col d-flex justify-content-center">
                            <div class="card border-0" style="width: 35rem; ">

                                <div class="card-body">
                                    <div class="py-3">
                                        <h4 class="card-text">Sign up</h4>
                                    </div>

                                    <form>
                                        <div class="mb-2">
                                            <label for="exampleFormControlInput1" class="form-label">Username</label>
                                            <input type="text" name="username" id="username" class="form-control form-control-sm" id="exampleFormControlInput1">
                                        </div>
                                        <div class="mb-2">
                                            <label for="exampleFormControlTextarea1" class="form-label">Password</label>
                                            <input type="password" name="password" id="password" class="form-control form-control-sm" id="exampleFormControlTextarea1"></input>
                                        </div>
                                        <div class="mb-2">
                                            <label for="exampleFormControlTextarea1" class="form-label">Verify password</label>
                                            <input type="password" name="vpassword" id="vpassword" class="form-control form-control-sm" id="exampleFormControlTextarea1"></input>
                                        </div>
                                        <div class="mb-2">
                                            <div class="row">
                                                <div class="col">
                                                    <label for="exampleFormControlTextarea1" class="form-label">First Name</label>
                                                    <input type="text" name="fname" id="fname" class="form-control form-control-sm" id="exampleFormControlTextarea1"></input>

                                                </div>
                                                <div class="col">
                                                    <label for="exampleFormControlTextarea1" class="form-label">Last Name</label>
                                                    <input type="text" name="lname" id="lname" class="form-control form-control-sm" id="exampleFormControlTextarea1"></input>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleFormControlTextarea1" class="form-label">Birthday</label>
                                            <input type="date" name="birthday" id="birthday" class="form-control form-control-sm" id="exampleFormControlTextarea1"></input>
                                        </div>
                                        <div class="mb-2">
                                            <label for="exampleFormControlTextarea1" class="form-label">Email</label>
                                            <input type="email" name="email" id="email" class="form-control form-control-sm" id="exampleFormControlTextarea1"></input>
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleFormControlTextarea1" class="form-label">Tel</label>
                                            <input type="text" name="tel" id="tel" class="form-control form-control-sm" id="exampleFormControlTextarea1"></input>
                                        </div>

                                        <div class="d-grid gap-2">
                                            <button class="btn btn-primary" type="button" onclick="register()">Next</button>
                                        </div>
                                    </form>

                                    <div class="row p-3">
                                        <div class="col p-0">
                                            <hr>
                                        </div>
                                        <div class="col col-sm-2 text-center">
                                            <small class="text-muted">Or</small>
                                        </div>
                                        <div class="col p-0">
                                            <hr>
                                        </div>
                                    </div>

                                    <div class="row text-center">
                                        <div class=" col col-sm-6">
                                            <button class="btn btn-primary">Login with Facebook</button>
                                        </div>
                                        <div class="col col-sm-6">
                                            <button class="btn btn-danger"> Login with Google</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-light bg-white">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src=""></a>
        </div>
    </nav>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- sweet alert -->
    <script src="../sweetalert.js"></script>

    <!-- jquery -->
    <script src="../jquery.js"></script>
    <script>
        AOS.init();

        //register ---------------------------------------------------------
        function register() {

            let username = $('#username');
            let password = $('#password');
            let vpassword = $('#vpassword');
            let fname = $('#fname');
            let lname = $('#lname');
            let email = $('#email');
            let tel = $('#tel');
            let birthday = $('#birthday');



            $("input").each(function() {
                if ($(this).val().trim() == '')
                    $(this).css('border-color', 'red');
                else
                    $(this).css('border-color', '');

            });

            if (isNotEmpty(username) && isNotEmpty(password) && isNotEmpty(fname) && isNotEmpty(lname) && isNotEmpty(birthday) && isNotEmpty(email) && isNotEmpty(tel)) {
                $.ajax({
                    url: "registered.php",
                    type: "POST",
                    dataType: "json",
                    data: {
                        username: username.val(),
                        password: password.val(),
                        fname: fname.val(),
                        lname: lname.val(),
                        email: email.val(),
                        tel: tel.val(),
                        birthday: birthday.val()
                    },
                    success: function(data) {
                        if (data.status == "sent") {
                            swal({
                                    title: "Thank you",
                                    text: "register complete",
                                    icon: "success",
                                    button: "OK"
                                })
                                .then((value) => {
                                    window.location.replace("../index.php");
                                });
                        } else {
                            swal({
                                title: "Register failed",
                                text: "please ............ chicken!!!",
                                icon: "error",
                                button: "OK"
                            });
                        }
                    },
                });
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