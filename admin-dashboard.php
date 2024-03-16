<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="style2.css"> <!-- Make sure to link your existing stylesheet -->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
</head>
<body>
    <header>
        <h2 class="logo"><i class='bx bx-certification bx-rotate-90' style='color:#ffffff'></i>Birth Certificate</h2>
    </header>
<div class="wrapper">
    <div class="home">
            <h1> Admin Dashboard</h1>
    <div class="service-boxes">
        <div class="service-box" onclick="redirectToNew()">
            <i class='bx bx-file' ></i>
            <h2>New Applications</h2>
            <p>Process new birth applications</p>
        </div>
        <div class="service-box">
            <i class='bx bx-archive'></i>
            <h2>All Applications</h2>
            <p>Access all birth applications</p>
        </div>

        <div class="service-box" onclick="redirectToUser()">  
            <i class='bx bx-user'></i>
            <h2>Registered Users</h2>
            <p>Manage registered users</p>
        </div>
    </div>
    <div class="admin-link">
        <p>Go Back to Home Page? <a href="login.php" class="login-link">Return</a></p>
    </div>
</div>
</div>
    <script src="script.js"></script>
</body>
</html>
<script>
    function redirectToUser() {
          // Redirect to the login page
          window.location.href = "users.php";
      }
      function redirectToNew() {
          // Redirect to the login page
          window.location.href = "Newapp.php";
      }
</script>