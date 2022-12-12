<?php 
    session_start();
    require_once "../models/userModel.php";

    $id = $_POST['id'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $type = $_POST['type'];


    if($id == "" || $password == "") {
        header('location:../views/register.html');
    }else{
        $user = ['id'=> $id, 'password'=>$password, 'name'=> $name,'email'=>$email,'type'=>$type];
        $status = insertUser($user);
       
        if($status){
            header('location:../views/login.html');
        }
        else{
            echo "Database error...";
      }
    }
?>