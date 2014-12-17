<!-- 

// Registration form. 
// Created by Marcus





-->


<html>
<head>
<title></title>
<meta name="robots" content="noindex, nofollow">
<!-- Include CSS File Here -->
<link rel="stylesheet" href="css/style.css"/>
<!-- Include JS File Here -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src="js/registration.js"></script>
<script type="text/javascript" src="http://www.google.com/recaptcha/api/js/recaptcha_ajax.js"></script>
</head>


</center>
<body background="images/#"> <!-- Add Image -->    
<div class="container">
<div class="main">
<center role="form">
<form class="form" method="post" action="#">
<label>Username:</label>
<input type="text" name="dusername" id="username">
<center><label>Email:</label> </center>
<input type="text" name="demail" id="email">
<label>Password:</label>
<input type="password" name="password" id="password">
<center><label>Confirm Password:</label></center>
<input type="password" name="cpassword" id="cpassword">
</center>
    <!-- ... Your Captcha Keys  Here ... Write API keys after ?  -->
    <script type="text/javascript"
       src="http://www.google.com/recaptcha/api/challenge?PUBLIC_API_HERE">
    </script>
    <noscript>
       <iframe src="http://www.google.com/recaptcha/api/noscript?PRIVATE_API_HERE"
           height="100" width="200" frameborder="0"></iframe><br>
       <textarea name="recaptcha_challenge_field" rows="3" cols="40">
       </textarea>
       <input type="hidden" name="recaptcha_response_field"
           value="manual_challenge">
    </noscript>
    <!-- ... more of your form code here ... -->
<center>
<input type="button" name="register" id="register" value="Register"></center>
</form>
</div>


</body>
</html>

