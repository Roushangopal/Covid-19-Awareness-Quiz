<?php 
        session_start();
       $var1 = $_SESSION['username'];
        if(empty($var1))
{
?>
    <script>
    window.location.href='../index.php';
    </script>
    <?php
}
        ?>
<!doctype html>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Certificate Generator</title>
  </head>
  <body>
    <center>
      <br><br><br>
      <h3>RESULT</h3>
      <?php
include '../dbconfig.php';
$fetchqry = "SELECT * FROM `quiz`";
$result=mysqli_query($con,$fetchqry);
$num=mysqli_num_rows($result);
$i=1;
for($i;$i<=$num;$i++){
@$userselected = $_POST[$i];
$fetchqry2 = "UPDATE `quiz` SET `userans`='$userselected' WHERE `id`=$i"; 
mysqli_query($con,$fetchqry2);
} 
$qry3 = "SELECT `ans`, `userans` FROM `quiz`;";
$result3 = mysqli_query($con,$qry3);
while ($row3 = mysqli_fetch_array($result3, MYSQLI_ASSOC)) {
    if($row3['ans']==$row3['userans']){
	 @$_SESSION['score'] += 1 ;
 }
}
$qry4 = "SELECT * FROM `quiz`;";
$result4 = mysqli_query($con,$qry4);
$tot_questions = mysqli_num_rows($result4);
$tot_marks = $tot_questions * 2;
$num = @$_SESSION['score'];
$obtained_marks = $num * 2;
@$_SESSION['percentage'] = ($obtained_marks/$tot_marks)*100;
$verification = @$_SESSION['percentage'];
$qry5 = "update `quiz` set userans = NULL;";
$result5 = mysqli_query($con,$qry5);
if($verification < 84)
{
 ?> 
 <div class="col-md-offset-2 col-md-8">
 <span><b>No. of Correct Answer:</b>&nbsp;<?php  echo $no = @$_SESSION['score']; 
											 ?></span><br><br>
 <span><b>Your Score:</b>&nbsp<?php if(isset($no)) echo @$_SESSION['percentage'];  ?>%</span>
</div>
     
    <br>
    <?php 
}
else
{
  ?> 
 <div class="col-md-offset-2 col-md-8">
 <span><b>No. of Correct Answer:</b>&nbsp;<?php  echo $no = @$_SESSION['score']; 
											 ?></span><br><br>
 <span><b>Your Score:</b>&nbsp<?php if(isset($no)) echo @$_SESSION['percentage'];  ?>%</span>
</div>
     
    <br>
    <?php 
        $name = strtoupper($_SESSION['username']);
        $name_len = strlen($_SESSION['username']);
        $occupation = date('d/m/Y');
        $mark = @$_SESSION['percentage'];
        
        if ($occupation) {
          $font_size_occupation = 10;
        }
           $marks = "$mark%";
        if ($name == "" || $occupation == "") {
          echo 
          "
          <div class='alert alert-danger col-sm-6' role='alert'>
              Ensure you fill all the fields!
          </div>
          ";
        }else{
          echo 
          "
          <div class='alert alert-success col-sm-6' role='alert'>
              Congratulations! $name on your excellent success.
          </div>
          ";

          //designed certificate picture
          $image = "certi.png";

          $createimage = imagecreatefrompng($image);

          //this is going to be created once the generate button is clicked
          $output = "certificate.png";

          //then we make use of the imagecolorallocate inbuilt php function which i used to set color to the text we are displaying on the image in RGB format
          $white = imagecolorallocate($createimage, 205, 245, 255);
          $black = imagecolorallocate($createimage, 0, 0, 0);

          //Then we make use of the angle since we will also make use of it when calling the imagettftext function below
          $rotation = 0;

          //we then set the x and y axis to fix the position of our text name
          $origin_x = 1000;
          $origin_y=1000;

          //we then set the x and y axis to fix the position of our text occupation
          $origin1_x = 1220;
          $origin1_y=1210;

          $origin2_x = 1120;
          $origin2_y=1420;

          //we then set the differnet size range based on the lenght of the text which we have declared when we called values from the form
          if($name_len<=7){
            $font_size = 45;
            
          }
          elseif($name_len<=12){
            $font_size = 45;
          }
          elseif($name_len<=15){
            $font_size = 36;
          }
          elseif($name_len<=20){
             $font_size = 28;
          }
          elseif($name_len<=22){
            $font_size = 25;
          }
          elseif($name_len<=33){
            $font_size=21;
          }
          else {
            $font_size =10;
          }

          $certificate_text = $name;
          $font_size1 = 23;

          //font directory for name
          $drFont = dirname(__FILE__)."/developer.ttf";

          // font directory for occupation name
          $drFont1 = dirname(__FILE__)."/Gotham-Black.otf";

          //function to display name on certificate picture
          $text1 = imagettftext($createimage, $font_size, $rotation, $origin_x, $origin_y, $black,$drFont, $certificate_text);

          //function to display occupation name on certificate picture
          $text2 = imagettftext($createimage, $font_size1, $rotation, $origin1_x+2, $origin1_y, $black, $drFont1, $occupation);
          $text3 = imagettftext($createimage, $font_size, $rotation, $origin2_x+2, $origin2_y, $black, $drFont1, $marks);

          imagepng($createimage,$output,3);

 ?>
        <!-- this displays the image below -->
        
        <br> 
        <br>

        <!-- this provides a download button -->
        <a href="<?php echo $output; ?>" class="btn btn-success">Download Your Certificate</a>
        <br><br>
<?php 
        }
      }
      unset($_SESSION['score']);
     ?>

    </center>

      <footer>  
          <center><p> &copy 2019 www.vitb.ac.in | All Rights Reserved |  Design & Developed by : <a href="https://www.instagram.com/roushan_gopal/" target="_blank">Roushan Raja</a></p></center>
      </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>