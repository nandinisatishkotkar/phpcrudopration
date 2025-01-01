<?php
include("config/connection.php");
$id=$_GET['uid'];


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];

    $sql="update users set id=$id, name=$name, address=$address
    where id=$id";
    $res=mysqli_query($conn,$sql);
    
    if($res){
        header("Location: nand.php");
    }else{
        die(mysqli_error($conn));
    }
}

?>