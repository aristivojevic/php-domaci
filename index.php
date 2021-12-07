<?php
require "dbBroker.php";
require "model/user.php";

session_start();
if(isset($_POST['username']) && isset($_POST['password'])){
    $uname = $_POST['username'];
    $upass = $_POST['password'];

    $user = new User(null, $uname, $upass);
    $response = User::logInUser($user, $conn);

    if($response->num_rows==1){
        $_SESSION['user_id'] = $response->fetch_array()['id'];
        header('Location: planerko.php');
        exit();
    }else{
        echo `
        <script>
        alert("Niste se prijavili!");
        </script>
        `;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Planerko - LogIn</title>
</head>
<body>
</body>
</html>