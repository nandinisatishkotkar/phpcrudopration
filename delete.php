
<?php
include("config/connection.php");
if(isset($_GET['deleteid'])){
$id=$_GET['deleteid'];

$sql="delete from users where id=$id";
$res=mysqli_query($conn,$sql);
if($res){
    header("Location: list.php");
}
    die(mysqli_error($conn));
}
?>

