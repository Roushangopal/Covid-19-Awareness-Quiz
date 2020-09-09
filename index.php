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
 background-color:powderblue;
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

<form action="query/registration.php" method="post">
  <div class="container">
  <img src="photos/logo.jpg" alt="Avatar" class="avatar">
    <label for="uname"><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="uname" required>

    <label for="psw"><b>Mobile No</b></label>
    <input type="password" placeholder="Enter Mobile No" name="psw" required>
        
    <button type="submit">Sign In</button>
    
  </div>

  <div class="container" >
    <button type="button" onclick="window.location.href='login.php';" class="cancelbtn">ADMIN</button>
  </div>
</form>

</body>
</html>
