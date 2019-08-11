<!DOCTYPE html>
	<html>
    <title>Sign-up</title>
	<head>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/signup.css">
		<meta charset="UTF-8">  
</head>
<body>
<?php
$name=$_POST['nom'];
$email=$_POST['email'];
$number=$_POST['number'];
$password=$_POST['password'];


?>
<form class ="verify" id="verify"  method="GET" action="/adminpanel" >
@csrf
<label>
    <p class="label-txt">
give meeeee woork !!!!!!!</p>
<input type="text" name ="verifycode" class="input">
<div class="line-box">
      <div class="line"></div>
    </div>
<button type="submit" >Confirm</button>

</form>
</body>
</html>