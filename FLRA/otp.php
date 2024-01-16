


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>



<style>
 body {
     margin : unset;
    font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: black;
    
    /* background-color: #9f1c32; */
}
.card {
    margin-top:100px;
    position: relative;
    /* display: -ms-flexbox; */
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid rgba(0,0,0,.125);
    border-radius: .25rem;
    -webkit-box-shadow: 18px 18px 36px 0px rgba(0,0,0,0.85);
-moz-box-shadow: 18px 18px 36px 0px rgba(0,0,0,0.85);
box-shadow: 18px 18px 36px 0px rgba(0,0,0,0.85);
width: 12rem; height: 380px; 

}

.warn {
     color: red;
     font-weight:bold;
     background-color: #fcc;
}

.hidden{
    display: none;
}

 </style>
</head>


<body>


<script type="text/javascript">
$(document).ready(function() {
$('#verify').keyup(function() {
  if( $(this).val () == $('#password').val()) {
    $('#verifynote').addClass('hidden');
  } else {
        $('#verifynote').removeClass('hidden');
  }

});
});
</script>











<center>
<img src="" class="img-fluid" alt="" width="300rem">
</center>
<div class="d-flex justify-content-center" >
<div class="card" style="width: 18rem;" >
  <div class="card-body">
    <h2 class="card-title" style="text-align: center">Confirm<br> Password</h2>
    <!-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> -->
    <p class="card-text">

    <form method="POST" action="checkotp.php">
  <div class="form-group">
  <br>
  
    <!-- <label for="exampleInputEmail1"><b>Verification Code</b></label> -->
    <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="OTP" id="otp" name="otp" required>
    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
  </div>
  
  
  <div class="form-group">
    <!-- <label for="exampleInputPassword1"><b>New Password</b></label> -->
    <input type="password" class="form-control" placeholder="New Password" id="password" name="rpassword" required>
  </div>

  <div class="form-group">
    <!-- <label for="exampleInputPassword1"><b>Confirm your password</b></label> -->
    <input type="password" class="form-control" id="verify" placeholder="Confirm Password"  name="cpassword" required><span id="verifynote" class="warn hidden"><b>Passwords do not match</b></span>
  </div>
  </div>

 



  <center><button type="submit" id="submit" name="submit" class="btn btn-primary">Reset password</button></center>
  
    
     
     
    </form>
    </p>
    </div>
    </div> 
</div>


</body>
</html>
