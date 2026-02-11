<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Portal - Staff Access</title>
    <!-- <link rel="stylesheet" href="admin_style.css"> -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }

    body {
        height: 100vh;
        width: 100%;
        /* Same Blackboard Green for consistency */
        background: linear-gradient(135deg, #0f2027 0%, #203a43 50%, #2c5364 100%);
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .container {
        width: 380px;
        height: 580px;
        /* Slightly taller for the extra field */
        position: relative;
        margin: 6% auto;
        background: #fff;
        /* Notebook Paper Texture */
        background-image: linear-gradient(#e1e1e1 1px, transparent 1px);
        background-size: 100% 25px;
        padding: 5px;
        border-radius: 15px;
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.5);
        overflow: hidden;
        border-top: 20px solid #fff;
    }

    /* Admin Icon at top */
    .admin-icon {
        text-align: center;
        margin-top: 10px;
        font-size: 40px;
        color: #36D1DC;
        /* Blue Ink Color */
        background: #fff;
        position: relative;
        z-index: 10;
    }

    .button-box {
        width: 220px;
        margin: 20px auto;
        position: relative;
        box-shadow: 0 0 10px 5px rgba(0, 0, 0, 0.05);
        border-radius: 30px;
        background: #fff;
        border: 1px solid #ddd;
    }

    .toggle-btn {
        padding: 10px 30px;
        cursor: pointer;
        background: transparent;
        border: 0;
        outline: none;
        position: relative;
        font-weight: 700;
        color: #555;
        transition: 0.5s;
        font-family: 'Nunito', sans-serif;
    }

    #btn {
        top: 0;
        left: 0;
        position: absolute;
        width: 110px;
        height: 100%;
        /* BLUE INK GRADIENT (The main change from Student version) */
        background: linear-gradient(to right, #36D1DC, #5B86E5);
        border-radius: 30px;
        transition: .5s;
    }

    .input-group {
        top: 180px;
        position: absolute;
        width: 280px;
        transition: .5s;
        background: rgba(255, 255, 255, 0.9);
        padding: 15px;
        border-radius: 10px;
    }

    .input-field {
        width: 100%;
        padding: 10px 0;
        margin: 5px 0;
        border-left: 0;
        border-top: 0;
        border-right: 0;
        border-bottom: 2px solid #ccc;
        outline: none;
        background: transparent;
        transition: 0.3s;
        font-size: 14px;
        font-family: 'Nunito', sans-serif;
    }

    /* Blue Focus Line */
    .input-field:focus {
        border-bottom: 2px solid #5B86E5;
    }

    .submit-btn {
        width: 100%;
        padding: 12px 30px;
        cursor: pointer;
        display: block;
        margin: 20px auto 0;
        /* Blue Ink Gradient */
        background: linear-gradient(to right, #36D1DC, #5B86E5);
        border: 0;
        outline: none;
        border-radius: 30px;
        color: #fff;
        font-weight: bold;
        letter-spacing: 1px;
        box-shadow: 0 5px 15px rgba(54, 209, 220, 0.3);
        transition: 0.3s;
    }

    .submit-btn:hover {
        transform: scale(1.02);
        box-shadow: 0 8px 20px rgba(54, 209, 220, 0.4);
    }

    .check-box {
        margin: 30px 10px 30px 0;
        accent-color: #5B86E5;
        /* Blue Tick */
    }

    span {
        color: #555;
        font-size: 12px;
        bottom: 68px;
        /* position: absolute; */
        font-weight: 600;
    }

    /* Initial positions */
    #login {
        left: 50px;
    }

    #register {
        left: 450px;
    }
</style>

<body>

    <div class="container">
        <div class="form-box">

            <div class="admin-icon">
                <i class="fas fa-user-shield"></i>
            </div>

            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="login()">Log In</button>
                <button type="button" class="toggle-btn" onclick="register()">Sign Up</button>
            </div>

            <form id="login" class="input-group">
                <input type="text" class="input-field" placeholder="Admin ID / Email" required>
                <input type="password" class="input-field" placeholder="Password" required>
                <input type="checkbox" class="check-box"><span>Remember Me</span>
                <button type="submit" class="submit-btn">Access Dashboard</button>
            </form>

            <form id="register" class="input-group">
                <input type="text" class="input-field" placeholder="Full Name" required>
                <input type="email" class="input-field" placeholder="Staff Email" required>
                <input type="password" class="input-field" placeholder="Create Password" required>
                <!-- <input type="password" class="input-field" placeholder="School Security Code" required> -->
                <input type="checkbox" class="check-box" required><span>I agree to Privacy Policy</span>
                <button type="submit" class="submit-btn">Register Staff</button>
            </form>

        </div>
    </div>

    <script>
        var x = document.getElementById("login");
        var y = document.getElementById("register");
        var z = document.getElementById("btn");

        function register() {
            x.style.left = "-400px";
            y.style.left = "50px";
            z.style.left = "110px";
        }

        function login() {
            x.style.left = "50px";
            y.style.left = "450px";
            z.style.left = "0px";
        }
    </script>
</body>

</html>