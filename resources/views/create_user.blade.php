<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        background-image: url('https://via.placeholder.com/1600x900'); /* Background image */
        background-size: cover;
        background-position: center;
        font-family: Arial, sans-serif;
        overflow: hidden;
    }

    .container {
        position: relative;
        text-align: center;
        background-color: rgba(255, 255, 255, 0.85); /* Transparent form background */
        padding: 30px;
        border-radius: 20px;
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
        width: 600px;
        max-width: 100%;
        z-index: 1;
        transition: transform 0.5s ease, opacity 0.5s ease;
    }

    .form-group {
        margin: 15px 0;
        text-align: left;
    }

    .form-group label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
    }

    .form-group input {
        width: 100%;
        padding: 10px;
        border-radius: 5px;
        border: 1px solid #ccc;
        font-size: 16px;
        transition: border-color 0.3s ease;
    }

    .form-group input:focus {
        border-color: #007bff;
        outline: none;
    }

    .form-group button {
        background-color: #007bff;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        font-size: 18px;
        cursor: pointer;
        transition: background-color 0.3s ease;
        width: 100%;
    }

    .form-group button:hover {
        background-color: #0056b3;
    }

    .profile-container {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%) scale(0);
        text-align: center;
        background-color: rgba(255, 255, 255, 0.95); /* Transparent profile background */
        padding: 30px;
        border-radius: 20px;
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
        width: 500px;
        height: auto;
        opacity: 0;
        transition: transform 0.5s ease, opacity 0.5s ease;
        z-index: 2;
    }

    .profile-container.active {
        transform: translate(-50%, -50%) scale(1);
        opacity: 1;
    }

    .profile-image img {
        border-radius: 50%;
        border: 2px solid #ccc;
        padding: 10px;
        width: 160px;
        height: 160px;
        filter: grayscale(100%);
        transition: transform 0.3s ease, border-color 0.3s ease, filter 0.3s ease;
    }

    .profile-image img:hover {
        transform: scale(1.1);
        border-color: #007bff;
        filter: grayscale(0);
    }

    .profile-info {
        margin-top: 20px;
    }

    .profile-field {
        background-color: #e0e0e0;
        margin: 10px 0;
        padding: 10px;
        border-radius: 5px;
        font-size: 18px;
        transition: background-color 0.3s ease, color 0.3s ease;
    }

    .profile-field:hover {
        background-color: #87CEFA;
        color: #fff;
    }

    .close-btn {
        background-color: #ff5c5c;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        font-size: 16px;
        cursor: pointer;
        margin-top: 20px;
        transition: background-color 0.3s ease;
    }

    .close-btn:hover {
        background-color: #e60000;
    }

    </style>
</head>
<body>
    <div class="container" id="form-container">
        <div class="profile-image">
           <img src="https://64.media.tumblr.com/9156a39fee5687ee2e1195865ca4617a/4caafae280536c78-84/s500x750/a2f0d57ac08dc617661c8ff467262e1ac423ecba.png" alt="Profile Picture"> <!-- Gambar profil -->
        </div>
        <form id="user-form">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="class">Class</label>
                <input type="text" id="class" name="class" required>
            </div>
            <div class="form-group">
                <label for="npm">NPM</label>
                <input type="text" id="npm" name="npm" required>
            </div>
            <div class="form-group">
                <button type="button" onclick="updateProfile()">Submit</button>
            </div>
        </form>
    </div>

    <div class="profile-container" id="profile-container">
        <div class="profile-image">
            <img src="https://64.media.tumblr.com/9156a39fee5687ee2e1195865ca4617a/4caafae280536c78-84/s500x750/a2f0d57ac08dc617661c8ff467262e1ac423ecba.png" alt="Profile Picture"> <!-- Gambar profil -->
        </div>
        <div class="profile-info">
            <div class="profile-field" id="profile-name"></div>
            <div class="profile-field" id="profile-class"></div>
            <div class="profile-field" id="profile-npm"></div>
        </div>
        <button class="close-btn" onclick="closeProfile()">Close</button>
    </div>

    <script>
    function updateProfile() {
        const name = document.getElementById('name').value;
        const className = document.getElementById('class').value;
        const npm = document.getElementById('npm').value;

        document.getElementById('profile-name').textContent = "Name: " + name;
        document.getElementById('profile-class').textContent = "Class: " + className;
        document.getElementById('profile-npm').textContent = "NPM: " + npm;

        const formContainer = document.getElementById('form-container');
        const profileContainer = document.getElementById('profile-container');

        formContainer.style.transform = 'scale(0.9)';
        formContainer.style.opacity = '0.5';

        profileContainer.classList.add('active');
    }

    function closeProfile() {
        const formContainer = document.getElementById('form-container');
        const profileContainer = document.getElementById('profile-container');

        profileContainer.classList.remove('active');
        formContainer.style.transform = 'scale(1)';
        formContainer.style.opacity = '1';
    }
    </script>
</body>
</html>
