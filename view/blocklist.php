<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BondhuShobha</title>
    
</head>
<body>
    <div class="header">
        <div>BondhuShobha</div>
        <input type="text" placeholder="Search for friends">
        <div class="icons">
            <button title="Dark Mode">🌙</button>
            <button title="Notification">🔔</button>
            <button title="Profile">👤</button>
        </div>
    </div>
    <div class="sidebar">
            <button><a href="userfeed.php">User Feed</a></button>
            <button><a href="message.php">Messages</button>
            <button><a href="friends.php">Friends</a></button>
    </div>
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
</body>
</html>
