<?php
    include "connection.php";
    include "navbar.php";
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student login</title>
    <link rel="shortcut icon" href="images/favicon/favicon-16x16.png">
    <link rel="stylesheet" type="text/css" href="css/mystyle.css">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<style type="text/css">
    section
    {
      margin-top: -20px;
    }
  </style>   
  
</head>
<body>
   <!--
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
              <a class="navbar-brand active">ONLINE LIBRARY MANAGEMENT SYSTEM</a>
            </div>
            <ul class="nav navbar-nav">
              <li><a href="index.php">HOME</a></li>
              <li><a href="books.php">BOOKS</a></li>
              <li><a href="feedback.php">FEEDBACK</a></li>
            </ul>
  
            <ul class="nav navbar-nav navbar-right">
  
              <li><a href="student_login.php"><span class="glyphicon glyphicon-log-in"> LOGIN</span></a></li>
              <li><a href="student_login.php"><span class="glyphicon glyphicon-log-out"> LOGOUT</span></a></li>
              <li><a href="registration.php"><span class="glyphicon glyphicon-user"> SIGN UP</span></a></li>
            </ul>
  
        </div>
      </nav> 

-->
<!--
    <header>
        <div class="logo">
            <img src="images/logo/book.png.png" height="85px" width="105px">
            <h1 style="color:white ; font-size: 20px;">ONLINE LIBRARY MANAGEMENT SYSTEM</h1>
            </div>
             <nav>
                 <ul>
                     <li> <a href="index.html">HOME</a></li>
                     <li> <a href="books.html">BOOKS</a></li>
                     <li> <a href="student_login.html">STUDENT-LOGIN</a></li>
                     <li> <a href="registration.html">REGISTRATION</a></li>
                     <li> <a href="">FEEDBACK</a></li>
 
                 </ul>
             </nav>
    </header>
-->
    <section>
        <div class="log_img">
            <br>
            <div class="box1">
                <h1 style="text-align: center; font-size: 35px; font-family: Lucida Console;"> Library <br>Management System</h1>
                <h1 style="text-align: center; font-size: 25px;">user login form</h1>


                <form name="login" action="" method="post">
                    <br> 
                    <div class="login">
                        <input  class="form-control" type="text" name="username" placeholder="username"><br><br>
                        <input  class="form-control" type="password" name="password" placeholder="password"><br><br>
                       <center><input class="btn btn-default" type="submit" name="submit" value="login" style="color:rgb(235, 235, 247);
                        border-color: black; background-color: blue; width:80px" ></center> 
                    </div>
               
                <p style="padding: 10px;">
                    <br> <br>
                    <a style="color: white; font-size: 22px;"  href="">forgot password?</a> &nbsp &nbsp &nbsp &nbsp &nbsp  
                    <a style="color: white; float: right; font-size: 22px;" href="registration.html"> Sign up</a>
                </p>
            </form>
            </div>
            
        </div>
    </section>

        <?php

         if(isset($_POST['submit']))

            {
                $count=0;
                $res=mysqli_query($db,"SELECT * FROM `student` WHERE username='$_POST[username]' && password='$_POST[password]';");
                $count=mysqli_num_rows($res);

                if($count==0)
                {
                    ?>
                   <!-- <script type="text/javascript">
                     alert("The username and password doesn't match.");
                    </script> -->

                    <div class="alert alert-danger" style="width: 700px; margin-left:100px;">
                    <strong>
                            The username and password doesn't match
                    </strong>

                    </div>
                  <?php
                }
                else
                {
                    
                    ?>
                    <script type="text/javascript">
                    window.location="index.php"
                    </script>
                    <?php
                }

            }

        ?>
</body>
</html>