<!DOCTYPE html>
<html>
   <head>
      <?php
      include 'navbar.php';
      ?>
      <title>QUIZ</title>
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
 
                <link rel="stylesheet" type="text/css" href="./css/style.css" />
                <link href="assets/demo/demo.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
 
    <script src="http://www.fastlearning.in/controller/js/jquery-1.9.1.min.js"></script>
    
     <script type="text/javascript">
	$(document).ready(function() {
    $('label').click(function() {
        $('label').removeClass('worngans');
        $(this).addClass('worngans');
    });
});
	</script>
   <style>
      .card{
        flex-direction:initial; 
      
      }

      *, ::after, ::before
      {
         box-sizing: content-box;
      }

      .container
      {
         width: 950px;
      }

      body,
html { height: 100%;}
.nav .open > a, 
.nav .open > a:hover, 
.nav .open > a:focus {background-color: transparent;}

/*-------------------------------*/
/*           Wrappers            */
/*-------------------------------*/

#wrapper {
    padding-left: 0;
    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;
}

#wrapper.toggled {
    padding-left: 220px;
}

#sidebar-wrapper {
    z-index: 1000;
    left: 220px;
    width: 0;
    height: 100%;
    margin-left: -220px;
    overflow-y: auto;
    overflow-x: hidden;
    background: #1a1a1a;
    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;
}

#sidebar-wrapper::-webkit-scrollbar {
  display: none;
}

#wrapper.toggled #sidebar-wrapper {
    width: 220px;
}

#page-content-wrapper {
    width: 100%;
    padding-top: 10px;
}

#wrapper.toggled #page-content-wrapper {
    position: absolute;
    margin-right: -220px;
}

/*-------------------------------*/
/*     Sidebar nav styles        */
/*-------------------------------*/
.navbar {
  padding: 0;
  color: #555 !important;
  background-color: #555 !important;
}

.sidebar-nav {
    position: absolute;
    top: 0;
    width: 220px;
    margin: 0;
    padding: 0;
    list-style: none;
}

.sidebar-nav li {
    position: relative; 
    line-height: 20px;
    display: inline-block;
    width: 100%;
}

.sidebar-nav li:before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    z-index: -1;
    height: 100%;
    width: 3px;
    background-color: #1c1c1c;
    -webkit-transition: width .2s ease-in;
      -moz-transition:  width .2s ease-in;
       -ms-transition:  width .2s ease-in;
            transition: width .2s ease-in;

}
.sidebar-nav li:first-child a {
    color: #fff;
    background-color: #1a1a1a;
}
.sidebar-nav li:nth-child(5n+1):before {
    background-color: #ec1b5a;   
}
.sidebar-nav li:nth-child(5n+2):before {
    background-color: #79aefe;   
}
.sidebar-nav li:nth-child(5n+3):before {
    background-color: #314190;   
}
.sidebar-nav li:nth-child(5n+4):before {
    background-color: #279636;   
}
.sidebar-nav li:nth-child(5n+5):before {
    background-color: #7d5d81;   
}

.sidebar-nav li:hover:before,
.sidebar-nav li.open:hover:before {
    width: 100%;
    -webkit-transition: width .2s ease-in;
      -moz-transition:  width .2s ease-in;
       -ms-transition:  width .2s ease-in;
            transition: width .2s ease-in;

}

.sidebar-nav li a {
    display: block;
    color: #ddd;
    text-decoration: none;
    padding: 10px 15px 10px 30px;    
}

