<?php
include ('connect1.php');

if(isset($_POST['submit'])){
$User =$_POST['User'];
$Rname =$_POST['Rname'];
$Number =$_POST['Number'];
$Email =$_POST['Email'];
$Age =$_POST['Age'];
$Lang =$_POST['Lang'];
$Gender =$_POST['Gender'];   
$Images =$_POST['Images'];             
$Password =md5($_POST['Password']);
$Confirm =md5($_POST['Confirm']);


$sql = "INSERT INTO registration(user,Rname,number,email,age,lang,gender,images,password,confirm)
VALUES ('$User','$Rname','$Number','$Email','$Age','$Lang','$Gender','$Images','$Password','$Confirm')";

if($conn->query($sql) == TRUE) {
    echo "Registered Successfully Please Login!";
}else{

    echo "Error: " . $sql . "<br>" . $conn->error;
}

}
$conn->close();

?> 