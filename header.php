<?php


if (is_numeric($_SESSION['user_id'])){
    echo "<div class='welcome'>
          <p>Hello
            <a href='#'class='userName'>$email</a> Not 
            <a href='#'class='nonUser'>$email</a>?
            <button class='signOut'>Sign Out</button>
          </p>
        </div>";
  } else {
    echo "<div class='userButton'>
          <div>
            <button class='signinButton'>Sign In</button><button class='registerButton'>Register</button>
          </div>
        </div>";
  }




?>




<!DOCTYPE html>
<html>
<head>
    
</head>
    <body>

<div class="title">
    <h1>Inside Job</h1>
    <h3>What It's REALLY Like on the Inside</h3>
</div>


<header>
  <nav>
            <a href="index.html" class="link">Home</a>
            <a href="ourwork.html" class="link">Companies</a>
            <a href="contact.html" class="link">Contact Us</a>
            <a href="newuser.php" class="login">Log In</a>
  </nav>
</header>

    </body>
</html>