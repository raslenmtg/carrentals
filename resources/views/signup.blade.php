<!DOCTYPE html>
	<html>
    <title>Sign-up</title>
	<head>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/signup.css">
		<meta charset="UTF-8">  
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
<form class ="verify"  method="POST" action="/Confirmpage" >
@csrf
 <label>
    <p class="label-txt">ENTER YOUR COMPANY NAME</p>
    <input type="text" name="nom" class="input" >
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>
  <label>
    <p class="label-txt">ENTER YOUR E-MAIL</p>
    <input type="text" name="email" class="input">
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>
  <label>
    <p class="label-txt">ENTER YOUR MOBILE NUMBER</p>
    <input type="text" name="number" class="input" placeholder="+216" >
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>
  <label>
    <p class="label-txt">ENTER YOUR PASSWORD</p>
    <input type="password" name="password" class="input" >
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>


  
  <button type="submit" value="Submit">Register</button>
</form>
<script>
$(document).ready(function(){
$('.input').focus(function(){
  $(this).parent().find(".label-txt").addClass('label-active');
});
$(".input").focusout(function(){
  if ($(this).val() == '') {
    $(this).parent().find(".label-txt").removeClass('label-active');
  };
});
});
</script>
</body>
</html>