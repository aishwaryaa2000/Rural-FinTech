<?php
    @session_start();
    include 'connect.php';
     
    //Obtained from the login page i.e index.php using a form
    $name = $_POST['name'];
    $password = $_POST['password'];
    $_SESSION['name']=$name;
    $_SESSION['password']=$password;
    
    //check if the user is admin
    $query = "SELECT * FROM `information` WHERE name='$name' and password='$password'";
    $res = mysqli_query($conn, $query);
    if(mysqli_num_rows($res) > 0)
            {
                $_SESSION['name']=$name;
                $_SESSION['password']=$password;
                header('Location: profession.php');
            }
            else{
                echo "<script> alert('enter correct details') </script>";
                header("refresh:1;login.php");
                
            }
?>