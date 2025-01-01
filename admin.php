
<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin Form</title>
 <link href="css/bootstrap.css"rel="stylesheet">
 <body>

  <div class="container mt-5 ">
    <div class="row">
    <div class="col-6 offset-3">
    <div class="card text-white bg-dark mb-3">
   <div class="card-body">
    <form method="POST" action="session.php">
    <h3 style="text-align:center;">Admin Login</h3><br>
    <div class="mb-3">
    <label for="user" class="form-label">User Name</label>
    <input type="text" class="form-control" id="uname" placeholder="Enter Admin User Name" name="uname">
  </div>
  <div class="mb-3">
    <label for="Password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" placeholder="Enter valid Password" name="password"><br>
  </div>
  <div class="row justify-content-center">
    <div class="col-6 offset-3">
  <button type="submit" class="btn btn-warning" id="login" name="login">Login</button>
   </div>
  </div>
  </form>
      </div>
     </div>
    </div>
  </div>
 </div> 
</div>
</body>
</html>

