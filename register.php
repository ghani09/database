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
    <title>Login</title>
</head>
<body>
    <div class="container p-3 mt-4 shadow">
            <div class="row p-2">
                <div class="col-md-6 col-lg-6 p-2">
                    <img class="img-fluid" src="./img/login.png">
                </div>
                <div class="col-md-6 col-lg-6 p-2 my-auto">
                    <div class="p-4 mt-3 mb-3 shadow rounded text-center">
                        <h3><b>Register</b></h3>
                        <?php
                        if(isset($_POST['registerNow']))
                        {
                            $inputName = $_POST['inputName'];
                            $inputMobile = $_POST['inputMobile'];
                            $inputEmail = $_POST['inputEmail'];
                            $inputPassword = $_POST['inputPassword'];

                            $randomNumber = rand(100000,999999);

                            $userId = "GDA".$randomNumber."";

                            $createdDate = date('d-m-Y');

                            // connect database //CRUD //Create //Read //Update //Delete
                            $conn = mysqli_connect('localhost','root','','gda');

                            $saveData = "INSERT INTO users(user_id, user_name, user_email, user_mobile, user_password, created_date)
                            VALUES('$userId','$inputName','$inputEmail','$inputMobile','$inputPassword','$createdDate')"; 

                            $inserData = mysqli_query($conn, $saveData);

                            if(!$inserData)
                            {
                                echo '
                                   <div class="alert alert-danger" role="alert">
                                      Register Failed!
                                    </div>
                                ';
                            }
                            else
                            {
                                echo '
                                   <div class="alert alert-success" role="alert">
                                      Register Success!
                                    </div>
                                ';
                            }

                        }
                        ?>
                        <form class="mt-4" action="" method="POST">
                            <div class="form-group">
                                <input type="text" class="form-control" id="inputName" name="inputName" placeholder="Enter name">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="inputMobile" name="inputMobile" placeholder="Enter Mobile">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="inputEmail" name="inputEmail" aria-describedby="emailHelp" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="inputPassword" name="inputPassword" placeholder="Password">
                            </div>
                            <button type="submit" name="registerNow" class="btn btn-block btn-primary">Submit</button>
                        </form>
                        <div class="row mt-3 text-center">
                            <div class="col">
                                <small><b>Already have account <a href="index.php">Login here</a></b></small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</body>
</html>