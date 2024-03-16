<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Home</title>
    <link rel="stylesheet" href="style2.css">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
</head>
<body>
    <header>
        <h2 class="logo"><i class='bx bx-certification bx-rotate-90' style='color:#ffffff'  ></i>Birth Certificate</h2>
    </header>
    <div class="wrapper">
        <div class="home">
            <h1>Welcome, User!</h1>
            
            <div class="service-boxes">
                <div class="service-box" onclick="redirectToForm()">
                    <i class='bx bx-file'></i>
                    <h2>Application Form</h2>
                    <p>Process new birth application</p>
                </div>
                <div class="service-box" onclick="redirectToDelete()">
                <i class='bx bx-trash' style='color:#f1eded'  ></i>
                    <h2>Delete Application</h2> 
                    <p>Delete existing birth reports</p>
                </div>
                
                <div class="service-box" >
                    <i class='bx bx-download'></i>
                    <h2>Download Certificate</h2>
                    <p>Download existing birth records</p>
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
      function redirectToForm() {
            // Redirect to the login page
            window.location.href = "childform.php";
        }
      function redirectToDelete() {
            // Redirect to the login page
            window.location.href = "delete.php";
        }
</script>

