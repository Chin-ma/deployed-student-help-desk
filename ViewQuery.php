<?php 
$add = 'Reply : ';
$colon = ' : ';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no">
    <meta name="HandheldFriendly" content="true">
    <title>Student Help Desk</title>
    <link rel="android-chrome-512x512.png icon" href="favicon.ico">
    <link rel="stylesheet" href="Landing.css">
    <link rel="stylesheet" href="QueryList.css">
</head>
<body>
    <div class="back">
        <img src="OneStop_800x533 1.png" alt="1" class="logo-img" id="lg1">
        <img src="OneStop_800x533 1.png" alt="2" class="logo-img" id="lg2">
        <img src="OneStop_800x533 1.png" alt="3" class="logo-img" id="lg3">
        <img src="OneStop_800x533 1.png" alt="4" class="logo-img" id="lg4">
    </div>
    <div class="navbar">
        <div class="header" onclick="window.location.href='index.php'">
            Student Help Desk
        </div>
        <div class="btn-links">
            <a href="Login_page.php" class="login">Logout</a>
        </div>    
    </div>
    <div class="query-head">
        <span class="y-query">Your Queries</span>
    </div>
    <form action="Search.php" method="post">
        <div class="search-data">
            <input type="text" placeholder="Search your query" name="search" class="query-search" id="q-serach">
        </div>
    </form><br>
    <div class="box">
    <?php
            include 'Config.php';
            $sql = mysqli_query($conn, "SELECT * FROM queries ORDER BY querytime DESC");
            while ($row = mysqli_fetch_array($sql)) { ?>
                <div class="timestamp" id="q-time">
                    <?php echo $row['querytime'];?>
                </div>
                <div class="query">
                    <?php echo $row['name'].$colon.$row['querytext'];?>
                </div>
                <?php 
                    if ($row['reply']) { ?>
                        <div class="timestamp" id="r-time">
                            <?php echo $row['replytime'];?>
                        </div>
                    <?php }?> 
                <div class="query-reply" id="quer">
                    <?php 
                        if ($row['reply']) {
                            echo $add.$row['reply'];
                        } else {
                            echo $row['reply'];
                        }
                    ?>
                    
                </div>
                
            <?php }?>
    </div> 
</body>         
</html>