<?php
/*
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['userpassword'];
    session_start();
    $_SESSION['username'] = $username;
    $_SESSION['userpassword'] = $password;

    // username
    if(empty($username)){
        $username_error = "please enter your name";
    }elseif(!preg_match("/^[a-zA-Z]*$/", $username)) {
        $username_error = "Only letter and white space allowed";
    }

    // password
    if(empty($password)){
        $password_error = "Please enter password";
    }

}
*/
if ($_SERVER['REQUEST_METHOD'] == "post") {

if(empty($_POST['username'])){
    $username_error = "please enter your name";
}

if(empty($_POST['userpassword'])){
    $userpassword_error = "please enter your password";
}

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form_Validation</title>
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md"></div>
            <div class="col-md shadow-lg p-5">
                <h4 class="text-center mt-5">Form Validation</h4>
                <form action="" method="post">
                    <!-- Form-Name -->
                    <div class="form-group mb-3">
                        <label for="name" class="form-label">Name:</label>
                        <input type="text" name="username" class="form-control">
                        <span><?php if(isset($username_error)) echo $username_error; ?></span>
                    </div>

                    <!-- Form-pasword -->
                    <div class="form-group mb-3">
                        <label for="password" class="form-label">password:</label>
                        <input type="password" name="userpassword" class="form-control">
                        <span><?php if(isset($userpassword_error)) echo $userpassword_error; ?></span>
                    </div>
                    <!-- button -->
                    <div class="mb-2"><button type="submit" name="submit" class="form-control btn btn-primary">Submit</button></div>
                    <div class="text-center"><a href="#" class="text-decoration-none">Forgotten password</a></div>
                </form>
            </div>
            <div class="col-md"></div>
        </div>
    </div>
</body>
</html>