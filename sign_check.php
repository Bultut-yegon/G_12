<?php
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['register'])){
    $con= mysqli_connect('localhost','root','','KCB_LMS') or die("Couldn't connect:" .mysqli_connect_error());
    if(isset($_POST['name']) && isset($_POST['phone']) && isset($_POST['idNumber'])isset($_POST['county']) && isset($_POST['dob']) && isset($_POST['street']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['con-password'])){
        $name=$_POST['name'];
        $phone=$_POST['phone'];
        $idNumber=$_POST['idNumber'];
        $county=$_POST['county'];
        $dob=$_POST['dob'];
        $street=$_POST['street'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $con_password=$_POST['con-password'];

        $sql= "INSERT INTO `KCB` (`name`, `phone`,`idNumber`,`county`,`dob`,`street`,`email`,`password`,`con-password`) VALUES ('$name','$phone','$idNumber','$county','$dob','$street','$email','$password','$con_password')";
        $query=mysqli_query($con,$sql);
        if($query){
            echo "Added successfully";
        }
        else{
            echo "Error occurred";
        }
        

}
}


?>