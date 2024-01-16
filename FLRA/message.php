<?php


require_once 'connect.php';
//check submit
//if  (isset($_POST['submit'])) {
$contact = "9029960685";



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
	

    $query1="SELECT  `name`,'rate' FROM `bank` WHERE 1";
  $res=mysqli_query($conn,$query1);
  $name=array();
  $rate=array();
  $i=0;
 
  while($row=mysqli_fetch_assoc($res))
  {
  $name[$i]= $row['name'];
  $i++;
  }
  $query2="SELECT 'rate' FROM `bank` WHERE 1";
  $res2=mysqli_query($conn,$query2);
  $j=0;
  while($row2=mysqli_fetch_assoc($res2))
  {
  $rate[$j]=$row2['rate'];
  echo $rate[$j];
  $j++;
  }

   $agreedmsg=	"Please consider following banks with rate of interest $name[0]=$rate[0] , $name[1]=$rate[1] , $name[2]=$rate[2] , $name[3]=$rate[3]";
	$urlagreedmsg=urlencode($agreedmsg);

	$url = "http://makemysms.in/api/sendsms.php?username=dyprait&password=makemysms@123&sender=MYRAIT&mobile=+91".$contact."&type=1&product=1&message=".$urlagreedmsg;

// Configure cURL options
 $options = array (CURLOPT_RETURNTRANSFER => true , // return web page
 CURLOPT_HEADER => false , // don't return headers
 CURLOPT_FOLLOWLOCATION => false , // follow redirects
 CURLOPT_ENCODING => "" , // handle compressed
 CURLOPT_USERAGENT => "test" , // who am i
 CURLOPT_AUTOREFERER => true , // set referer on redirect
 CURLOPT_CONNECTTIMEOUT => 120 , // timeout on connect
 CURLOPT_TIMEOUT => 120 , // timeout on response
 CURLOPT_MAXREDIRS => 10 ); // stop after 10 redirects
 
// Send the GET request with cURL
 $ch = curl_init ( $url ); 
 curl_setopt_array ( $ch, $options ) ;
 $content = curl_exec ( $ch ); 
 $err = curl_errno ( $ch ); 
 $errmsg = curl_error ( $ch ); 
 $header = curl_getinfo ( $ch ); 
 $httpCode = curl_getinfo ( $ch, CURLINFO_HTTP_CODE ); 
 curl_close ( $ch ); 
 
// Receive response
 $header [ 'errno' ] = $err; 
 $header [ 'errmsg' ] = $errmsg; 
 $header [ 'content' ] = $content;  


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

// }

// else
// {

//     echo '<script language="javascript"> alert("TRY AGAIN"); </script>';
//           header("refresh:1; url= http://localhost:80/fintech/FLRA/login.php");
// }

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