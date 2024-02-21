<?php

error_reporting(0);

session_start();

$host="localhost";
$user="root";
$password="";

$dbName="KCB_LMS";

$dbData=mysqli_connect($host,$user,$password,$dbName);

if($dbData===false){
    die("connection error");

}
if($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST['login']){
    $mail=$_POST['Email'];
    $pass=$_POST['password'];
    

    $sql="select * from user where Email='".$mail."' AND password='".$pass." '";

    $result=mysqli_query($dbData,$sql);

    $row=mysqli_fetch_array($result);

    if($row["usertype"]=="customer"){

        $_SESSION['Email']=$mail;
        header("Location:customerHome.php");
    }

    elseif($row["usertype"]=="LoanManager"){
        header("Location:LoanManagerHome.php");
    }
    else{

        
        $mess="email or password do not match";
        $_SESSION['loginMessage']=$mess;
        header("Location:login.php");
    }
}

?>