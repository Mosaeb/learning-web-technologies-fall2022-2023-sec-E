<?php 

    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST ['email'];

    if($username == "" || $password == ""|| $email == "") {
        echo "invalid User";
    }else if($username == "admin" && $password=="abc"){
        echo "Welcome Home";
    }else{
        echo "invalid user";
    }
?>