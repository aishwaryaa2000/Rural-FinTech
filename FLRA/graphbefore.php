<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Document
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  
  <link rel="canonical" href="https://www.creative-tim.com/product/material-kit" />
  
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="../../maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  
  <link href="assets/css/material-kit.mine45f.css?v=2.0.6" rel="stylesheet" />
 
  <link href="assets/demo/demo.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>
    

<button class="btn btn-primary round" data-toggle="modal" data-target="#loginModal">
    GRAPHICAL VISUALIZATION<i class="material-icons">assignment</i>

</button>
<form class="form" method="POST" action="graph.php">
<div class="modal fade" id="loginModal" tabindex="-1" role="">
    <div class="modal-dialog modal-login" role="document">
        <div class="modal-content">
            <div class="card card-signup card-plain">
                <div class="modal-header">
                  <div class="card-header card-header-primary text-center">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                      <i class="material-icons">clear</i>
                    </button>

                    <h4 class="card-title" style="width:140px;">Amount?</h4>
                    <!-- <div class="social-line">
                      <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                        <i class="fa fa-facebook-square"></i>
                      </a>
                      <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                        <i class="fa fa-twitter"></i>
                      <div class="ripple-container"></div></a>
                      <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                        <i class="fa fa-google-plus"></i>
                      </a>
                    </div>
                  </div> -->
                </div>
                <div class="modal-body">
                    
                        <p class="description text-center">This calculator enables you to see a graph of various banks</p>
                        <div class="card-body">

                            <div class="form-group bmd-form-group">
                                <div class="input-group">
                                  <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="material-icons">face</i></div>
                                  </div>
                                  <input type="text" name="amount" class="form-control" placeholder="Please eneter amount">
                                </div>
                            </div>

                   
                </div>
                <!-- <div class="modal-footer justify-content-center">
                    <div class="btn btn-primary btn-link btn-wd btn-lg">Get Started</div>
                </div> -->
                <center><button type="submit" class="btn btn-primary">See graph</button></center>
            </div>
        </div>
    </div>
</div>

     
</form>
</body>
</html>