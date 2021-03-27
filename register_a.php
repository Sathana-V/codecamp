<?php
$email=$_POST['email'];
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$pass=$_POST['pass'];
include("database.php");
$sql=mysqli_query($conn,"SELECT * FROM register where Email='$email'");
if(mysqli_num_rows($sql)>0)
{
    echo "Email Id Already Exists"; 
	exit;
}
else if(isset($_POST['save']))
{        
        $ppass=base64_encode($pass);
        $query  = " INSERT INTO register (First_Name, Last_Name, Email, Password ) VALUES ('$first_name', '$last_name', '$email', '$ppass')";
        $sql=mysqli_query($conn,$query)or die("Could Not Perform the Query");
        header ("Location: index.php?status=success");
   
    
}

?>