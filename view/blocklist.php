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
        <h2>Add user to block list</h2>
        <div class="block-list">
            <div class="block-item">
                <span>Username</span>
                <button>Block</button>
            </div>
        </div>
        <h2>Blocked Lists</h2>
        <div class="blocked-list">
            <div class="blocked-item">
                <span>Username</span>
                <button class="unblock">Unblock</button>
            </div>
            <div class="blocked-item">
                <span>Username</span>
                <button class="unblock">Unblock</button>
            </div>
            <div class="blocked-item">
                <span>Username</span>
                <button class="unblock">Unblock</button>
            </div>
        </div>
    </div>
    <a href="../controller/logout.php">Logout</a>

</body>
</html>
