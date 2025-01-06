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
            <div class="content-section">
                <h3>View Sent Friend Requests</h3>
                <div class="friend-row">
                    <span>Username</span>
                    <button>Cancel</button>
                </div>
            </div>
            <div class="content-section">
                <h3>View Received Friend Requests</h3>
                <div class="friend-row">
                    <span>Username</span>
                    <button>Accept</button>
                    <button>Reject</button>
                </div>
                <div class="friend-row">
                    <span>Username</span>
                    <button>Accept</button>
                    <button>Reject</button>
                </div>
                <div class="friend-row">
                    <span>Username</span>
                    <button>Accept</button>
                    <button>Reject</button>
                </div>
            </div>
        </div>
    </div>
    <a href="../controller/logout.php">Logout</a>

</body>
</html>
