<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BondhuShobha Profile Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .header {
            background-color: #3b5998;
            color: white;
            padding: 10px;
            text-align: center;
        }
        .header input {
            width: 200px;
            padding: 5px;
        }
        .header button {
            margin-left: 10px;
            padding: 5px 10px;
        }
        .container {
            margin: 20px;
        }
        .profile-section {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .profile-section img {
            border-radius: 50%;
            width: 100px;
            height: 100px;
            background-color: #ccc;
        }
        .profile-section button {
            margin-top: 10px;
            padding: 5px 10px;
        }
        .info-section {
            margin-top: 20px;
        }
        .info-section div {
            margin-bottom: 10px;
        }
        .info-section label {
            display: inline-block;
            width: 100px;
        }
        .info-section input {
            padding: 5px;
            width: 200px;
        }
        .info-section button {
            padding: 5px 10px;
        }
    </style>
</head>
<body>
    <div class="header">
        <span>BondhuShobha</span>
        <input type="text" placeholder="Search for friends">
        <button>Dark Mode</button>
        <button>Notification</button>
        <button>Profile</button>
    </div>
    <div class="container">
        <button>User Feed</button>
        <div class="profile-section">
            <img src="#" alt="Profile Photo">
            <button>Upload</button>
            <div>Bio</div>
            <div>
                <label for="name">Name:</label>
                <input type="text" id="name">
                <button>Edit Info</button>
            </div>
        </div>
        <div class="info-section">
            <div>
                <label for="email">Email:</label>
                <input type="email" id="email">
            </div>
            <div>
                <label for="gender">Gender:</label>
                <input type="text" id="gender">
            </div>
            <div>
                <label for="dob">DOB:</label>
                <input type="date" id="dob">
            </div>
            <button>Change Password</button>
        </div>
        <button>Account Deactivate/Delete</button>
    </div>
</body>
</html>
