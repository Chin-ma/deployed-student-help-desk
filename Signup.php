<?php include 'Header.php';?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="Landing.css">
    <link rel="stylesheet" href="Signup.css">
</head>

<body>
    <div class="form-box">
        <form action="Data.php" method="post">
            <input type="text" name="studname" id="stud" class="field" placeholder="Student name">
            <input type="text" name="username" id="user" class="field" placeholder="Username">
            <input type="email" name="email" id="studmail" class="field" placeholder="Email">
            <input type="password" name="password" id="pass" class="field" placeholder="Password"><i class="fa fa-eye" id="eye" onclick="show('pass')"></i>
            <button class="log-btn">Sign In</button>
        </form>
        <span class="state">Already have an account? <a href="Login_page.php">Login</a></span>
    </div>
    <script>
        function show(id) {
            var x = document.getElementById(id)
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>
</body>

</html>