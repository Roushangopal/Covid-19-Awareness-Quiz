<!DOCTYPE html>
<html>
<?php require 'dbconfig.php';
session_start(); ?>
 
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Simple Online Quiz">
    <meta name="author" content="Val Okafor">   
    <title>Simple Quiz</title>
 
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap-theme.css">
    <!-- Custom styles for this template -->
    <link href="css/theme.css" rel="stylesheet">
	<link rel="stylesheet" href="css/index.css">	
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
 
  <body role="document">

<head>
<title>VKIT QUIZ</title>
</head>
<body style="background-color:rgba(255,255,255,0.4);background-blend-mode: lighten;" >
<center>
<div class="time" id="navbar" >Time left :<span id="timer"></span></div>
<div class="container">
<button class="button" id="mybut" onclick="myFunction()">START QUIZ</button>
</div>
</center>
<div id="myDIV" style="padding: 10px 30px;">
<form action="certificate/index.php" method="post" id="form">  				
<table><?php   $fetchqry = "SELECT * FROM `quiz`";
				$result=mysqli_query($con,$fetchqry);
				$num=mysqli_num_rows($result);
				
			   while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
		  ?>
  <tr><td><h3><br><?php echo @$snr +=1;?>&nbsp;-&nbsp;<?php echo @$row['que'];?></h3></td></tr>
  <tr><td>&nbsp;&nbsp;&nbsp;&nbsp;a )&nbsp;&nbsp;&nbsp;<input required type="radio" name="<?php echo $snr;?>" value="<?php echo $row['option 1'];?>">&nbsp;<?php echo $row['option 1']; ?><br>
  <tr><td>&nbsp;&nbsp;&nbsp;&nbsp;b )&nbsp;&nbsp;&nbsp;<input required type="radio" name="<?php echo $snr;?>" value="<?php echo $row['option 2'];?>">&nbsp;<?php echo $row['option 2'];?></td></tr>
  <tr><td>&nbsp;&nbsp;&nbsp;&nbsp;c )&nbsp;&nbsp;&nbsp;<input required type="radio" name="<?php echo $snr;?>" value="<?php echo $row['option 3'];?>">&nbsp;<?php echo $row['option 3']; ?></td></tr>
  <tr><td>&nbsp;&nbsp;&nbsp;&nbsp;d )&nbsp;&nbsp;&nbsp;<input required type="radio" name="<?php echo $snr;?>" value="<?php echo $row['option 4'];?>">&nbsp;<?php echo $row['option 4']; ?><br><br><br></td></tr>
			    <?php  }
																	?> 
		<tr><td align="center"><button class="button3" name="click" >Submit Quiz</button></td></tr>
	</table>
  <form>
</div>
<script>
function myFunction() {
	var x = document.getElementById("myDIV");
    var b = document.getElementById("mybut");
    var x = document.getElementById("myDIV");
	if (x.style.display === "none") { 
	b.style.visibility = 'hidden';
	x.style.display = "block";
	startTimer();
}
}
window.onload = function() {
  document.getElementById('myDIV').style.display = 'none';
};
</script>
<?php			$fetchtime = "SELECT `timer` FROM `quiz` WHERE id=1";
				$fetched = mysqli_query($con,$fetchtime);
				$time = mysqli_fetch_array($fetched,MYSQLI_ASSOC);
				$settime = $time['timer'];		
						?>
 <script type="text/javascript">
 
document.getElementById('timer').innerHTML = '<?php echo $settime; ?>';
  //03 + ":" + 00 ;
 
 
function startTimer() {
  var presentTime = document.getElementById('timer').innerHTML;
  var timeArray = presentTime.split(/[:]+/);
  var m = timeArray[0];
  var s = checkSecond((timeArray[1] - 1));
  if(s==59){m=m-1}
  if(m==0 && s==0){document.getElementById("form").submit();}
  document.getElementById('timer').innerHTML =
    m + ":" + s;
  setTimeout(startTimer, 1000);
}
 
function checkSecond(sec) {
  if (sec < 10 && sec >= 0) {sec = "0" + sec}; // add zero in front of numbers < 10
  if (sec < 0) {sec = "59"};
  return sec;
  if(sec == 0 && m == 0){ alert('stop it')};
}
</script>
 
<script>
window.onscroll = function() {myFun()};
 
var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop -50;
 
function myFun() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>
</body>
</html>