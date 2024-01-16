
    <?php
    @session_start();
    include '../connect.php';

    
    $contact = $_SESSION['contact'];
    

    if (isset($_POST['submit']))
     {
        
        
     $cpassword = $_POST['cpassword'];
    $fotp = $_POST['otp'];
    $rpassword = $_POST['rpassword'];

    $query="SELECT  `OTP` FROM `information` WHERE   contact=  '$contact'";
    $res=mysqli_query($conn,$query);
    $row=mysqli_fetch_assoc($res);
    $dbf_otp= $row['OTP'];
    
    
    
    
    
    

    
    if (strcmp($cpassword,$rpassword)==0)
    {

      if (strcmp($fotp ,$dbf_otp)==0)
    {

      $query = "UPDATE `information` SET `OTP`= 'NULL',`Password`='$cpassword' WHERE contact ='$contact'" ;  
      $res =  mysqli_query($conn, $query);
      
      if ($res) 
     { 
        echo '<script language="javascript"> alert("PASSWORD SUCCESSFULLY UPDATED PLEASE LOGIN AGAIN"); </script>';
        header("refresh:1; url=http://localhost:80/fintech/FLRA/login.php");
     }
    
    }
     
     
 

     
     
     else {
     echo '<script language="javascript"> alert("INCORRECT OTP ENTERED PLEASE TRY AGAIN"); </script>';
     header("refresh:1; url= http://localhost:80/fintech/FLRA/otp.php");
     }
   
   
    }

    else {
      echo '<script language="javascript"> alert("PASSWORDS DO NOT MATCH PLEASE ENTER AGAIN"); </script>'; 
      header("refresh:1; url= http://localhost:80/fintech/FLRA/otp.php");
    }
     
  }
     
?>      
     
     
     