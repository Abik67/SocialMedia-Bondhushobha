<?php
    //require_once '../controller/cmnController.php'; 
    session_start();
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
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        header {
            background-color: #3b5998;
            color: white;
            padding: 10px 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        header .logo {
            font-size: 24px;
            font-weight: bold;
        }
        header input[type="text"] {
            width: 300px;
            padding: 8px;
            border: none;
            border-radius: 4px;
        }
        header .icons {
            display: flex;
            gap: 15px;
        }
        header .icons button {
            background-color: white;
            border: none;
            border-radius: 50%;
            width: 30px;
            height: 30px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .main-content {
            display: flex;
            margin: 20px;
        }
        .sidebar {
            width: 200px;
            display: flex;
            flex-direction: column;
            gap: 10px;
        }
        .sidebar button {
            padding: 10px;
            font-size: 16px;
            background-color: #ddd;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .sidebar button:hover {
            background-color: #ccc;
        }
        .content {
            flex-grow: 1;
            padding: 20px;
        }
        a {
      color: inherit;
      text-decoration: none;
    }

    a:visited {
      color: inherit;
    
    }

    .card{
        background-color: white;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
    }

    </style>
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
            <button title="Profile"><button title="Profile"><b><?php echo $_SESSION['user_name']; ?></b></button>
        </div>
    </header>
    <div class="main-content">
        <div class="sidebar">
            <button><a href="userfeed.php">User Feed</a></button>
            <button><a href="../users.php">Messages</button>
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
