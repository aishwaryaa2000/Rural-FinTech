

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<link rel="apple-touch-icon" type="image/png" href="https://static.codepen.io/assets/favicon/apple-touch-icon-5ae1a0698dcc2402e9712f7d01ed509a57814f994c660df9f7a952f3060705ee.png" />
<meta name="apple-mobile-web-app-title" content="CodePen">
<!-- <link rel="shortcut icon" type="image/x-icon" href="https://static.codepen.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico" /> -->
<link rel="mask-icon" type="" href="https://static.codepen.io/assets/favicon/logo-pin-8f3771b1072e3c38bd662872f6b673a722f4b3ca2421637d5596661b4e2132cc.svg" color="#111" />
<title>Sign</title>
<link href="https://fonts.googleapis.com/css?family=Montserrat:300, 400, 500" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="../../maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="assets/css/material-kit.mine45f.css?v=2.0.6" rel="stylesheet" />
  <link href="assets/demo/demo.css" rel="stylesheet" />
  


<style>







/* caraousel */

html {
  min-height: 100%;
}

body {
  height: 100%;
}

.slideshow {
  list-style: none;
  z-index: 1;
}
.slideshow li span {
  width: 100%;
  height: 100%;
  position: absolute;
  top: 0px;
  left: 0px;
  color: transparent;
  background-size: cover;
  background-position: 50% 50%;
  background-repeat: none;
  opacity: 0;
  z-index: 0;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  -webkit-animation: imageAnimation 24s linear infinite 0s;
  -moz-animation: imageAnimation 24s linear infinite 0s;
  animation: imageAnimation 24s linear infinite 0s;
}
.slideshow li h3 {
  position: absolute;
  text-align: center;
  z-index: 2;
  bottom: 150px;
  left: 0;
  right: 0;
  opacity: 0;
  font-size: 4.0625em;
  font-family: 'Josefin Sans', sans-serif;
  text-transform: uppercase;
  color: #fff;
  -webkit-animation: titleAnimation 24s linear 1 0s;
  -moz-animation: titleAnimation 24s linear 1 0s;
  animation: titleAnimation 24s linear 1 0s;
}
@media only screen and (min-width: 768px) {
  .slideshow li h3 {
    bottom: 30px;
    font-size: 8.125em;
  }
}
@media only screen and (min-width: 1024px) {
  .slideshow li h3 {
    font-size: 10.9375em;
  }
}

.slideshow li:nth-child(1) span {
  background-image: url(gao.jpg);
}

.slideshow li:nth-child(2) span {
  background-image: url(ghana.jpg);
  -webkit-animation-delay: 6s;
  -moz-animation-delay: 6s;
  animation-delay: 6s;
}

.slideshow li:nth-child(3) span {
  background-image: url(img1.jpg);
  -webkit-animation-delay: 12s;
  -moz-animation-delay: 12s;
  animation-delay: 12s;
}

