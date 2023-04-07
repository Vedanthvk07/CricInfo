<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Signup | CricInfo</title>
<?php
include "includes/header_links.php"
?>
    <link href="css/signup.css" rel="stylesheet" />
</head>
<body>
    <body>
    <?php
    include "includes/header.php";
    ?>
        <div id="loading">
        </div>
        <nav aria-label="breadcrumb">
        <ol class="breadcrumb py-2">
            <li class="breadcrumb-item">
                <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
                Signup
            </li>
        </ol>
    </nav>
        <form action="api/signup_submit.php" style="border:1px solid #ccc" method="post">
            <div class="container">
              <h1>Sign Up</h1>
              <p>Please fill in this form to create an account.</p>
              <hr>
              <label for="name"><b>Name</b></label>
              <input type="text" placeholder="Enter Name" name="name" required> 

              <label for="email"><b>Email</b></label>
              <input type="text" placeholder="Enter Email" name="email" required>
              <label for="Phone_no"><b>Phone_no</b></label>
              <input type="text" placeholder="Enter Phone_no" name="Phone_no" required>
          
              <label for="psw"><b>Password</b></label>
              <input type="password" placeholder="Enter Password" name="psw" required>
          
              <label for="psw-repeat"><b>Repeat Password</b></label>
              <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
          
              <label>
                <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
              </label>
          
              <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
          
              <div class="clearfix">
                <button type="button" class="cancelbtn">Cancel</button>
                <button type="submit" class="signupbtn">Sign Up</button>
              </div>
            </div>
          </form>
</body>