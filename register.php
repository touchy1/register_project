<?php
session_start();
if (isset($_SESSION['user'])){
    header('Location: index.php');
}
if($_SERVER['REQUEST_METHOD']==='POST'){
    $error=[];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $password=password_hash($password,PASSWORD_BCRYPT);
    
    $con= new PDO('mysql:host=localhost;dbname=feni','root','');
    $statement=$con->prepare('insert into users(name, email, password) values(:name,:email,:password)');
    $shakil=$statement->execute([
    ':name'=> $name,
    ':email'=>$email,
    ':password'=>$password
]);
    if ($shakil){
        $_SESSION['user']=$shakil;
        header('location:index.php');
    }else{
        echo 'Try with another email';
    }
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
    <div class="container">
        <div class="card mt-5">
            <div class="card-header bg-primary">
                <h2>Register here</h2>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name"class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="name">email</label>
                        <input type="text" name="email" id="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <button type="submit">submit</button>
                    </div>
                </form>
                <div> <h6><a href="login.php">login page</a></h6></div>
            </div>
        </div>
    </div>
</body>
</html>