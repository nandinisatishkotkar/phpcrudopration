<?php
include("config/connection.php");

if ($_SERVER["REQUEST_METHOD"]=="POST")
{
    $uname=$_POST['uname'];
    $password=$_POST['password'];
   $sql="select * from admin where uname='".$uname."' AND password='".$password."'";
   $res=mysqli_query($conn,$sql);
    $row=mysqli_num_rows($res);

    if($row>0)
    {
       $data=$res->fetch_assoc();
       $id=$data['id'];
       $_SESSION['user_id']=$id;
       echo"<script>window.location.href='list.php'</script>";
    }else{
       echo"<script>window.location.href='admin.php'</script>";
}



}

?>











?>