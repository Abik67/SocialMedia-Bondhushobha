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

        <h1>BondhuShobha</h1>

        <form action="../controller/cmnController.php" method="post">
            <input type="text" name="search" placeholder="Search for friends">
            <button id="srcButton" name="srcSubmit">Search</button>


            <button title="Dark Mode">🌙</button>
            <button title="Notification">🔔</button>
            <button title="Profile">👤</button>

<br>

            <button><a href="userfeed.php">User Feed</a></button>
            <button><a href="message.php">Messages</button>
            <button><a href="friends.php">Friends</a></button>


                    <?php
                        if($msg!=""){
                            echo $msg;
                        }
                    ?>
<br>
<br>
                    <a href="../controller/logout.php">Logout</a>

</body>
</html>
