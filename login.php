<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
 
}

img.avatar {
  width: 50%;
  border-radius: 50%;
  display:block;
  margin-left:auto;
  margin-right:auto;
 
}

.container {
  
padding: 99px;
background-color:transparent;
width:auto;
margin:auto;
}
@media screen and (min-width: 1180px)
{
.container {
  padding: 80px;
background-color:transparent;
width:400px;
margin:auto;
  
}
}
span.psw {
  float: right;
  padding-top: 16px;
}
</style>
</head>
<body style="background-image:url('photos/swami1.jpg');background-size:100% 100%;background-color:rgba(255,255,255,0.4);background-blend-mode: lighten;" >

<form action="query/validation.php" method="post">
  <div class="container">
  <img src="photos/logo.jpg" alt="VKIT" class="avatar">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        
    <button type="submit" name="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:transparent">
    <button type="button" onclick="window.location.href='index.php';" class="cancelbtn">Cancel</button>
    <span class="psw" style="color:black">Don't have an account<a href="signup.php"> Sign Up</a></span>
  </div>
</form>

</body>
</html>
