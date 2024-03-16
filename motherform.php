<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Home</title>
    <link rel="stylesheet" href="style2.css">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <style>
        .form-section {
            display: none;
        }

        .form-section.active {
            display: block;
        }
    </style>
</head>
<body>
    <header>
        <h2 class="logo"><i class='bx bx-certification bx-rotate-90' style='color:#ffffff'></i>Birth Certificate</h2>
            <nav class="navigation">
                <button class="btnLogin-popup" onclick="redirectToHome()">Back</button>
             </nav>
    </header>

    <div class="form">
        <!-- <form action="action_form.php" method="post" id="submit_child" class="form-section active">
            Birth Certificate Application Form
            <h2>Birth Certificate Application Form</h2>
        <div class="input-box">
        <label for="first_name">First Name:</label>
        <input type="text" id="c_fname" name="c_fname" required>
        <i class='bx bxs-user'></i>
        </div>

        <div class="input-box">
        <label for="middle_name">Middle Name:</label>
        <input type="text" id="c_mname" name="c_mname" required>
        <i class='bx bxs-user'></i>
        </div>

        <div class="input-box">
        <label for="last_name"></label>Last Name:</label>
        <input type="text" id="c_lname" name="c_lname" required>
        <i class='bx bxs-user'></i>
        </div>

        <div class="input-box">
            <label>Gender</label>
            <select class="required" name = "gender" required>
              <option disabled selected>Select gender</option>
              <option value = "male">Male</option>
              <option value="female">Female</option>
              <option value="others">Others</option>
            </select>
          </div>

        <div class="input-box">
        <label for="date_of_birth">Date of Birth:</label>
        <input type="date" id="date_of_birth" name="date_of_birth" required>
        </div>

        <div class="input-box">    
        <label for="place_of_birth">Place of Birth:</label>
        <input type="text" id="place_of_birth" name="place_of_birth" required>
        <i class='bx bx-plus-medical' style='color:#ffffff' ></i>
        </div>

        <div class="input-box">
        <label for="contact_number">Contact Number:</label>
        <input type="tel" id="c_phone" name="c_phone" pattern="[0-9]{10}" required>
        <i class='bx bxs-phone'></i>
        </div>

        <div class="input-box">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <i class='bx bx-envelope' style='color:#ffffff'  ></i>
        </div>

        <div class="input-box">
        <label for="address">Address:</label>
        <textarea id="address" name="address" rows="2" required></textarea>
        <i class='bx bx-home' style='color:#ffffff' ></i>
        </div>

            <button type="button" class="nextBtn" id = "submit_child" onclick="showSection('submit_father')">
                <span class="btnText">Next</span>
                <i class="uil uil-navigator"></i>
            </button>
        </form>


        <form action="action_form.php" method="post" id="submit_father" class="form-section">
            Father's Details Form
                        <h2>Father's Details</h2>
            <div class="input-box">
            <label for="first_name">First Name:</label>
            <input type="text" id="f_fname" name="f_fname" required>
            <i class='bx bxs-user'></i>
            </div>

            <div class="input-box">
            <label for="middle_name">Middle Name:</label>
            <input type="text" id="m_fname" name="m_fname" required>
            <i class='bx bxs-user'></i>
            </div>

            <div class="input-box">
            <label for="last_name"></label>Last Name:</label>
            <input type="text" id="l_fname" name="l_fname" required>
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
            <div class="buttons">
                <button type="button" class="backBtn" onclick="showSection('submit_child')">
                    <i class="uil uil-navigator"></i>
                    <span class="btnText">Back</span>
                </button>

                <button type="button" class="nextBtn" onclick="showSection('submit_mother')">
                    <span class="btnText">Next</span>
                    <i class="uil uil-navigator"></i>
                </button>
            </div>
        </form> -->

        <form action="action_form.php" method="post" id="submit_mother" >
            <!-- Mother's Details Form -->
            <h2>Mother's Details</h2>
            <div class="input-box">
            <label for="first_name">First Name:</label>
            <input type="text" id="m_fname" name="m_fname" required>
            <i class='bx bxs-user'></i>
            </div>
    
            <div class="input-box">
            <label for="middle_name">Middle Name:</label>
            <input type="text" id="m_mname" name="m_mname" required>
            <i class='bx bxs-user'></i>
            </div>
    
            <div class="input-box">
            <label for="last_name"></label>Last Name:</label>
            <input type="text" id="m_lname" name="m_lname" required>
            <i class='bx bxs-user'></i>
            </div>
    
            <div class="input-box">
            <label for="date_of_birth">Date of Birth:</label>
            <input type="date" id="m_date_of_birth" name="m_date_of_birth" required>
            </div>
    
            <div class="input-box">
            <label for="contact_number">Contact Number:</label>
            <input type="tel" id="m_contact_number" name="m_contact_number" pattern="[0-9]{10}" required>
            <i class='bx bxs-phone'></i>
            </div>
    
            <div class="input-box">
            <label for="email">Email(Optional):</label>
            <input type="email" id="m_email" name="m_email" >
            <i class='bx bx-envelope' style='color:#ffffff'  ></i>
            </div>

            <div class="buttons">
                <!-- <button type="button" class="backBtn" onclick="showSection('submit_father')">
                    <i class="uil uil-navigator"></i>
                    <span class="btnText">Back</span>
                </button> -->

                <button type="submit" class="submitBtn" id="submit_mother" name="submit_mother">
                    <span class="btnText">Submit</span>
                    <i class="uil uil-navigator"></i>
                </button>
            </div>
        </form>
    </div>
    
    <script src="script.js"></script>
    <script>
        function showSection(sectionId) {
            // Show the selected form section
            const selectedSection = document.getElementById(sectionId);
            selectedSection.classList.add('active');
        }
        function redirectToHome() {
            // Redirect to the login page
            window.location.href = "home.php";
        }
    </script>
</body>
</html>
