<?php
session_start();
if (isset($_SESSION['user'])) {
    header('Location: ./index.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <!-- bootstrap plugins -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <title>Document</title>
</head>
<body>
    

    <section class="gradient-form" style="background-color: #eee; height: 100vh;">
        <div class="container py-5 pt-5      ">
            <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-xl-4">
                <div class="card rounded-3 text-black">
                <div class="row g-0 ">
                    <div class="col-lg-12">
                    <div class="card-body p-md-3 mx-md-2">
                    <form action="./controllers/Register.php" method="post">
                        <p>Please login to your account</p>

                        <div class="form-outline mb-4">
                            <input type="text" name="username" id="form2Example11" class="form-control"
                            placeholder="Username or Email address" />
                            <label class="form-label" for="form2Example11">Username</label>
                        </div>

                        <div class="form-outline mb-4">
                            <input type="password" name="password" id="form2Example22" placeholder="Password" class="form-control" />
                            <label class="form-label" for="form2Example22">Password</label>
                        </div>

                        <div class="form-outline mb-4">
                            <input type="password" name="password_confirmation" id="form2Example22" placeholder="Password" class="form-control" />
                            <label class="form-label" for="form2Example22">Password confirmation</label>
                        </div>

                        <div class="text-center d-flex align-items-center justify-content-center flex-column pt-1 mb-5 pb-1">
                            <button type="submit" class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="button">Log
                            in</button>

                        </div>

                        <div class="d-flex align-items-center justify-content-center pb-4">
                            <p class="mb-0 me-2">Don't have an account?</p>
                            <a type="button" class="btn btn-outline-danger" href="./register.php">Create new</a>
                        </div>

                        </form>
                    </div>
                    </div>
                    
                </div>
                </div>
            </div>
            </div>
        </div>
    </section>
    <!-- bootstrap script pluging -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>