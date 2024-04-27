<!DOCTYPE html>
<html lang="en">
<?php include 'config.php'?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body{
            background-image: url('assets/image1.jpg');
            background-size:cover;
        }
        form{
            background-color: #fff;
            margin-top: 5em;
            margin-left: 35em;
            margin-right: 5em;
            padding: 30px;
            box-shadow: 5px 5px 3px 5px #888888;
        }
    </style>
    <title>Register</title>
</head>
<body>
    <div class="container">
    <form method="POST">
      <div class="mb-3">
          <label for="exampleInputName" class="form-label">Full Name</label>
          <input type="text" class="form-control" id="exampleInputName" name="name" Required>
      </div>     
      <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" Required>
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
      </div>
      <div class="mb-3">
          <label for="exampleInputNumber" class="form-label">Phone Number</label>
          <input type="number" class="form-control" id="exampleInputNumber" name="phone_no" Required>
      </div>  
          <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" name="password" Required>
      </div>
          <div class="mb-3">
          <label for="exampleInputPassword2" class="form-label">Confirm Password</label>
          <input type="password" class="form-control" id="exampleInputPassword2" name="cpassword" Required>
      </div>
      <h1 id="msg"></h1>
      <button type="submit" class="btn btn-primary" name="register">Register</button>
      <br><br>
        Already Registered? <a href="Login.php">Login</a>
    </form>
    </div>
</body>
</html>