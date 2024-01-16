<?php
    session_start();
    include 'connect.php';
     
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $contact = $_POST['contact'];
    
    $sql = "select `name`,`password` from `information` where contact='$contact'";
    $res1=mysqli_query($conn,$sql);
     if(mysqli_num_rows($res1)>0)
      {
        echo "<script> alert('Number provided by you is already register.Kindly use LOGIN') </script>";
        header("refresh:1;login.php");
      }
    else
    {
      $query="INSERT INTO `information`(`name`, `age`, `gender`, `contact`, `password`) VALUES ('$name','$age','$gender','$contact','$contact')";
      $res2=mysqli_query($conn,$query);
      if($res2)
       {
        echo "<script> alert('Details succesfully entered') </script>";
        header("refresh:1;login.php");
       }
    }

