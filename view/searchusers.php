<?php
    require_once '../model/dbquery.php';
    $userId=$_GET['result'];
    $result = get_user_info_by_id($userId);
    $row=$result->fetch_assoc();
    $name=$row['name'];
    $email=$row['email'];
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

    <div class="content">
        <h2>Username Found</h2>
        <p>Below matched usernames:</p>
        <div class="friend-list">
        <div class="friend-item">
                <span><?php echo $name ?></span>
                <button>Add Friend</button>
            </div>
         
        </div>
    </div>
    <a href="../controller/logout.php">Logout</a>

</body>
</html>
