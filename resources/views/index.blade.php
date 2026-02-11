<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Portal Login</title>>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
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
    background: linear-gradient(135deg, #0f2027 0%, #203a43 50%, #2c5364 100%);
    display: flex;
    justify-content: center;
    align-items: center;
}

.container {
    width: 380px;
    height: 540px;
    position: relative;
    margin: 6% auto;
    background: #fff;
    background-image: linear-gradient(#e1e1e1 1px, transparent 1px);
    background-size: 100% 25px; 
    padding: 5px;
    border-radius: 15px;
    box-shadow: 0 15px 35px rgba(0,0,0,0.5);
    overflow: hidden;
    border-top: 20px solid #fff; 
}

.button-box {
    width: 220px;
    margin: 35px auto;
    position: relative;
    box-shadow: 0 0 10px 5px rgba(0,0,0,0.1);
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
}

#btn {
    top: 0;
    left: 0;
    position: absolute;
    width: 110px;
    height: 100%;
    background: linear-gradient(to right, #f1c40f, #d35400);
    border-radius: 30px;
    transition: .5s;
}

.social-icons {
    margin: 30px auto;
    text-align: center;
    background: #fff; 
    width: fit-content;
    padding: 5px 20px;
    border-radius: 20px;
}

.icon {
    width: 30px;
    height: 30px;
    border-radius: 50%;
    border: 1px solid #ddd;
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    cursor: pointer;
    color: #555;
    display: inline-flex;
    justify-content: center;
    align-items: center;
    margin: 0 5px;
    font-weight: bold;
    font-size: 14px;
    transition: 0.3s;
    background: white;
}

.icon:hover {
    transform: translateY(-3px);
    color: #d35400;
    border-color: #d35400;
}

.input-group {
    top: 180px;
    position: absolute;
    width: 280px;
    transition: .5s;
    background: rgba(255, 255, 255, 0.9); 
    padding: 10px;
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

.input-field:focus {
    border-bottom: 2px solid #d35400; 
}

.submit-btn {
    width: 85%;
    padding: 10px 30px;
    cursor: pointer;
    display: block;
    margin: 30px auto;
    background: linear-gradient(to right, #f1c40f, #d35400);
    border: 0;
    outline: none;
    border-radius: 30px;
    color: #fff;
    font-weight: bold;
    letter-spacing: 1px;
    box-shadow: 0 5px 15px rgba(211, 84, 0, 0.3);
    transition: 0.3s;
}

.submit-btn:hover {
    transform: scale(1.02);
    box-shadow: 0 8px 20px rgba(211, 84, 0, 0.4);
}

.check-box {
    margin: 30px 10px 30px 0;
    accent-color: #d35400; 
}

span {
    color: #555;
    font-size: 12px;
    bottom: 68px;
    font-weight: 500;
}

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
            
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="login()">Log In</button>
                <button type="button" class="toggle-btn" onclick="register()">Sign Up</button>
            </div>

            <div class="social-icons">
                <div class="icon">G+</div> 
                <div class="icon">Tw</div>
                <div class="icon">Fb</div>
            </div>

            <form id="login" class="input-group">
                <input type="text" class="input-field" placeholder="Student ID" required>
                <input type="password" class="input-field" placeholder="Password" required>
                <input type="checkbox" class="check-box"><span>Remember Me</span>
                <button type="submit" class="submit-btn">Enter Class</button>
            </form>

            <form id="register" class="input-group">
                <input type="text" class="input-field" placeholder="Full Name" required>
                <input type="email" class="input-field" placeholder=" Email" required>
                <input type="password" class="input-field" placeholder="Create Password" required>
                <input type="checkbox" class="check-box" required><span>I agree to School Rules</span>
                <button type="submit" class="submit-btn">Enroll Now</button>
            </form>

        </div>
    </div>

    <script >var x = document.getElementById("login");
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
}</script>
</body>
</html>