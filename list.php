<?php
include("config/connection.php");

if(!$_SESSION['user_id']){
echo"<script>window.location.href='admin.php'</script>";
  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Oprations</title>
    <link href="css/bootstrap.css"rel="stylesheet">
   
   
    <div class="container">
    <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">S.N</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>

    </tr>
  </thead>
  <tbody>
    <?php
        $sql="Select *from users";
        $res=mysqli_query($conn,$sql);       
        
        if($res)
        {
            foreach($res as $data){
              $id=$data['id'];
        

?>
<tr>
    <td> <?php echo $data['id']  ?> </td>
    <td> <?php echo $data['name']  ?> </td>
     <td> <?php echo $data['email'] ?> </td>
     <td> <?php  echo $data['address']?> </td>
     <td><a href="nand.php?uid=<?php echo $id?>" >Edit</a></td>
    <td><a href="delete.php?deleteid=<?php echo $id?>" >Delete</a></td>
            
<?php }
    
}
?>

</tbody>
</table>
    <button type="button" class="btn btn-secondary"><a href="nand.php">Add User</a></button>
    <button type="button" class="btn btn-secondary"><a href="logout.php">logout</a></button>
 </div>
</html>
