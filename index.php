<?php
    session_start();
    // var_dump($_SESSION['user']);
    if (!isset($_SESSION['user'])) {
        header('Location: ./login.php');
    } else {
        $user = $_SESSION['user'];
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

                    
                        <div class="alert alert-danger" role="alert">
                            <strong>hello <?php echo $user; ?></strong>
                        </div>

                        <form action="./controllers/Logout.php" method="post">
                            <button type="submit" class="btn btn-outline-danger">Logout</button>
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