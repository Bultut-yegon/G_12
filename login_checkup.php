<?php

error_reporting(0);
$host="localhost";
$user="root";
$password="";

$dbName="KCB_LMS";

$dbData=mysqli_connect($host,$user,$password,$dbName);

if($dbData===false){
    die("connection error");

}
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $mail=$_POST['email'];
    $pass=$_POST['password'];
    $name=$_POST['idNumber'];

    $sql="select * from Users where email='".$mail."' AND password='".$pass." '";

    $result=mysqli_query($dbData,$sql);

    $row=mysqli_fetch_array($result);

    if($row["usertype"]==["customer"]){
        header("Location:customerHome.php");
    }

    elseif($row["usertype"]==["LoanManager"]){
        header("Location:LoanManagerHome.php");
    }
    else{
        echo "email or password do not match";
    }
}

?>