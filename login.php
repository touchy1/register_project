<?php
session_start();
if(isset($_SESSION['user'])){
    header('location: index');
}
if($_SERVER['REQUEST_METHOD']==='POST'){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $con= new PDO('mysql:host=localhost;dbname=feni','root','');
    $statement=$con->prepare('select * from users where email=:email');
    $statement->execute([
        ':email'=>$email
    ]);
    $user=$statement->fetch(PDO::FETCH_OBJ);
    if($user){
        if(password_verify($password,$user->password)){
            $_SESSION['user']=$user;
            header('location: index.php');
        }else{
            echo 'your password was wrong';
        }
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
        <div class="card">
            <div class="card-header">
                <h2>Login page</h2>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="email">email</label>
                        <input type="text" name="email" id="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-info">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>