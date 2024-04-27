<?php include 'header.php'?>
<?php include 'config.php'?>
<div class="content">
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Candidate Name</th>
      <th scope="col">Email</th>
      <th scope="col">Position</th>
      <th scope="col">Qualification</th>
      <th scope="col">Year of Passout</th>
      <th scope="col">Resume</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $sql="SELECT `name`, `email`, `apply`, `qual`, `year`, `resume` FROM `candidates`";
    $result=mysqli_query($conn,$sql);
    $i=0;
    if($result->num_rows>0){
        while($rows=$result->fetch_assoc()){
            echo'
    <tr>
      <th scope="row">'.++$i.'</th>
      <td>'.$rows['name'].'</td>
      <td>'.$rows['email'].'</td>
      <td>'.$rows['apply'].'</td>
      <td>'.$rows['qual'].'</td>
      <td>'.$rows['year'].'</td>
      <td>'.$rows['resume'].'</td>
    </tr>';}}
    else{
        echo"";
    }
    ?>
  </tbody>
</table>
</div>