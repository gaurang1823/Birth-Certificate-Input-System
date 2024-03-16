<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>New Applications</title>
   <link rel="stylesheet" href="../css/bootstrap.min.css">
   <link rel="stylesheet" href="../css/all.min.css.css">
   <link rel="stylesheet" href="../css/custom.css">
   <link rel="stylesheet" href="style2.css">
   <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
   <style>
      /* Add your custom styles for the user list here */
      .user-list {
         width: 80%;
         margin: auto;
         margin-top: 20px;
      }

      table {
         width: 100%;
         border-collapse: collapse;
         margin-top: 20px;
      }

      th, td {
         padding: 12px;
         text-align: left;
         border-bottom: 1px solid #ddd;
      }
   </style>
</head>
<body>
    <header>
        <h2 class="logo"><i class='bx bx-certification bx-rotate-90' style='color:#ffffff'  ></i>Birth Certificate</h2>
        <nav class="navigation">
        <button type="button" class="btnLogin-popup" onclick="redirectToDash()">Back
            <i class="uil uil-navigator"></i>
        </button>
        </nav>
    </header>
    <div class="wrapper">
        <div class="user-list">
            <h2>New Applications</h2>
        <table>
            <?php
      require_once 'dbconnection.php';
      
      $sql = "SELECT DISTINCT * FROM child , father , mother, login WHERE child.child_id = father.child_id AND child.child_id = mother.child_id" ;
      $result = $conn->query($sql);
      
      if ($result = $conn->query($sql)) {
        echo "<table><tr><th>Name</th><th>Father</th><th>Mother</th><th>Gender</th><th>Date of Birth</th></tr>";
        // output data of each row

        while($row = $result->fetch_assoc()) {
          echo "<tr><td>".$row["c_fname"]."</td><td>".$row["f_fname"]."</td><td>".$row["m_fname"]."</td><td>".$row["gender"]."</td><td>".$row["c_dob"]."</td></tr>";
        }
        echo "</table>";
      } else {
        echo "0 results";
      }
      $conn->close();
      ?>
            </tbody>
        </table>
        </div>
    </div>

    <script>
        
    function redirectToDash() {
          // Redirect to the login page
          window.location.href = "admin-dashboard.php";
      }

        // Call the function to fetch and display users when the page loads
        window.onload = fetchAndDisplayUsers;
    </script>
</body>
</html>
