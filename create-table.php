<?php
$con=new PDO('mysql:host=localhost;dbname=feni','root','');
$statement1=$con->prepare('drop table if exists users');
$statement=$con->prepare("
    create table users(
        id serial,
        name varchar(30),
        email varchar(30) unique,
        password varchar(225)
    )

");
$statement1->execute();
$statement->execute();
?>