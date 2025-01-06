<?php
    //require_once '../controller/cmnController.php'; 
    if(isset($_GET['msg']))
    {
        $msg = $_GET['msg'];
    }
    else
    {
        $msg = "";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BondhuShobha</title>
    
</head>
<body>
    <header>
        <div class="logo">BondhuShobha</div>

        <form action="../controller/cmnController.php" method="post">
            <input type="text" name="search" placeholder="Search for friends">
            <button id="srcButton" name="srcSubmit">Search</button>
        </form>

        <div class="icons">
            <button title="Dark Mode">🌙</button>
            <button title="Notification">🔔</button>
            <button title="Profile">👤</button>
        </div>
    </header>
    <div class="main-content">
        <div class="sidebar">
            <button><a href="userfeed.php">User Feed</a></button>
            <button><a href="message.php">Messages</button>
            <button><a href="friends.php">Friends</a></button>
        </div>
        <div class="content">
            <div class="">
                <div class="friend-list">
                    <?php
                        if($msg!=""){
                            echo $msg;
                        }
                    ?>
             </div>
        </div>
    </div>
</body>
</html>
