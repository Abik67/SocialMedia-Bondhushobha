<?php
require_once '../model/dbquery.php';
session_start();
$result = get_FriendList($_SESSION['user_id']);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BondhuShobha</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .header {
            background-color: #3b5998;
            color: white;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px 20px;
        }
        .header input {
            padding: 5px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        .header .icons button {
            background-color: #fff;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
            margin-left: 5px;
            cursor: pointer;
        }
        .sidebar {
            width: 200px;
            background-color: #f4f4f4;
            padding: 10px;
            position: fixed;
            top: 50px;
            bottom: 0;
        }
        .sidebar button {
            display: block;
            width: 100%;
            background-color: white;
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 5px;
            cursor: pointer;
            text-align: left;
        }
        .content {
            margin-left: 220px;
            padding: 20px;
        }
        .content h2 {
            margin-top: 0;
        }
        .friend-list {
            border: 1px solid #ccc;
            width: 50%;
            padding: 10px;
            border-radius: 5px;
        }
        .friend-item {
            display: flex;
            justify-content: space-between;
            
            align-items: center;
            padding: 5px 0;
            border-bottom: 1px solid #eee;
        }
        .friend-item:last-child {
            border-bottom: none;
        }
        .friend-item button {
            background-color: #3b5998;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
            cursor: pointer;
        }
        .friend-item .unfriend {
            background-color:rgb(244, 71, 71);
        }
        a {
      color: inherit;
      text-decoration: none;
    }

    a:visited {
      color: inherit;
    }
    </style>
</head>
<body>
    <div class="header">
        <div>BondhuShobha</div>
        <input type="text" placeholder="Search for friends">
        <div class="icons">
            <button title="Dark Mode">🌙</button>
            <button title="Notification">🔔</button>
            <button title="Profile"><?php echo $_SESSION['user_name']; ?></button>
        </div>
    </div>
    <div class="sidebar">
             <button><a href="userfeed.php">User Feed</a></button>
            <button><a href="message.php">Messages</button>
            <button><a href="friends.php">Friends</a></button>
    </div>
    <div class="content">
        <h2>Friend Lists</h2>
        <div class="friend-list">
            <?php
            if($result->num_rows > 0)
            {
                while($row = $result->fetch_assoc())
                {
                    $tmpResult=get_user_info_by_id($row['f_id']);
                    $tmprow=$tmpResult->fetch_assoc();
                    ?>
                    <div class="friend-item">
                        <div>
                            <strong><?php echo $tmprow['name']; ?></strong>
                        </div>
                       
                        <div style="display: flex; gap: 10px; ">
                            <div><button class="message">Message</button></div>
                            <div>
                                <form action="../controller/cmnController.php" method="post">
                                    <input type="hidden" name="friendId" value="<?php echo $row['f_id']; ?>">
                                    <input type="hidden" name="action" value="unfriend">
                                    <button class="unfriend" name="unfriend">Unfriend</button>
                                </form>
                            </div>
                            <div>
                                <form action="../controller/cmnController.php" method="post">
                                    <input type="hidden" name="friendId" value="<?php echo $row['f_id']; ?>">
                                    <input type="hidden" name="action" value="block">
                                    <button class="unfriend" name="block">Block</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            }
            else
            {
                ?>
                <div>No friends found</div>
                <?php
            }
            ?>
           
        </div>
    </div>
</body>
</html>
