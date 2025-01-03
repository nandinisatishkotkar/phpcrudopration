<?php
include("config/connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="css/bootstrap.css"rel="stylesheet">
    <link href="css/custom.css"rel="stylesheet">
<script>
  function validate(){
var name=document.getElementById('name').value;
var email=document.getElementById('email').value;
var address= document.getElementById('address').value;
var msg="";

if(name===""){
  msg+="Please Enter your name";
}
if(email && !/\S+@\S+\.\S+/.test(email))
{
  msg+="<br>Enter a valid email"
}
if(address.length>=250)
{
   msg+="<br>Maximun size is 250"
}
if(msg)
{
  document.getElementById("errmsg").style.display="block"
  document.getElementById("errmsg").innerHTML=msg;
  return false;
}
else{
  document.getElementById("errmsg").style.display="none"
  return true;
}
}
///HI this 
</script>
</head>
<body>
  <?php

  $id="";
  $name="";
  $email="";
  $address="";
  if(isset ($_GET['uid'])){
  $id=$_GET['uid'];
  $sql="select * from users where id='".$id."'";
  $res=mysqli_query($conn,$sql);
  $row = $res->fetch_assoc();
 
    $id= $row['id'];
    $name = $row['name'];
    $email = $row['email'];
    $address = $row['address'];

  }
?>
    <div class="container">
        <div class="row mt-3">
          <div class="col-6">
            <div class="row">
                <div class="col-6">
                  <!---- <div class="p-1 border bg-dark">-->
                    <div class="card p-3 ">
                      <i class="fa-solid fa-location-crosshairs text-warning text-center fa-3x"></i>
                      <div class="card-body">
                        <h5 class="header">Our main office</h5>
                        <p style="color: white;text-align: center;">SoHo 94 Broadway St New york,NY 1001.</p>
                     </div>
                    </div>
               </div> <!--col-->

                 <div class="col-6">
                    <div class="card  p-3 card2">
                      <i class="fa-solid fa-phone text-warning text-center fa-3x"></i>
                      <div class="card-body">
                        <h5 class="header">Contact Us</h5>
                        <p style="color:white;text-align: center;">23-2456789,
                          3-1234567(Tollfree).</p>
                      </div>
                      </div>
                 </div> <!--col2-->
            </div><!--row2-->        
          
  <div class="row">
              <div class="col-6">
                  <div class="card p-0.5 card3">
                    <i class="fa-solid fa-fax text-center text-warning fa-3x"></i>
                    <div class="card-body ">
                      <h5 class="header">FAX</h5>
                      <p style="color: white;text-align: center;">1-234567800.</p>
                  </div>
                </div>
             </div> <!--col3-->
              <div class="col-6 p-3">
                  <div class="card card3">
                    <i class="fa-regular fa-envelope text-center text-warning fa-3x"></i>
                    <div class="card-body email">
                      <h5 class="header">Email</h5>
                      <a href="#">hello@theme.com</a>
                    </div>
                   </div>
      
          </div><!---col4--->
        </div>
        </div><!--main column-->
        
       <div class="col-6 mt-5 mb-5">
    
        <div class="row">
          <div class="col-10 offset-1 bg-white">
        
        <h3 style="text-align: center;">Contact Us</h3>
        <div class="alert alert-danger" id="errmsg" role="alert" style="display:none;">
          </div>
        <div class="col ">
          <form onsubmit="return validate()" method="POST" action="insertion.php">
          <label for="name" class="form-label"></label>
          <input type="name" class="form-control "name="name" placeholder="Enter Your name*" id="name" value=<?php echo $name ?>>
        </div>
        <div class="mb-3">
          <label for="email" class="form-label"></label>
          <input type="text" class="form-control" name="email" id="email" placeholder="Enter Your valid email"value=<?php echo $email ?>>
        </div>
        <div class="mb-3">
          <label for="Address" class="form-label"></label>
          <textarea class="form-control" name="address" id="address"  rows="3"><?php echo $address ?></textarea>
        </div>
        <div class="d-grid gap-2 pb-5">
          <input type='hidden' name='id' value=<?php echo $id?>>
          <button class="btn btn-warning" type="submit">sumbit</button>
          </div>
        </form>
        </div>
        
        </div>
    
       </div><!--col2-1-->
    </div>
    <div class="row bg-dark py-2">
      
      <div class="col">
<p style="color: white;text-align:center;">Sample text.Click select to the Text Element</p>



        </div><!--col-->
    </div><!--rowf-->
  </div><!--container-->

</body>
</html>