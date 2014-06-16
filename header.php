
<html>
<head>
    <link href='http://fonts.googleapis.com/css?family=Francois+One' rel='stylesheet' type='text/css'>


     <body>
<meta charset="utf8">

    <link rel="stylesheet" href="style.css">
</head>    
<body>


<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="login.css" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js?ver=1.4.2"></script>
  <script src="login.js"></script>

<div class="title">
    <h1>Inside Job</h1>
    <h3>What It's REALLY Like on the Inside</h3>

    <div class="signed-in">
      <?php

      $email = (isset($_SESSION['email']) ? $_SESSION['email'] : null);
      // $email = $_SESSION['email'];

      $user_id = (isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null);
      if (is_numeric($_SESSION['user_id'])){
          echo "<div class='welcome'>
                <p>Hello
                  <a href='account.php'class='userName'>$email</a> Not 
                  <a href='account.php'class='nonUser'>$email</a>?
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
    </div>

</div>

<header>
  <nav>
            <a href="index.php" class="link">Home</a>
            <a href="companies.php" class="link">Companies</a>
            <a href="contact.html" class="link">Contact Us</a>

            <div id="container">
                <div id="loginContainer">
                    <a href="#" id="loginButton"><span>Login</span><em></em></a>
                    <div style="clear:both"></div>
                    <div id="loginBox">                
                        <form id="loginForm">
                            <fieldset id="body">
                                <fieldset>
                                    <label for="email">Email Address</label>
                                    <input type="text" name="email" id="email" />
                                </fieldset>
                                <fieldset>
                                    <label for="password">Password</label>
                                    <input type="password" name="password" id="password" />
                                </fieldset>
                                <input type="submit" id="login" value="Sign in" />
                                <label for="checkbox"><input type="checkbox" id="checkbox" />Remember me</label>
                            </fieldset>
                            <span><a href="#">Forgot your password?</a></span>
                        </form>
                    </div>
                </div>
            </div>
                <!-- Login Ends Here -->

            <a href="login.php" class="login">Log In</a>

  </nav>
</header>


    </body>
</html>