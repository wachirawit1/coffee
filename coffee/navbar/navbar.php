<!-- navbar -->
<nav class="navbar navbar-expand-sm navbar-dark bg-dark sticky-top p-0 shadow">
    <a class="navbar-brand mx-5" href="#"><img src="../coffee/assets/logo/logo.png" alt="" width="100"></a>

    <div class="container">

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="navbar-nav me-auto">
                <li class="nav-link mx-1">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-link mx-1">
                    <a class="nav-link" href="">Market</a>
                </li>
                <li class="nav-link mx-1">
                    <a class="nav-link" href="">About</a>
                </li>
                <li class="nav-link mx-1">
                    <a class="nav-link" href="">Contact Us</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item mx-1">
                    <button class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#login_form">login</button>
                </li>
                <li class="nav-item mx-1">
                    <form action="../../coffee/register/register.php">
                        <button type="submit" class="btn btn-primary">register</button>
                    </form>
                </li>
            </ul>

        </div>
    </div>
</nav>

<!-- login Modal -->
<div class="modal fade" id="login_form" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="alert alert-danger" role="alert" style="font-size: 12px;display: none;">
                        Your Password is wrong , please try again .
                    </div>
                    <div class="mb-1">
                        <label for="exampleInputEmail1" class="form-label">Username</label>
                        <input type="text" name="username" id="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-1">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" name="password" id="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="my-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Remember Password</label>
                    </div>

                    <div class="d-grid gap-2 mb-1 mx-auto">
                        <button class="btn btn-primary" type="button" onclick="login()">Login</button>
                    </div>

                    <div class="mb-1">
                        <a href="" class="text-dark text-decoration-none"><small>Forgot Password</small></a>
                    </div>
                    <div class="row my-2">
                        <div class="col">
                            <hr>
                        </div>
                        <div class="col col-1 text-center">
                            <small class="text-muted">Or</small>
                        </div>
                        <div class="col">
                            <hr>
                        </div>
                    </div>
                    <div class="d-grid gap-2 mb-1 mx-auto">
                        <button class="btn btn-primary" type="button">Login with Facebook</button>
                    </div>
                    <div class="d-grid gap-2 mb-1 mx-auto">
                        <button class="btn btn-danger" type="button">Login with Google</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>