.sidebar-nav li a:hover,
.sidebar-nav li a:active,
.sidebar-nav li a:focus,
.sidebar-nav li.open a:hover,
.sidebar-nav li.open a:active,
.sidebar-nav li.open a:focus{
    color: #fff;
    text-decoration: none;
    background-color: transparent;
}
.sidebar-header {
    text-align: center;
    font-size: 20px;
    position: relative;
    width: 100%;
    display: inline-block;
}
.sidebar-brand {
    height: 65px;
    position: relative;
    background:#212531;
    background: linear-gradient(to right bottom, #2f3441 50%, #212531 50%);
   padding-top: 1em;
}
.sidebar-brand a {
    color: #ddd;
}
.sidebar-brand a:hover {
    color: #fff;
    text-decoration: none;
}
.dropdown-header {
    text-align: center;
    font-size: 1em;
    color: #ddd;
    background:#212531;
    background: linear-gradient(to right bottom, #2f3441 50%, #212531 50%);
}
.sidebar-nav .dropdown-menu {
    position: relative;
    width: 100%;
    padding: 0;
    margin: 0;
    border-radius: 0;
    border: none;
    background-color: #222;
    box-shadow: none;
}
.dropdown-menu.show {
    top: 0;
}
/*Fontawesome icons*/
/* .nav.sidebar-nav li a::before {
    font-family: fontawesome;
    content: "\f12e";
    vertical-align: baseline;
    display: inline-block;
    padding-right: 5px;
} */
/* a[href*="#home"]::before {
  content: "\f015" !important;
}
a[href*="#about"]::before {
  content: "\f129" !important;
}
a[href*="#events"]::before {
  content: "\f073" !important;
}
a[href*="#events"]::before {
  content: "\f073" !important;
}
a[href*="#team"]::before {
  content: "\f0c0" !important;
}
a[href*="#works"]::before {
  content: "\f0b1" !important;
}
a[href*="#pictures"]::before {
  content: "\f03e" !important;
}
a[href*="#videos"]::before {
  content: "\f03d" !important;
}
a[href*="#books"]::before {
  content: "\f02d" !important;
}
a[href*="#art"]::before {
  content: "\f1fc" !important;
}
a[href*="#awards"]::before {
  content: "\f02e" !important;
}
a[href*="#services"]::before {
  content: "\f013" !important;
}
a[href*="#contact"]::before {
  content: "\f086" !important;
}
a[href*="#followme"]::before {
  content: "\f099" !important;
  color: #0084b4;
} */
/*-------------------------------*/
/*       Hamburger-Cross         */
/*-------------------------------*/

.hamburger {
  position: fixed;
  top: 20px;  
  z-index: 999;
  display: block;
  width: 32px;
  height: 32px;
  margin-left: 15px;
  background: transparent;
  border: none;
  color: #fff;
}
.hamburger:hover,
.hamburger:focus,
.hamburger:active {
  outline: none;
}
.hamburger.is-closed:before {
  content: '';
  display: block;
  width: 100px;
  font-size: 14px;
  color: #fff;
  line-height: 32px;
  text-align: center;
  opacity: 0;
  -webkit-transform: translate3d(0,0,0);
  -webkit-transition: all .35s ease-in-out;
}
.hamburger.is-closed:hover:before {
  opacity: 1;
  display: block;
  -webkit-transform: translate3d(-100px,0,0);
  -webkit-transition: all .35s ease-in-out;
}

.hamburger.is-closed .hamb-top,
.hamburger.is-closed .hamb-middle,
.hamburger.is-closed .hamb-bottom,
.hamburger.is-open .hamb-top,
.hamburger.is-open .hamb-middle,
.hamburger.is-open .hamb-bottom {
  position: absolute;
  left: 0;
  height: 4px;
  width: 100%;
}
.hamburger.is-closed .hamb-top,
.hamburger.is-closed .hamb-middle,
.hamburger.is-closed .hamb-bottom {
  background-color: #1a1a1a;
}
.hamburger.is-closed .hamb-top { 
  top: 5px; 
  -webkit-transition: all .35s ease-in-out;
}
.hamburger.is-closed .hamb-middle {
  top: 50%;
  margin-top: -2px;
}
.hamburger.is-closed .hamb-bottom {
  bottom: 5px;  
  -webkit-transition: all .35s ease-in-out;
}

.hamburger.is-closed:hover .hamb-top {
  top: 0;
  -webkit-transition: all .35s ease-in-out;
}
.hamburger.is-closed:hover .hamb-bottom {
  bottom: 0;
  -webkit-transition: all .35s ease-in-out;
}
.hamburger.is-open .hamb-top,
.hamburger.is-open .hamb-middle,
.hamburger.is-open .hamb-bottom {
  background-color: #1a1a1a;
}
.hamburger.is-open .hamb-top,
.hamburger.is-open .hamb-bottom {
  top: 50%;
  margin-top: -2px;  
}
.hamburger.is-open .hamb-top { 
  -webkit-transform: rotate(45deg);
  -webkit-transition: -webkit-transform .2s cubic-bezier(.73,1,.28,.08);
}
.hamburger.is-open .hamb-middle { display: none; }
.hamburger.is-open .hamb-bottom {
  -webkit-transform: rotate(-45deg);
  -webkit-transition: -webkit-transform .2s cubic-bezier(.73,1,.28,.08);
}
.hamburger.is-open:before {
  content: '';
  display: block;
  width: 100px;
  font-size: 14px;
  color: #fff;
  line-height: 32px;
  text-align: center;
  opacity: 0;
  -webkit-transform: translate3d(0,0,0);
  -webkit-transition: all .35s ease-in-out;
}
.hamburger.is-open:hover:before {
  opacity: 1;
  display: block;
  -webkit-transform: translate3d(-100px,0,0);
  -webkit-transition: all .35s ease-in-out;
}

@media (min-width: 992px)
{
.col-lg-8 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 66.666667%;
    flex: 0 0 66.666667%;
    max-width: 46.666667%;
}
}
/*-------------------------------*/
/*            Overlay            */
/*-------------------------------*/

.overlay {
    position: fixed;
    display: none;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: rgba(250,250,250,.8);
    z-index: 1;
}

      </style>
    
   </head>
   <body >

   <div id="wrapper">
   <div class="overlay"></div>
    
        <!-- Sidebar -->
    <nav class="navbar navbar-inverse fixed-top" id="sidebar-wrapper" role="navigation">
     <ul class="nav sidebar-nav">
       <div class="sidebar-header">
       <div class="sidebar-brand">
       <img src="user.png" class="img-fluid" alt="Responsive image">
       </div></div>
       <br><br><br><br>
       <br><br><br><br><br><br><br><br>
       <!-- <li><a href="#home">Identification no. <br> 01</a></li> -->
       <li><a href="#about">Name <br> Aishwarya Anand</a></li>
       <li><a href="#events">Contact number 9546243600</a></li>
       
      </ul>
  </nav>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <button type="button" class="hamburger animated fadeInLeft is-closed" data-toggle="offcanvas">
                <span class="hamb-top"></span>
    			<span class="hamb-middle"></span>
				<span class="hamb-bottom"></span>
            </button>
     
                   
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
  
    <!-- /#wrapper -->
  <script>
    $(document).ready(function () {
  var trigger = $('.hamburger'),
      overlay = $('.overlay'),
     isClosed = false;

    trigger.click(function () {
      hamburger_cross();      
    });

    function hamburger_cross() {

      if (isClosed == true) {          
        overlay.hide();
        trigger.removeClass('is-open');
        trigger.addClass('is-closed');
        isClosed = false;
      } else {   
        overlay.show();
        trigger.removeClass('is-closed');
        trigger.addClass('is-open');
        isClosed = true;
      }
  }
  
  $('[data-toggle="offcanvas"]').click(function () {
        $('#wrapper').toggleClass('toggled');
  });  
});
  </script>  

      <div class="container">
<div class="scp-quizzes-main">
<div class="scp-quizzes-data">
<div class="card">
          <div class="card-header card-header-text card-header-primary">
            <div class="card-text">
               <br>
               <br>
               <br>
               <br>
               <br>
              <h4 class="card-title">1. Government has announced PM-KISAN Scheme to provide assured income support to the Small and Marginal Farmers. What does PM-KISAN stands for?</h4>
           
 <br>
 
    <audio controls>
  <source src="horse.ogg" type="audio/ogg">
  <source src="pm-kisan-yojana.mp3" type="audio/mpeg">
Your browser does not support the audio element.
</audio>

</div>
          </div>
          <div class="card-body">
           
  

   
<br/>
<div class="row">
   <div class="col">
<div class=card>
    <input type="radio" id="Fastlearning" name="question1">
       <label for="Fastlearning" style="border:0px;">1. Pradhan Mantri Kisan Samman Nidhi <br>
       
       <audio controls>
  <source src="6000rs.ogg" type="audio/ogg">
  <source src="pm-kisan-samman-nidhi.mp3" type="audio/mpeg">
Your browser does not support the audio element.
</audio>
       
       </label><br/>
</div>
</div>

<div class="col">
<div class=card>
    <input type="radio"  name="question1">
       <label style="border:0px;">2. Pradhan Mantri Kisan Sanchay Nidhi <br>
       
       <audio controls>
       <source src="8000rs.ogg" type="audio/ogg">
  <source src="pm-kisan-sanchi-nidi.mp3" type="audio/mpeg">
Your browser does not support the audio element.
</audio>
       
       </label><br/>
</div>
</div>
   </div>
   </div>
</div> 

<div class="d-flex justify-content-center">
  <form action="quizgovt3.php" method="POST">
  <button class="btn btn-info btn-round">
  NEXT<i class="material-icons">navigate_next</i>
  </button>
  </form>
  </div>

 <br>
 <!-- <div class="scp-quizzes-data">
 <div class="card">
          <div class="card-header card-header-text card-header-primary">
            <div class="card-text">
               <br>
               <br>
               <br>
               <br>
               <br> -->
  <!-- <h4 class="card-title">2. Government has announced PM-KISAN Scheme to provide assured income support to the Small and Marginal Farmers.<br> What does PM-KISAN stands for?</h4>
  <br>
    <audio controls>
  <source src="horse.ogg" type="audio/ogg">
  <source src="pm-kisan-scheme.mp3" type="audio/mpeg">
Your browser does not support the audio element.
</audio>
<br/>
</div>
          </div>
          <div class="card-body">
           
  

<div class="row">
   <div class="col">
<div class=card>

    <input type="radio" name="question2" id="inculdefile">
       <label for="inculdefile" style="border:0px;">1. Pradhan Mantri Krishi Sewa Niyam <br>
       <audio controls>
  
  <source src="pm-krishi-niyam.mp3" type="audio/mpeg">
Your browser does not support the audio element.
</audio>

       </label><br/>
   </div>
   </div>

   <div class="col">
      <div class="card">
       <input type="radio"  name="question2">
       <label style="border:0px;"> 2. Pradhan Mantri Kisan Sanchay Nidhi <br>
       <audio controls>
  <source src="horse.ogg" type="audio/ogg">
  <source src="pm-kisan-sanchi-nidi.mp3" type="audio/mpeg">
Your browser does not support the audio element.
</audio>

       </label><br/>
   </div>
</div>
   </div>
   </div>
</div> -->
<!-- <br>
<div class="scp-quizzes-data">
<div class="card">
          <div class="card-header card-header-text card-header-primary">
            <div class="card-text">
               <br>
               <br>
               <br>
               <br>
               <br>
  <h4 class="card-title">3. Do senior citizens get more interest rate for fixed deposits?</h4>
  <br>
    <audio controls>
  <source src="senior-fd.mp3" type="audio/mpeg">
Your browser does not support the audio element.
</audio>
<br/>
</div>
          </div>
          <div class="card-body">
           
<div class="row">
   <div class="col">
<div class=card>
    <input type="radio" name="question3">
       <label style="border:0px;">1. No<br>
       
       <audio controls>
  <source src="horse.ogg" type="audio/ogg">
  <source src="no.mp3" type="audio/mpeg">
Your browser does not support the audio element.
</audio>

       </label><br/>
   </div>
   </div>

   <div class="col">
<div class=card>
    <input type="radio"  name="question3" id="file">
       <label for="file" style="border:0px;">2. Yes <br>
       
       <audio controls>
  <source src="horse.ogg" type="audio/ogg">
  <source src="yes.mp3" type="audio/mpeg">
Your browser does not support the audio element.
</audio>

       </label><br/>
   </div>
   </div>
 </div>
</div>
   </div>
   </div>


   </div>
   <div class="d-flex justify-content-end">
  <form action="table.php" method="POST">
  <button class="btn btn-info btn-round">
  See banks along with their interests<i class="material-icons">navigate_next</i>
  </button>
  </form>
  </div>
    -->
</body>
</html>