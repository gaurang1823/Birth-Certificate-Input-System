 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
 </head>
 <body>

    <header>
        <h2 class="logo"><i class='bx bx-certification bx-rotate-90' style='color:#ffffff'  ></i>Birth Certificate</h2>
        <nav class="navigation">
            <a href="login.php">Home</a>
            <a href="about.php">About</a>
            <a href="admin.php">Admin</a>
            <button class="btnLogin-popup">Login</button>
         </nav>
    </header>
    <div class="wrapper">
        <div class="form-box login">
            <form action="/MyDBMSproject/action_login.php" method=  "post">
            <h1>Login</h1>
            <div class="input-box">
                <input type="text" name = "username" placeholder="Username"
                required>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="password"
                placeholder="Password" id="passwd" name="passwd">
                <i class='bx bxs-lock-alt' ></i>
            </div>
            <div class="remember-forgot">
                <label><input type="checkbox">Remember me</label>
                <a href="#">Forgot password?</a>
            </div>
            <button type="submit" class="btn" name = "submit">Login</button>

            <div class="register-link">
                <p>Dont have an account?<a href="#" class="Register-link">Register </a></p>
            </div>
            </form>
        </div>


        <div class="form-box register">
            <form action="/MyDBMSproject/action_login.php" method = "post">
                <h1>Registration</h1>
                <div class="input-box">
                    <input type="text" id = "fname" name = "fname" placeholder="First Name">
                    <i class='bx bxs-user'></i>
                </div>
                <div class="input-box" >
                    <input type="text" id = "lname" name = "lname" placeholder="Last Name"
                    required>
                    <i class='bx bxs-user'></i>
                </div>
                <div class="input-box">
                    <input type="text" id="phone" name = "phone" placeholder="Phone No."
                    required>
                    <i class='bx bxs-phone'></i>
                </div>
                <div class="input-box">
                    <input type="password" id = "passwd" name = "passwd"
                    placeholder="Password" required>
                    <i class='bx bxs-lock-alt' ></i>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox" name="checkbox">I agree to the terms & conditions</label>
                </div>
                <button type="submit" class="btn" name = "submit">Register</button>

                <div class="login-register">
                    <p>Already have an account?<a href="#" class="login-link">Login </a></p>
                </div>
            </form>
        </div>
    <script src="script.js"></script>

 </body>
 </html>