<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
<title>SEC-CURE</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="assests/css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="styles.css">
    <script src="indexjs.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
   
</head>
<style>
    .btn-info
    {
        width:20%;
        height:50%;
    }
    </style>
<script>

</script>
<body>
   
           <div class="full-screen">
               <div class="container">
                
			 <?php
				session_start();
				include 'database.php';
				$ID= $_SESSION["ID"];
				$sql=mysqli_query($conn,"SELECT * FROM register where ID='$ID' ");
				$row  = mysqli_fetch_array($sql);
            ?>
            
      
		<header class="hint-text" style="font-size:50px; font; text-decoration: none;
                    font-variant: small-caps;
                    text-transform: capitalize; color:#55136b;
      border-color: #00a5c3;
      font-family: Impact, Charcoal, sans-serif; margin-top:-12%;"><br><b>Welcome </b><?php echo $_SESSION["First_Name"] ?> <?php echo $_SESSION["Last_Name"] ?></header>
        
       
		
	<form method="post" action="passwordinsert.php" class="input_form">
		<div class="same"><h5 class="heads">Account Name</h5><input type="text"  name="task" class="textarea"><div>
        <div class="same"><h5 class="heads">Password</h5><input type="text" name="password" class="textarea"><div>
		<button type="submit" name="submit" id="add_btn" class="btn btn-magick btn-lg btn3d">Add Account</button>
	</form>
    
   <br>
   <br>
 
   <br>
    <table class="table">
  <thead class="thead-dark">
		<tr>
			<th scope="col">NO</th>
			<th scope="col">Tasks</th>
			<th scope="col">PASSWORD</th>
            <th scope="col">Delete</th>
		</tr>
	</thead>

	<tbody>
		<?php 
       	include 'database.php';
           $email= $_SESSION["Email"];
           $tasks=mysqli_query($conn,"SELECT * FROM task where email='$email' ");
          
		$i = 1; while ($row = mysqli_fetch_array($tasks)) { ?>
			<tr>
				<th scope="row"> <?php echo $i; ?> </th>
				<td scope="row"> <?php echo $row['task']; ?> </td>
                <td scope="row"> <?php $str=base64_decode($row['password']); echo($str); ?> </td>
				<td> 
					<a href="passwordinsert.php?del_task=<?php echo $row['id'] ?>"><i class="fa fa-close" style="font-size:30px; color:black;"></i>
</a> 
				</td>
			</tr>
		<?php $i++; } ?>	
	</tbody>
</table>
<div class="text-center">Want to Leave the Page? <br><a href="index.php">Logout</a></div>
        
        </div>
        </div>
</body>
</html>

