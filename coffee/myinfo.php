<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Coffee</title>
    <?php
    include('navbar/navbar_user.php');
    ?>
    <style>
        label {
            cursor: pointer;
            /* Style as you please, it will become the visible UI component. */
        }

        #upload-photo {
            opacity: 0;
            position: absolute;
            z-index: -1;
        }
    </style>
</head>

<body>
    <div class="container">

        <div class="row justify-content-center p-3 my-3 gx-5">
            <div class="col-3">
                <div class="list-group" id="list-tab" role="tablist">
                    <a class="list-group-item list-group-item-action border-0 active" id="list-home-list" data-bs-toggle="list" href="#list-home" role="tab" aria-controls="list-home">My info</a>
                    <a class="list-group-item list-group-item-action border-0" id="list-profile-list" data-bs-toggle="list" href="#list-profile" role="tab" aria-controls="list-profile">Change password</a>
                    <a class="list-group-item list-group-item-action border-0" id="list-messages-list" data-bs-toggle="list" href="#list-messages" role="tab" aria-controls="list-messages">My shoping</a>
                    <a class="list-group-item list-group-item-action border-0" id="list-settings-list" data-bs-toggle="list" href="#list-settings" role="tab" aria-controls="list-settings">Settings</a>
                </div>
            </div>

            <div class="col p-3 bg-light">
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                        <h5>My info</h5>
                        <small>manage your info</small>

                        <hr>

                        <div class="row">
                            <div class="col-8">
                                <div class="row mb-3">
                                    <div class="col col-sm-2">
                                        <label class="col-form-label">Username</label>
                                    </div>
                                    <div class="col col-sm-8">
                                        <input type="text" id="inputUsername" class="form-control" readonly value="Username">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col col-sm-2">
                                        <label class="col-form-label">Name</label>
                                    </div>
                                    <div class="col col-sm-4">
                                        <input type="text" id="" class="form-control" placeholder="Firstname" value="">
                                    </div>

                                    <div class="col col-sm-4">
                                        <input type="text" id="" class="form-control" placeholder="Lastname" value="">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col col-sm-2">
                                        <label class="col-form-label">Email</label>
                                    </div>
                                    <div class="col col-sm-8">
                                        <input type="email" id="" class="form-control" value="">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col col-sm-2">
                                        <label class="col-form-label">Tel</label>
                                    </div>
                                    <div class="col col-sm-8">
                                        <input type="text" id="" class="form-control" value="">
                                    </div>
                                </div>
                            </div>


                            <div class="col-4 ">
                                <div class="row text-center">
                                    <div class="col border-start">
                                        <img src="https://www.eng.chula.ac.th/wp-content/uploads/2016/11/profile-pic.jpeg" class="rounded-circle" alt="" width="148">
                                        <div class="row">
                                            <div class="col gy-3">
                                                <label class="btn btn-secondary" for="upload-photo">Add picture</label>
                                                <input type="file" name="photo" id="upload-photo" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                        <h5>Change Password</h5>
                        <small>Please don't open your password</small>
                        <hr>
                        <div class="">
                            <div class="row mb-3">
                                <div class="col col-sm-2">
                                    Old password
                                </div>
                                <div class="col col-sm-4">
                                    <input type="password" id="" class="form-control" value="">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col col-sm-2">
                                    New password
                                </div>
                                <div class="col col-sm-4">
                                    <input type="text" id="" class="form-control" value="">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col col-sm-2">
                                    Verify password
                                </div>
                                <div class="col col-sm-4">
                                    <input type="text" id="" class="form-control" value="">
                                </div>

                            </div>
                            <div class="row mb-3">
                                <div class="col col-sm-2">
                                    
                                </div>
                                <div class="col col-sm-4">
                                    <button class="btn btn-success">บันทึก</button>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">...</div>
                    <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">...</div>
                </div>
            </div>
        </div>

    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>