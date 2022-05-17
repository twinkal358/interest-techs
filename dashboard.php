<?php
//include auth_session.php file on all user panel pages
 include("auth_session.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="dashboardstyle.css" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">

    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">

    <!-- Awesome font size  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awseome/4.7.0/css/font-awesome.min.css">
 
</head>
<style>
    .dropbtn {
        background-color: #3498DB;
        color: white;
        padding: 16px;
        font-size: 16px;
        border: none;
        cursor: pointer;
    }

    .dropbtn:hover,
    .dropbtn:focus {
        background-color: #460d2a;
    }

    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f1f1f1;
        min-width: 160px;
        overflow: auto;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }

    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    .dropdown a:hover {
        background-color: #460d2a;
    }

    .show {
        display: block;
    }
</style>

<body>
    <!-- Top Navbar -->
    <nav class="navbar navbar-dark fixed-top p-0 shadow" style="background-color: #460d2a;  height: 50px;">
        <a href="dashboard.php" class="navbar-brand col-sm-3 col-md-2 mr-0"> <strong>Interest</strong> <small class="text-white"> </small></a>
    </nav>



    <!-- Side Bar -->
    <div class="container-fluid mb-5" style="margin-top: 40px;">
        <div class="row">
            <nav class="col-sm-3 col-md-2 bg-light sidebar py-5 d-print-none">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a href="dashboard.php" class="nav-link">
                                <i class="bi bi-palette-fill"></i>
                                Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="confession.html" class="nav-link">
                                <i class="bi bi-box2-heart"></i>
                                Confession
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php" class="nav-link">
                                <i class="bi bi-chat-dots"></i>
                                Chat
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="Diary.html" class="nav-link">
                                <i class="bi bi-emoji-heart-eyes"></i>
                                Diary
                            </a>
                        </li>
                        <div class="dropdown">
                            <button onclick="myFunction()" class="dropbtn"><i class="bi bi-award-fill"></i>Interest</button>
                            <div id="myDropdown" class="dropdown-content">
                                <a href="music.html">music</a>
                                <a href="explore.html">Dance</a>
                                <a href="codding.html">Codding</a>
                            </div>
                        </div>

                        </li>
                        <li class="nav-item">
                            <a href="logout.php" class="nav-link">
                                <i class="bi bi-box-arrow-right"></i>
                                Logout
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="col-sm-9 mt-5">
                <div class="mx-5 mt-5 text-center">
                    <p class="bg-dark text-white p-2"> Welcome to Dashboard. </p>
                    <table class="table">
                        <thead>
                            <tr>
                                <p>Hey, <?php echo $_SESSION['username']; ?>!</p>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    /* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
    function myFunction() {
        document.getElementById("myDropdown").classList.toggle("show");
    }

    // Close the dropdown if the user clicks outside of it
    window.onclick = function(event) {
        if (!event.target.matches('.dropbtn')) {
            var dropdowns = document.getElementsByClassName("dropdown-content");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                }
            }
        }
    }
    // var urlMenu=document.getElementById('');
    // urlMenu.onchange= function()
    // {
    //     var useroption =this.options[ this.seectIndex];
    //     if(useroption.value!= "nothing")
    //     {
    //         window.open(useroption.value,"Dance music codding","");
    //     }
    // }
</script>

</html>