<html>
<head>
<title>connection</title>
</head>
<?php require "../dbconfig.php"; ?>
<?php
session_start();
$name = $_POST['uname'];
$pass = $_POST['psw'];
$_SESSION["username"] = $name;
$q = "select * from users where name='$name'";

$result=mysqli_query($con,$q);

$num=mysqli_num_rows($result);
if($num>0)
{
    ?>
    <script>
    window.alert('You have already attended the test!');
    window.location.href='../index.php';
    </script>
    <?php
}
else
{   
$qy="insert into users values ('$name','$pass')";
mysqli_query($con,$qy);
?>
<script>
window.location.href='../quiz.php';
</script>
<?php
 }


?>
</html>