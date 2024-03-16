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
        <h2 class="logo"><i class='bx bx-certification bx-rotate-90' style='color:#ffffff'></i>Birth Certificate</h2>
    </header>

    <div class="form">
        <form action="action_form.php" method="post" id="submit_father" >
            <!-- Father's Details Form -->
                        <h2>Father's Details</h2>
            <div class="input-box">
            <label for="first_name">First Name:</label>
            <input type="text" id="f_fname" name="f_fname" required>
            <i class='bx bxs-user'></i>
            </div>

            <div class="input-box">
            <label for="middle_name">Middle Name:</label>
            <input type="text" id="f_mname" name="f_mname" required>
            <i class='bx bxs-user'></i>
            </div>

            <div class="input-box">
            <label for="last_name"></label>Last Name:</label>
            <input type="text" id="f_lname" name="f_lname" required>
            <i class='bx bxs-user'></i>
            </div>

            <div class="input-box">
            <label for="date_of_birth">Date of Birth:</label>
            <input type="date" id="f_date_of_birth" name="f_date_of_birth" required>
            </div>

            <div class="input-box">
            <label for="contact_number">Contact Number:</label>
            <input type="tel" id="f_contact_number" name="f_contact_number" pattern="[0-9]{10}" required>
            <i class='bx bxs-phone'></i>
            </div>

            <div class="input-box">
            <label for="email">Email(Optional):</label>
            <input type="email" id="f_email" name="f_email" >
            <i class='bx bx-envelope' style='color:#ffffff'  ></i>
            </div>
         

                <button type="submit" class="nextBtn" id = "submit_father" name="submit_father">
                    <span class="btnText">Next</span>
                    <i class="uil uil-navigator"></i>
                </button>

        </form>
    </div>
    
    <script src="script.js"></script>
    <script>
        function showSection(sectionId) {
            // Show the selected form section
            const selectedSection = document.getElementById(sectionId);
            selectedSection.classList.add('active');
        }

    </script>
</body>
</html>
