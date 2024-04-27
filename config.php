<?php
$conn = mysqli_connect("localhost","root","","jobs");

if($conn->connect_error){
    die("Connection failed:" .$conn->connect_error);

}
echo"";

if(isset($_POST['register'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $number=$_POST['phone_no'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];

    $sql1 = "INSERT INTO `users`(`name`, `email`, `password`, `phone_no`) VALUES ('$name','$email','$password','$number')";
    if($password==$cpassword){
        if(mysqli_query($conn, $sql1)){
            header("location:login.php");
        }else{
            echo "ERROR!";
        }
    }
    else {
        echo "<script>alert('Registration Failed,Please Verify the Details!')</script>";
    }
}

session_start();
if(isset($_POST['Login'])){
    $email1=$_POST['email'];
    $password1=$_POST['password'];

    $query="SELECT * FROM `users` WHERE `email`='$email1' and `password`='$password1'";
    $result=mysqli_query($conn,$query);
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    if(mysqli_num_rows($result)==1){
         header("location:identity.php");
    }
    else{
        echo "<script>alert('emailid or password is incorrect')</script>";
    }
}


if(isset($_POST['submit'])){
    $cname=$_POST['cname'];
    $pos=$_POST['pos'];
    $Jdesc=$_POST['Jdesc'];
    $skills=$_POST['skills'];
    $CTC=$_POST['CTC'];

    $sql2= "INSERT INTO `jobs`(`cname`, `position`, `Jdesc`, `skills`, `CTC`) VALUES ('$cname','$pos','$Jdesc','$skills','$CTC')";
    if(mysqli_query($conn,$sql2)){
        echo "New Job Posted";
    }
    else{
        echo "Failed to Post the Job  $sql2. " . mysqli_error($conn);
    }
}
if(isset($_POST['fill'])){
    $name1=$_POST['name'];
    $email2=$_POST['email'];
    $apply=$_POST['apply'];
    $qual=$_POST['qual'];
    $year=$_POST['year'];
    $resume=$_FILES["resume"]["name"];
    
    $target = "uploads/".basename($resume);
    move_uploaded_file($_FILES["resume"]["tmp_name"],$target);

    $sql3="INSERT INTO `candidates`(`name`, `email`, `apply`, `qual`, `year`, `resume`) VALUES ('$name1','$email2','$apply','$qual','$year','$resume')";
    if(mysqli_query($conn,$sql3)){
        echo "<script>alert('Application Sent Successfully!')</script>";
    }
    else{
        echo "<script>alert('Application Failed!')</script>";
    }
}
?>