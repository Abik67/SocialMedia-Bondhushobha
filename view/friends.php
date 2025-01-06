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
         
<br>
            <button><a href="friendlist.php">Friend Lists</button>
            <button><a href="friendrequests.php">Friend Requests</button>
            <button><a href="followedlist.php">Followed Friends</button>
            <button><a href="blocklist.php">Blocked Users</button>
            <button><a href="reportusers.php">Reported Users</button>
<br>
    <a href="../controller/logout.php">Logout</a>

</body>
</html>
