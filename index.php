<?php
session_start();
if(!isset($_SESSION['user'])){
    header('Location: login.php');
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h2>You are in Home Page</h2>
            </div>
            <div class="card-body">
                <div class="content">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque provident sint velit esse quae ipsum aperiam possimus. Hic facere omnis, alias vero ratione temporibus voluptate ad eius, pariatur, consequatur repellat!</p>
                </div>
            </div>
            <div class="card-footer">
                <p><a href="upload.php">upload page</a></p>
            </div>
            <div class="ml-5">
                <p><a href="logout.php">logout</a></p>
            </div>
        </div>
    </div>   
</body>
</html>