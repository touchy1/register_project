<?php
session_start();
if(!isset($_SESSION['user'])){
    header('location: login.php');
}


if($_SERVER['REQUEST_METHOD']==='POST'){
    $file= $_FILES['file'];
    $name=time(). md5('hello'). $file['name'];
    $tmp_name= $file['tmp_name'];
    move_uploaded_file($tmp_name,"hello/$name");
}


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <input type="file" name="file" class="form-control">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-outline-primary">Upload image</button>
            </div>
        </form>
    </div>
</body>
</html>