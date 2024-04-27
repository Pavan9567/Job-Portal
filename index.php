<?php include 'header.php'?>
<?php include 'config.php'?>
<!-- Page content -->
<div class="content">
<p>
 <!-- <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
    Link with href
  </a> -->
  <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
    Post Job
  </button>
</p>
<div class="collapse" id="collapseExample">
  <div class="card card-body">
  <form action="" method="POST">
    <div class="mb-3">
        <label for="Company Name" class="form-label">Company Name</label>
        <input type="text" class="form-control" id="" name="cname">
    </div>
    <div class="mb-3">
        <label for="exampleInputPosition" class="form-label">Position</label>
        <input type="text" class="form-control" id="exampleInputPosition" name="pos">
    </div>
    <div class="mb-3">
        <label for="JobDesc" class="form-label">Job Description</label>
        <textarea id="Jdesc" cols="30" rows="10" class="form-control" name="Jdesc"></textarea>
    </div>
    <div class="mb-3">
        <label for="skills" class="form-label">Skills Required</label>
        <input type="text" class="form-control" id="skills" name="skills">
    </div>
    <div class="mb-3">
        <label for="CTC" class="form-label">CTC</label>
        <input type="text" class="form-control" id="CTC" name="CTC">
    </div>
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
  </form>
 </div>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Company Name</th>
      <th scope="col">Position</th>
      <th scope="col">CTC</th>
    </tr>
  </thead>
   <?php
      $sql="SELECT `cname`, `position`, `CTC` FROM `jobs`";
      $result= mysqli_query($conn,$sql);
      $i=0;
      if($result->num_rows>0){
        while($rows=$result->fetch_assoc()){
      echo"
      <tbody>
        <tr>
            <td>".++$i."</td>
            <td>".$rows['cname']."</td>
            <td>".$rows['position']."</td>
            <td>".$rows['CTC']."</td>
        </tr>";    
    }}
    else{
        echo"";
    }?>        
  </tbody>
</table>
</div>
</body>
</html>