.slideshow li:nth-child(4) span {
  background-image: url(https://www.ft.com/__origami/service/image/v2/images/raw/https%3A%2F%2Fs3-ap-northeast-1.amazonaws.com%2Fpsh-ex-ftnikkei-3937bb4%2Fimages%2F5%2F4%2F3%2F7%2F18897345-1-eng-GB%2F20190115CoverStorySidebar.JPG?source=nar-cms&width=1600&height=900&fit=cover&gravity=faces);
  -webkit-animation-delay: 18s;
  -moz-animation-delay: 18s;
  animation-delay: 18s;
}

@-webkit-keyframes imageAnimation {
  0% {
    opacity: 0;
    -webkit-animation-timing-function: ease-in;
  }
  12.5% {
    opacity: 1;
    -webkit-animation-timing-function: ease-out;
  }
  25% {
    opacity: 1;
  }
  37.5% {
    opacity: 0;
  }
  100% {
    opacity: 0;
  }
}
@-moz-keyframes imageAnimation {
  0% {
    opacity: 0;
    -moz-animation-timing-function: ease-in;
  }
  12.5% {
    opacity: 1;
    -moz-animation-timing-function: ease-out;
  }
  25% {
    opacity: 1;
  }
  37.5% {
    opacity: 0;
  }
  100% {
    opacity: 0;
  }
}
@keyframes imageAnimation {
  0% {
    opacity: 0;
    -webkit-animation-timing-function: ease-in;
    -moz-animation-timing-function: ease-in;
    animation-timing-function: ease-in;
  }
  12.5% {
    opacity: 1;
    -webkit-animation-timing-function: ease-out;
    -moz-animation-timing-function: ease-out;
    animation-timing-function: ease-out;
  }
  25% {
    opacity: 1;
  }
  37.5% {
    opacity: 0;
  }
  100% {
    opacity: 0;
  }
}
@-webkit-keyframes titleAnimation {
  0% {
    opacity: 0;
  }
  12.5% {
    opacity: 1;
  }
  25% {
    opacity: 1;
  }
  37.5% {
    opacity: 0;
  }
  100% {
    opacity: 0;
  }
}
@-moz-keyframes titleAnimation {
  0% {
    opacity: 0;
  }
  12.5% {
    opacity: 1;
  }
  25% {
    opacity: 1;
  }
  37.5% {
    opacity: 0;
  }
  100% {
    opacity: 0;
  }
}
@keyframes titleAnimation {
  0% {
    opacity: 0;
  }
  12.5% {
    opacity: 1;
  }
  25% {
    opacity: 1;
  }
  37.5% {
    opacity: 0;
  }
  100% {
    opacity: 0;
  }
}
.no-cssanimations .slideshow li span {
  opacity: 1;
} 








/* caraousel */




/**
 * General variables
 */
/**
 * General configs
 */
* {
  box-sizing: border-box;
}

body {
  font-family: "Montserrat", sans-serif;
  font-size: 12px;
  line-height: 1em;
}

button {
  background-color: transparent;
  padding: 0;
  border: 0;
  outline: 0;
  cursor: pointer;
}

input {
  background-color: transparent;
  padding: 0;
  border: 0;
  outline: 0;
}
input[type="submit"] {
  cursor: pointer;
}
input::-webkit-input-placeholder {
  font-size: 0.85rem;
  font-family: "Montserrat", sans-serif;
  font-weight: 300;
  letter-spacing: 0.1rem;
  color: #ccc;
}
input::-moz-placeholder {
  font-size: 0.85rem;
  font-family: "Montserrat", sans-serif;
  font-weight: 300;
  letter-spacing: 0.1rem;
  color: #ccc;
}
input:-ms-input-placeholder {
  font-size: 0.85rem;
  font-family: "Montserrat", sans-serif;
  font-weight: 300;
  letter-spacing: 0.1rem;
  color: #ccc;
}
input::-ms-input-placeholder {
  font-size: 0.85rem;
  font-family: "Montserrat", sans-serif;
  font-weight: 300;
  letter-spacing: 0.1rem;
  color: #ccc;
}
input::placeholder {
  font-size: 0.85rem;
  font-family: "Montserrat", sans-serif;
  font-weight: 300;
  letter-spacing: 0.1rem;
  color: #ccc;
}

/**
 * Bounce to the left side
 */
@-webkit-keyframes bounceLeft {
  0% {
    -webkit-transform: translate3d(100%, -50%, 0);
            transform: translate3d(100%, -50%, 0);
  }
  50% {
    -webkit-transform: translate3d(-30px, -50%, 0);
            transform: translate3d(-30px, -50%, 0);
  }
  100% {
    -webkit-transform: translate3d(0, -50%, 0);
            transform: translate3d(0, -50%, 0);
  }
}
@keyframes bounceLeft {
  0% {
    -webkit-transform: translate3d(100%, -50%, 0);
            transform: translate3d(100%, -50%, 0);
  }
  50% {
    -webkit-transform: translate3d(-30px, -50%, 0);
            transform: translate3d(-30px, -50%, 0);
  }
  100% {
    -webkit-transform: translate3d(0, -50%, 0);
            transform: translate3d(0, -50%, 0);
  }
}
/**
 * Bounce to the left side
 */
@-webkit-keyframes bounceRight {
  0% {
    -webkit-transform: translate3d(0, -50%, 0);
            transform: translate3d(0, -50%, 0);
  }
  50% {
    -webkit-transform: translate3d(calc(100% + 30px), -50%, 0);
            transform: translate3d(calc(100% + 30px), -50%, 0);
  }
  100% {
    -webkit-transform: translate3d(100%, -50%, 0);
            transform: translate3d(100%, -50%, 0);
  }
}
@keyframes bounceRight {
  0% {
    -webkit-transform: translate3d(0, -50%, 0);
            transform: translate3d(0, -50%, 0);
  }
  50% {
    -webkit-transform: translate3d(calc(100% + 30px), -50%, 0);
            transform: translate3d(calc(100% + 30px), -50%, 0);
  }
  100% {
    -webkit-transform: translate3d(100%, -50%, 0);
            transform: translate3d(100%, -50%, 0);
  }
}
/**
 * Show Sign Up form
 */
@-webkit-keyframes showSignUp {
  100% {
    opacity: 1;
    visibility: visible;
    -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
  }
}
@keyframes showSignUp {
  100% {
    opacity: 1;
    visibility: visible;
    -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
  }
}
/**
 * Page background
 */
.user {
  display: -webkit-box;
  display: flex;
  -webkit-box-pack: center;
          justify-content: center;
  -webkit-box-align: center;
          align-items: center;
  width: 100%;
  height: 100vh;
  background: url("#") no-repeat center;
  background-size: cover;
}
.user_options-container {
  position: relative;
  width: 80%;
}
.user_options-text {
  display: -webkit-box;
  display: flex;
  -webkit-box-pack: justify;
          justify-content: space-between;
  width: 100%;
  background-color: rgba(34, 34, 34, 0.85);
  border-radius: 3px;
}

/**
 * Registered and Unregistered user box and text
 */
.user_options-registered,
.user_options-unregistered {
  width: 50%;
  padding: 75px 45px;
  color: #fff;
  font-weight: 300;
}

.user_registered-title,
.user_unregistered-title {
  margin-bottom: 15px;
  font-size: 1.66rem;
  line-height: 1em;
}
















.user_unregistered-text,
.user_registered-text {
  font-size: 0.83rem;
  line-height: 1.4em;
}

.user_registered-login,
.user_unregistered-signup {
  margin-top: 30px;
  border: 1px solid #ccc;
  border-radius: 3px;
  padding: 10px 30px;
  color: #fff;
  text-transform: uppercase;
  line-height: 1em;
  letter-spacing: 0.2rem;
  -webkit-transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out;
  transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out;
}
.user_registered-login:hover,
.user_unregistered-signup:hover {
  color: rgba(34, 34, 34, 0.85);
  background-color: #ccc;
}

/**
 * Login and signup forms
 */
.user_options-forms {
  position: absolute;
  top: 50%;
  left: 30px;
  width: calc(50% - 30px);
  min-height: 420px;
  background-color: #fff;
  border-radius: 3px;
  box-shadow: 2px 0 15px rgba(0, 0, 0, 0.25);
  overflow: hidden;
  -webkit-transform: translate3d(100%, -50%, 0);
          transform: translate3d(100%, -50%, 0);
  -webkit-transition: -webkit-transform 0.4s ease-in-out;
  transition: -webkit-transform 0.4s ease-in-out;
  transition: transform 0.4s ease-in-out;
  transition: transform 0.4s ease-in-out, -webkit-transform 0.4s ease-in-out;
}
.user_options-forms .user_forms-login {
  -webkit-transition: opacity 0.4s ease-in-out, visibility 0.4s ease-in-out;
  transition: opacity 0.4s ease-in-out, visibility 0.4s ease-in-out;
}
.user_options-forms .forms_title {
  margin-bottom: 45px;
  font-size: 1.5rem;
  font-weight: 500;
  line-height: 1em;
  text-transform: uppercase;
  color: black;
  letter-spacing: 0.1rem;
}
.user_options-forms .forms_field:not(:last-of-type) {
  margin-bottom: 20px;
}
.user_options-forms .forms_field-input {
  width: 100%;
  border-bottom: 1px solid #ccc;
  padding: 6px 20px 6px 6px;
  font-family: "Montserrat", sans-serif;
  font-size: 1rem;
  font-weight: 300;
  color: gray;
  letter-spacing: 0.1rem;
  -webkit-transition: border-color 0.2s ease-in-out;
  transition: border-color 0.2s ease-in-out;
}
.user_options-forms .forms_field-input:focus {
  border-color: gray;
}
.user_options-forms .forms_buttons {
  display: -webkit-box;
  display: flex;
  -webkit-box-pack: justify;
          justify-content: space-between;
  -webkit-box-align: center;
          align-items: center;
  margin-top: 35px;
}
.user_options-forms .forms_buttons-forgot {
  font-family: "Montserrat", sans-serif;
  letter-spacing: 0.1rem;
  color: #ccc;
  text-decoration: underline;
  -webkit-transition: color 0.2s ease-in-out;
  transition: color 0.2s ease-in-out;
}
.user_options-forms .forms_buttons-forgot:hover {
  color: #b3b3b3;
}
.user_options-forms .forms_buttons-action {
  background-color: #e8716d;
  border-radius: 3px;
  padding: 10px 35px;
  font-size: 1rem;
  font-family: "Montserrat", sans-serif;
  font-weight: 300;
  color: #fff;
  text-transform: uppercase;
  letter-spacing: 0.1rem;
  -webkit-transition: background-color 0.2s ease-in-out;
  transition: background-color 0.2s ease-in-out;
}
.user_options-forms .forms_buttons-action:hover {
  background-color: #e14641;
}
.user_options-forms .user_forms-signup,
.user_options-forms .user_forms-login {
  position: absolute;
  top: 70px;
  left: 40px;
  width: calc(100% - 80px);
  opacity: 0;
  visibility: hidden;
  -webkit-transition: opacity 0.4s ease-in-out, visibility 0.4s ease-in-out, -webkit-transform 0.5s ease-in-out;
  transition: opacity 0.4s ease-in-out, visibility 0.4s ease-in-out, -webkit-transform 0.5s ease-in-out;
  transition: opacity 0.4s ease-in-out, visibility 0.4s ease-in-out, transform 0.5s ease-in-out;
  transition: opacity 0.4s ease-in-out, visibility 0.4s ease-in-out, transform 0.5s ease-in-out, -webkit-transform 0.5s ease-in-out;
}
.user_options-forms .user_forms-signup {
  -webkit-transform: translate3d(120px, 0, 0);
          transform: translate3d(120px, 0, 0);
}
.user_options-forms .user_forms-signup .forms_buttons {
  -webkit-box-pack: end;
          justify-content: flex-end;
}
.user_options-forms .user_forms-login {
  -webkit-transform: translate3d(0, 0, 0);
          transform: translate3d(0, 0, 0);
  opacity: 1;
  visibility: visible;
}

/**
 * Triggers
 */
.user_options-forms.bounceLeft {
  -webkit-animation: bounceLeft 1s forwards;
          animation: bounceLeft 1s forwards;
}
.user_options-forms.bounceLeft .user_forms-signup {
  -webkit-animation: showSignUp 1s forwards;
          animation: showSignUp 1s forwards;
}
.user_options-forms.bounceLeft .user_forms-login {
  opacity: 0;
  visibility: hidden;
  -webkit-transform: translate3d(-120px, 0, 0);
          transform: translate3d(-120px, 0, 0);
}
.user_options-forms.bounceRight {
  -webkit-animation: bounceRight 1s forwards;
          animation: bounceRight 1s forwards;
}

/**
 * Responsive 990px
 */
@media screen and (max-width: 990px) {
  .user_options-forms {
    min-height: 350px;
  }
  .user_options-forms .forms_buttons {
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
            flex-direction: column;
  }
  .user_options-forms .user_forms-login .forms_buttons-action {
    margin-top: 30px;
  }
  .user_options-forms .user_forms-signup,
  .user_options-forms .user_forms-login {
    top: 40px;
  }

  .user_options-registered,
  .user_options-unregistered {
    padding: 50px 45px;
  }
}
</style>
<script>
  window.console = window.console || function(t) {};
</script>
<script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
</script>\

<script>
  window.console = window.console || function(t) {};
</script>
<script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
</script>


</head>





<body translate="no">
<ul class='slideshow'>
<li>
<h3></h3>

<span>r</span>
</li>
<li>

<span></span>
</li>
<li>

<span></span>
</li>
<li>

<span></span>
</li>
</ul>
</body>
</html>






<section class="user">
<div class="user_options-container">
<div class="user_options-text">
<div class="user_options-unregistered">
<h2 class="user_unregistered-title">Don't have an account?</h2>
<p class="user_unregistered-text"> </p>

<button class="user_unregistered-signup" onclick="myFunction()" id="signup-button">Sign up</button>

</div>
<div class="user_options-registered">
<h2 class="user_registered-title">Have an account?</h2>
<p class="user_registered-text"> </p>
<button class="user_registered-login" id="login-button">Login</button>
</div>
</div>
<div class="user_options-forms" id="user_options-forms">
<div class="user_forms-login">
<h2 class="forms_title">Login</h2>
<form class="forms_form" method="post" action="authenticate.php">
<fieldset class="forms_fieldset">
<div class="forms_field">
<input type="text" placeholder="Name" name="name" class="forms_field-input" required autofocus />
</div>
<div class="forms_field">
<input type="password" placeholder="Password"name="password" class="forms_field-input" required />
</div>
</fieldset>
<a href="forgot.php">
<div class="forms_buttons">
<button type="button" class="forms_buttons-forgot">Forgot password?</button>
<input type="submit" value="Log In" class="forms_buttons-action">
</div>
</a>
</form>
</div>
<div class="user_forms-signup">
<h2 class="forms_title">Sign Up</h2>
<form class="forms_form" method="POST" action="signup.php">
<fieldset class="forms_fieldset">
<div class="forms_field">
<input type="text" placeholder="Name" name="name" class="forms_field-input" required value="<?php if(isset($_POST['name'])) echo $_POST['name']; ?>" />
</div>
<div class="forms_field">
<input type="text" placeholder="Age" name="age" class="forms_field-input" required />
</div>
<div class="forms_field">
<input type="text" placeholder="Contact" name="contact" class="forms_field-input" value="<?php if(isset($_POST['contact'])) echo $_POST['contact']; ?>"required />
</div>
<div class="forms_field">
<label class="radio-inline"><input type="radio" name="gender" value="male" required>Male</label>
&nbsp&nbsp&nbsp&nbsp
<label class="radio-inline"><input type="radio" name="gender" value="female" required>Female</label>
</div>
</fieldset>
<div class="forms_buttons">
<input type="submit" value="Sign up" class="forms_buttons-action">
</div>
</form>
</div>
</div>
</div>
</section>
<script src="https://static.codepen.io/assets/common/stopExecutionOnTimeout-9bf952ccbbd13c245169a0a1190323a27ce073a3d304b8c0fdf421ab22794a58.js"></script>
<script id="rendered-js">
/**
 * Variables
 */
const signupButton = document.getElementById('signup-button'),
loginButton = document.getElementById('login-button'),
userForms = document.getElementById('user_options-forms');

/**
                                                            * Add event listener to the "Sign Up" button
                                                            */
signupButton.addEventListener('click', () => {
  userForms.classList.remove('bounceRight');
  userForms.classList.add('bounceLeft');
}, false);

/**
            * Add event listener to the "Login" button
            */
loginButton.addEventListener('click', () => {
  userForms.classList.remove('bounceLeft');
  userForms.classList.add('bounceRight');
}, false);
//# sourceURL=pen.js
    </script>


<script>
function myFunction() {
  

// API
<?php

include 'connect.php';
$contact=$_POST['contact'];
$name=$_POST['name'];

$query="SELECT  `contact` FROM `information` WHERE   contact=  '$contact'";
    $res=mysqli_query($conn,$query);
    $row=mysqli_fetch_assoc($res);
    $contact= $row['contact'];

    
    $query1="SELECT  `name` FROM `information` WHERE   contact=  '$contact'";
  $res=mysqli_query($conn,$query1);
  $row=mysqli_fetch_assoc($res);
  $name= $row['name'];

// API
?>
</script>


    
</body>
</html>
