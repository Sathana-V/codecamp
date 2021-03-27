<?php 
 include 'database.php';
 session_start();
 $ID= $_SESSION["ID"];
 $sql=mysqli_query($conn,"SELECT * FROM register where ID='$ID' ");
 $row  = mysqli_fetch_array($sql);
 $email=$row['Email'];
    // initialize errors variable
	$errors = "";

// insert a quote if submit button is clicked
	if (isset($_POST['submit'])) {
		if (empty($_POST['task'])||empty($_POST['password'])) {
			$errors = "You must fill in the task";
		}else{
			$task = $_POST['task'];
            $pass = $_POST['password'];
			$pass=base64_encode($pass);
			$sql = "INSERT INTO task (task,password,email) VALUES ('$task','$pass','$email')";
			mysqli_query($conn, $sql);
			header('location: password.php');
		}
	}	
	if (isset($_GET['del_task'])) {
		$id = $_GET['del_task'];
	
		mysqli_query($conn, "DELETE FROM task WHERE id=".$id);
		header('location: password.php');
	}
	
    ?>