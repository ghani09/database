<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="./css/custom.css">
    <title>Login</title>
</head>
<body>
    <div class="container p-3 mt-4 shadow">
            <div class="row p-2">
                <div class="col-md-6 col-lg-6 p-2">
                    <img class="img-fluid gda-img" src="./img/login.png">
                </div>
                <div class="col-md-6 col-lg-6 p-2 my-auto">
                    <div class="p-4 mt-3 mb-3 shadow rounded text-center">
                        <h3><b>Login</b></h3>
                        <form class="mt-4">
                            <div class="form-group">
                                <input type="email" class="form-control" id="inputEmail" name="inputEmail" aria-describedby="emailHelp" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="inputPassword" name="inputPassword" placeholder="Password">
                            </div>
                            <button type="submit" class="btn btn-block btn-primary">Submit</button>
                        </form>
                        <div class="row mt-3 text-center">
                            <div class="col">
                                <small><b>Dont have account <a href="register.php">Register here</a></b></small>
                            </div>
                            <div class="col">
                                <small><b><a href="#">Forgot Password?</a></b></small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</body>
</html>