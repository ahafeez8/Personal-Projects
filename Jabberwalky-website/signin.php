
<?php  //Start the Session
session_start();
 require('connect.php');

 $_SESSION['loggedin'] = false;
//3. If the form is submitted or not.
//3.1 If the form is submitted
if (isset($_POST['username']) and isset($_POST['password'])){
//3.1.1 Assigning posted values to variables.
$username = $_POST['username'];
$password = $_POST['password'];

//3.1.2 Checking the values are existing in the database or not
$query = "SELECT * FROM userdb WHERE uid='$username' and pass='$password'";
 
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);
//3.1.2 If the posted values are equal to the database values, then session will be created for the user.
if ($count == 1){
$_SESSION['username'] = $username;
$_SESSION['loggedin'] = true;
}else{
//3.1.3 If the login credentials doesn't match, he will be shown with an error message.
$fmsg = "Invalid Login Credentials.";
}
}
//3.1.4 if the user is logged in Greets the user with message
if (isset($_SESSION['username']) && $_SESSION['loggedin'] == true){
  header('Location: index.php');
  setcookie('username', $username , time()+ 60*60*7);
    setcookie('password', $password , time()+ 60*60*7);
$username = $_SESSION['username'];
echo "Hai " . $username . "
";
echo "This is the Members Area
";
echo "<a href='logout.php'>Logout</a>";
 
}else{
//3.2 When the user visits the page first time, simple login form will be displayed.
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0"
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sign In</title>
<link rel="shortcut icon" href="icons/jw.ico" />
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<style>

@font-face
{
  font-family: Raleway-Light;
  src: url(Raleway-Light.ttf);
}
@font-face
{
  font-family: Raleway-Heavy;
  src: url(Raleway-Heavy.ttf);
}
.header-all, footer
{
  height: 60px;
  background-image: url("images/bg.jpg");
  background-size:cover;
}
.logo-header
{
  width: auto;
  height: auto;
  position: absolute;
  left: 36%;
  bottom: 86%;
  
}
body
{
  margin: 0; 
  padding: 0;
  font-family:Raleway-Light;
}
button:hover {
  background-color:#CCC;
}

button {
  background-color:#00c6b1;
  width:300px;
  height:30px;
  cursor:pointer;
  /*to make a hand at the button*/
}
.container {
  margin: 8% 30% 0% 30%;
  font-size:24px;
  background-color:#fff;
  
}
.sr-only {
  position:absolute;
  width:1px;
  height:1px;
  padding:0;
  margin:-1px;
  overflow:hidden;
  clip:rect(0,0,0,0);
  border:0
}

.form-signin {
  max-width: 330px;
     padding-bottom: 15%;
  margin: 0 auto;
}

.form-signin .form-signin-heading,
.form-signin .checkbox {
  margin-bottom: 10px;
  
}
.form-signin .checkbox {
  font-weight: normal;
  font-size: 15px;
}
.form-signin .form-control {
  border-radius:5px;
  width:300px;
  box-shadow: 10px 10px 5px grey;
  position: relative;
  -webkit-box-sizing: border-box;
     -moz-box-sizing: border-box;
          box-sizing: border-box;
  padding: 10px;
  font-size: 16px;
}
.form-signin .form-control:focus {
  background-color:#CCC;
  /*   Select and style an input field when it gets focus like when clicked upon
*/
}
.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
#submit-btn
{
  color: white;
  font-size: 20px;
  background-color: #e10030;
}
#submit-btn:hover, #submit-btn:active
{
  background-color: #00c6b1;
}
button:hover {
animation: shake 0.5s;
}
@keyframes shake {
  0%, 100% {transform: translateX(0);}
  10%, 30%, 50%, 70%, 90% {transform: translateX(-2px);}
  20%, 40%, 60%, 80% {transform: translateX(2px);}
}
footer{
 
    height: 100px; 
    width:100%;
    position:fixed;
    left: 0;
    bottom: 0; 
  
}
footer img
{
  position: absolute;
  left: 15px;
  top: 19px;
}

@media only screen and (max-width: 500px) {
  /****Mobile Landscape 480 Container 100% ****/
  .container{
    margin: 8% 30% 0% 10%;
  }
  .logo-header{
      margin: 8% 30% 0% -30%;
  
  }
  .header-all{
    text-align:left;

  }
}
@media only screen and (max-width: 1000px) {
  /****Mobile Landscape 480 Container 100% ****/

  .logo-header{
        left: 36%;
  bottom: 86%;
  }}
</style>


</head>

<body>
<div class="header-all">
</div>
<div class="logo-header"><img src="images/logo.png"/>
</div>
   <div class="container">

      <div class="container">
      <form class="form-signin" method="POST">
      <?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
        <h2>Please Login</h2>
        <div class="input-group">
    
    <input id="uid" type="text" name="username" class="form-control" placeholder="Username" required>
  </div>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
        <!--<a class="btn btn-lg btn-primary btn-block" href="register.php">Register</a>-->
      </form>
</div>
     <div style="position: relative; margin-left: 33%;">
      <div class="fb-login-button" data-max-rows="1" data-size="large" data-button-type="continue_with" data-show-faces="false" data-auto-logout-link="false" data-use-continue-as="false"></div>
<div id="fb-root"></div>
</div>

</div>
<script>

(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.9&appId=1736306133051658";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>
<footer>
<img src="images/logo-white.png" /><br/><br/><br/>
<hr/> 
<p style="text-align: right; color: white; font-size: 13px"> Copyrights AIMMZ </p>
</footer>
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script type="text/javascript">

$(function() {
    $( "#uid" ).autocomplete({
        source: 'data2.php'
    });
});

      
    </script>
</body>
</html>
<?php } ?>