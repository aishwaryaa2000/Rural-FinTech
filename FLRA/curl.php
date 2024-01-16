<?php


require_once 'connect.php';
//check submit
if  (isset($_POST['submit'])) {
$contact = $_POST['contact'];



$query="SELECT  `contact` FROM `information` WHERE   contact=  '$contact'";
    $res=mysqli_query($conn,$query);
    $row=mysqli_fetch_assoc($res);
    $db_contact= $row['contact'];

     $_SESSION['contact']=$db_contact;

//check is there Roll_no in database
// if ($total !=0) {
//   while ($row=mysqli_fetch_assoc($db)){
//     $db_Phone_no = $row['phone_no'];
	
// 	 $db_First_name = $row['username'];
//   }

//check input Phone_no similar with Phone_no in database
if ($contact==$db_contact)
{
	

    $query1="SELECT  `name` FROM `information` WHERE   contact=  '$contact'";
  $res=mysqli_query($conn,$query1);
  $row=mysqli_fetch_assoc($res);
  $name= $row['name'];

	


  // API 

// API


 echo '<script language="javascript"> alert("MESSAGE SUCCESSFULLY SENT"); </script>';
 header("refresh:1; url= http://localhost:80/fintech/FLRA/otp.php");
	

}
  
 else
  {
      

 
 
 echo '<script language="javascript"> alert("Your phone number is not registered Please try again!!")</script>';
header("refresh:1; url= http://localhost:80/fintech/FLRA/login.php");
	?>

  
<?php
  }

}

else
{

    echo '<script language="javascript"> alert("TRY AGAIN"); </script>';
          header("refresh:1; url= http://localhost:80/fintech/FLRA/login.php");
}

?>
  






<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>