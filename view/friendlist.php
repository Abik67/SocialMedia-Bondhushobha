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
    <div class="sidebar">
             <button><a href="userfeed.php">User Feed</a></button>
            <button><a href="message.php">Messages</button>
            <button><a href="friends.php">Friends</a></button>
    </div>
    <div class="content">
        <h2>Friend Lists</h2>
        <div class="friend-list">
            <div class="friend-item">
                <span>Username</span>
                <button>View Profile</button>
                <button class="unfriend">Unfriend</button>
            </div>
            <div class="friend-item">
                <span>Username</span>
                <button>View Profile</button>
                <button class="unfriend">Unfriend</button>
            </div>
            <div class="friend-item">
                <span>Username</span>
                <button>View Profile</button>
                <button class="unfriend">Unfriend</button>
            </div>
        </div>
    </div>
    <a href="../controller/logout.php">Logout</a>

</body>
</html>
