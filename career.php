<!DOCTYPE html>
<html lang="en">
<?php include 'config.php'?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <style>
  h1,
  p {
    color: #fff;
  }
  .jobs{
    border: 1px solid black;
    box-shadow: 5px 5px 4px 5px grey;
    margin-top: 70px;
    margin: 10px;
    padding: 10px;
  }  
 </style>
    <title>Career</title>
</head>
<body>
        <!--<nav class="navbar navbar-expand-lg navbar-light bg-light" style="position: fixed;">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                  <a class="nav-link active" aria-current="page" href="#">Home</a>
                  <a class="nav-link" href="#">Features</a>
                  <a class="nav-link" href="#">Pricing</a>
                  <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </div>
              </div>
            </div>
        </nav><br><br>-->
    <div class="row">
       <div class="col-12">
          <div class="jumbotron jumbotron-fluid" style="background-image: url('assets/image2.jpg'); background-size:cover;">
              <div class="container">
                  <h1 class="display-4">Job Portal</h1>
                  <p class="lead">Best Jobs Available Here!!!</p>
              </div>
          </div>
       </div>
    </div>
    <div class="row">
      <?php
        $sql="SELECT `cname`, `position`, `Jdesc`, `skills`, `CTC` FROM `jobs`";
        $result=mysqli_query($conn,$sql);
        if($result->num_rows>0){
            while($rows=$result->fetch_assoc()){
              echo'
                <div class="col-md-4">
                <div class="jobs">
                <h3 style="text-align: center;">'.$rows['position'].'</h3>
                <h4 style="text-align: center;">'.$rows['cname'].'</h4>
                <p style="color: black; text-align:justify;">'.$rows['Jdesc'].'</p>
                <p style="color: black;"><b>Skills Required : </b>'.$rows['skills'].'</p>
                <p style="color: black;"><b>CTC : </b>'.$rows['CTC'].'</p>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">
                Apply Now
                </button>
                </div>
                </div>';
            
              }
          }
      ?>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title fs-5" id="exampleModalLabel">Fill the Application</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <form method="POST" enctype="multipart/form-data">
                          <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Name</label>
                            <input type="text" class="form-control" name="name" Required>
                          </div>
                          <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Email</label>
                            <input type="email" class="form-control" name="email" Required>
                          </div>
                          <div class="mb-3">
                            <label for="message-text" class="col-form-label">Applying For</label>
                            <input type="text" class="form-control" name="apply" Required>
                          </div>
                          <div class="mb-3">
                            <label for="message-text" class="col-form-label">Qualification</label>
                            <input type="text" class="form-control" name="qual" Required>
                          </div>
                          <div class="mb-3">
                            <label for="message-text" class="col-form-label">Year of Passout</label>
                            <input type="text" class="form-control" name="year" Required>
                          </div>
                          <div class="mb-3">
                            <label for="message-text" class="col-form-label">Upload Your Resume</label>
                            <input type="file" class="form-control" name="resume" Required>
                          </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" name="fill">Apply</button>
                      </form>
                    </div>
                </div>
              </div>
          </div>
      </div>
</body>
</html>