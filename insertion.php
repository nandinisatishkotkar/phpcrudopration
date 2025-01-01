<?php
include("config/connection.php");

$id=$_GET['uid'];
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $id=$_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    if($id>0){
      echo $sql="update users set id=$id, name=' $name', email='$email', address='$address' where id='".$id."'";
      $res=mysqli_query($conn,$sql);
      if ($res) {
        header("Location: list.php");
        } 
    }
    else{

    $sql1 = "INSERT INTO users (name,email,address) VALUES ('$name', '$email', '$address')";
  if ($conn->query($sql1) === TRUE) {
    header("Location: thankyou.php");
    } else {
        header("Location:nand.php");
    }


}
}
?>