<?php 
include 'Header.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="Query.css">
</head>
<body>
    <div class="query-form">
        <div class="heading">
            <span class="query-head">Your Query</span>
        </div>
        <form action="Query.php" method="post">
            <input type="text" name="name" class="user-data" id="u-name" placeholder="Your name">
            <input type="text" name="subject" class="user-data" id="u-sub" placeholder="Subject">  
            <textarea name="querytext" id="q-text" placeholder="Type here ..."></textarea>
            <div class="action-btns">
                <a href="Home.php">
                    <button class="sub-btn" type="submit">Post</button>
                </a>
            </div>
        </form>
        <a href="Home.php">
            <button class="can-btn">Cancel</button>
        </a>
    </div>
</body>
</html>