<?php
session_start();



if(empty($_POST['username'])){
    $username = null;
}
if(empty($_POST['password'])){
    $password = null;
}

if(isset($_POST['username'])){
    $username = $_POST['username'];
}

if(isset($_POST['password'])){ 
    $password = $_POST['password'];
}

if(isset($_POST['loginBtn'])){
    if($username === $creds['user'] && $password === $creds['passwd']){ 
            header('location: ./p6/biasmaps/index.php');
    }else{
        header('location: ./index.php');
    }
    

}



