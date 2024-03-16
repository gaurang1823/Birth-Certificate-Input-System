<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Admin Page</title>
   <link rel="stylesheet" href="style2.css">
   <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <header>
        <h2 class="logo"><i class='bx bx-certification bx-rotate-90' style='color:#ffffff'  ></i>Birth Certificate</h2>
    </header>
    <div class="wrapper">
        <div class="admin">
            <form action="/MyDBMSproject/action_admin.php" method="post">
            <h1>Admin</h1>
            <div class="input-box">
                <input type="text" placeholder="Username"
                id="username" name="username">
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="password"
                placeholder="Password" id="passwd" name="passwd" required>
                <i class='bx bxs-lock-alt' ></i>
            </div>
            <div class="remember-forgot">
                <label><input type="checkbox" >Remember me</label>
                <a href="#">Forgot password?</a>
            </div>
            <button type="submit" class="btn" name="submit">Login</button>

            <div class="admin-link">
                <p>Not an Admin?<a href="login.php" class="login-link">Return </a></p>
            </div>
            </form>
        </div>
    </div>
<script src="script.js"></script>
</body>
</html>
