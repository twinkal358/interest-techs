<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Registration</title>
    <link rel="stylesheet" href="style.css" />
    <style>
        body {
            font-family: "Times New Roman", Georgia, Serif;

        }

        select.interest {
            margin: 0px 0px 15px;
            padding: 20px;
        }
    </style>
</head>

<body>
    <!-- <div class="topnav">
  <a class="active" href="navigation.html">Home</a>
  <a href="#about">About</a>
  <a href="Contact.html">Contact</a>
  <a href="login.php"> Login </a>
  <a href="registration.php"> Register </a>
  <div style="float: right;"><a href="logout.php" class="nav-link"><i class="fas fa-sign-out-alt"></i> Logout</a>
  </div>
</div> -->
    <?php
    require('db.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['username'])) {
        $fullname = stripslashes($_REQUEST['fullname']);
        $fullname = mysqli_real_escape_string($con, $fullname);
        // removes backslashes
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($con, $username);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $interest = stripslashes($_REQUEST['interest']);
        $interest = mysqli_real_escape_string($con, $interest);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);

        $create_datetime = date("Y-m-d H:i:s");
        $query    = "INSERT into `user` ( fullname, username, password, email, interest, create_datetime)
                     VALUES ('$fullname', '$username', '" . md5($password) . "', '$email', '$interest', '$create_datetime')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
    ?>
        <form class="form" action="" method="post">
            <h1 class="login-title">Registration</h1>
            <label> FullName </label>
            <input type="text" class="login-input" name="fullname" placeholder="FullName">
            <label> Username </label>
            <input type="text" class="login-input" name="username" placeholder="Username" required />
            <label> Email </label>
            <input type="text" class="login-input" name="email" placeholder="Email Address">
            <label>Your Interest</label>
            <select name="interest" class="interest" >
                <option value="">music</option>
                <option value="dance"> Dancing</option>
                <option value="sing"> Singing</option>
                <option value="read">codding</option>
                <!-- <option value="swim">Swimmimg</option>
            <option value="watch">Watching</option> -->
            </select><br><br>
            <label> Password </label>
            <input type="password" class="login-input" name="password" placeholder="Password">
            <input type="submit" name="submit" value="Register" class="login-button">
            <p class="link"><a href="login1.php">Click to Login</a></p>
        </form>
    <?php
    }
    ?>
</body>

</html>