 
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
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="styles.css">
    <script src="indexjs.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
   
</head>

<body>
    <div class="full-screen">
      
            
             <div class="container">
      
		<header class="hint-text" style="font-size:50px; font; text-decoration: none;
                    font-variant: small-caps;
                    text-transform: capitalize; color:#55136b;
      border-color: #00a5c3;
      font-family: Impact, Charcoal, sans-serif; margin-top:-12%;"><br></header>
        
                    <h2 class="header" style="margin-top:10%;">CREATE SECRETE MESSAGE</h2>
                  
<p><strong></strong> <span id="stringToEncode" class="textarea" role="textbox" contenteditable></span></p>
<br>
<div class="single">
    <h3 class="sec">ENTER SECURITY KEY</h3>
    <input id="key" class="textarea" type="text"></input>
</div>
<br>
<br>
<br>
<button type="button" onclick="myFunction()" class="btn btn-magick btn-lg btn3d">ENCRYPT</button>
<button type="button" onclick="myFunctionDecode()" class="btn btn-info btn-lg btn3d">DECRYPT</button>
<br>
<br>
<br>
<p style="font-family: Georgia, serif;
font-size: 20px;
letter-spacing: 2px;
word-spacing: 2px;
color: #FFA885;
font-weight: normal;
text-decoration: none;
font-style: normal;
font-variant: normal;
text-transform: none;" id="demo"></p>
<p><strong></strong> <span id="encodedString" class="textarea" role="textbox" contenteditable></span></p>
<br>
<p style="color:white; font-size:30px;">SEC-RITY is incomplete without you <br> Share securied message to your friend  </p>
<div class="text-center">Want to Leave the Page? <br><a href="index.php">Logout</a></div>
        </div>
      </div>

</body>
</html>

