<?php
$connection = mysqli_connect('localhost', 'root');
if($connection){
    echo " connection successful";
}else{
    echo "connection failed";
}

mysqli_select_db($connection, 'form_submission');
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$gender = $_POST['gender'];

$query = "INSERT INTO users_data (name, gender, email, password) VALUES ('$name', '$gender', '$email', '$password')";
mysqli_query($connection, $query);
header('location: form_submission.php');

?>