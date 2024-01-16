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
width: 12rem; height: 430px; 


}


</style>






</head>
<body>


<center>
<img src="" class="img-fluid"  width="300rem">
</center>
<div class="d-flex justify-content-center" >
<div class="card" style="width: 18rem;" >
  <div class="card-body">
    <h3 class="card-title" style="text-align: center">Reset <br> Password<br><br></h3>
    
    
    <!-- <h6 class="card-subtitle mb-2 text-muted"><center>You will recieve an OTP on your registered Email</center></h6>  -->

    
    
    
    
    <p class="card-text">
    <form method="POST" action="curl.php">
  <div class="form-group">
  
  
  
    
  
 <br>
 <div class="input-group flex-nowrap">
  <div class="input-group-prepend">
    <span class="input-group-text" id="addon-wrapping"></span>
  </div>
  <input type="text" class="form-control" placeholder="Contact Number" aria-label="Username" name="contact" aria-describedby="addon-wrapping">
</div>
<br>
<br>
  <div class="form-group ">
  <center><button type="submit" class="btn btn-primary btn-block btl-sm" id="submit" name="submit">Reset</button></center> 
  </div>
 
 
  </form>
    </p>
    
  </div>
</div> 
</div>

</body>
</html>