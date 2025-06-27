<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $student_number = $_POST['student_number'];
    $entry_date = $_POST['entry_date'];
    $entry_type = ucfirst(strtolower($_POST['entry_type']));
    $grade = $_POST['grade'];
    $oen = $_POST['oen'];
    $class_homeform = $_POST['class_homeform'];
    $expelled = $_POST['expelled'];

    // Student Info
    $last_name = strtoupper($_POST['last_name']);
    $first_name = ucfirst(strtolower($_POST['first_name']));
    $middle_name = ucfirst(strtolower($_POST['middle_name']));
    $preferred_name = ucfirst(strtolower($_POST['preferred_name']));
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $siblings = $_POST['siblings'];
    $proof = isset($_POST['proof']) ? $_POST['proof'] : [];

    // Previous School info
    $prev_board = ucwords(strtolower($_POST['prev_board']));
    $prev_school = ucwords(strtolower($_POST['prev_school']));
    $last_attended = $_POST['last_attended'];
    $prev_grade = $_POST['prev_grade'];
    $language = $_POST['language'];
    $transfer_reason = ucfirst(strtolower($_POST['transfer_reason']));
    $attended_wrdsb = $_POST['attended_wrdsb'];
    $previous_wrdsb_school = ucwords(strtolower($_POST['previous_wrdsb_school']));

    // Health Info
    $medical_conditions = isset($_POST['medical_conditions']) ? ucfirst(strtolower($_POST['medical_conditions'])) : '';
    $epipen = isset($_POST['epipen']) ? $_POST['epipen'] : '';
    $immunization = isset($_POST['immunization']) ? $_POST['immunization'] : '';

    // Citizenship Info
    $birth_country = ucfirst(strtolower($_POST['birth_country']));
    $province = ucfirst(strtolower($_POST['province']));
    $entry_year = $_POST['entry_year'];
    $entry_month = $_POST['entry_month'];
    $entry_day = $_POST['entry_day'];
    $status = isset($_POST['status']) ? $_POST['status'] : [];
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Registration Details</title>
        <style>
            body
            {
                font-family: Arial, sans-serif;
                margin: 40px;
                background-color: #f4f4f4;
            }

            .main
            {
                background: white;
                padding: 20px;
                border-radius: 8px;
                max-width: 800px;
                margin: auto;
                box-shadow: 0 0 10px rgba(0,0,0,0.1);
            }

            fieldset
            {
                margin-bottom: 30px;
            }

            legend
            {
                background-color: black;
                color: white;
                font-weight: bold;
            }

            h2
            {
                font-family: "Courier New";
                color: black;
                text-align: center;
            }

            hr
            {
                margin-top: 30px;
                margin-bottom: 30px;
            }

            .label
            {
                font-weight: bold;
                color: #555;
            }

            .value
            {
                margin-left: 10px;
                color: #333;
            }
        </style>
    </head>
    <body>
        <div class="main">
            <h2>STUDENT REGISTRATION SUMMARY</h2>

            <hr width="200px">

            <fieldset>
                <legend>School Use Information</legend>
                <p><span class="label">Student Number:</span> <span class="value"><?php echo htmlspecialchars($student_number); ?></span></p>
                <p><span class="label">Entry Date:</span> <span class="value"><?php echo htmlspecialchars($entry_date); ?></span></p>
                <p><span class="label">Entry Type:</span> <span class="value"><?php echo htmlspecialchars($entry_type); ?></span></p>
                <p><span class="label">Grade:</span> <span class="value"><?php echo htmlspecialchars($grade); ?></span></p>
                <p><span class="label">OEN:</span> <span class="value"><?php echo htmlspecialchars($oen); ?></span></p>
                <p><span class="label">Class/Homeform:</span> <span class="value"><?php echo htmlspecialchars($class_homeform); ?></span></p>
                <p><span class="label">Expelled Status:</span> <span class="value"><?php echo htmlspecialchars($expelled); ?></span></p>
            </fieldset>

            <fieldset>
                <legend>Student Information</legend>
                <p><span class="label">Full Name:</span> <span class="value"><?php echo htmlspecialchars("$last_name, $first_name $middle_name"); ?></span></p>
                <?php if (!empty($preferred_name)): ?>
                    <p><span class="label">Preferred Name:</span> <span class="value"><?php echo htmlspecialchars($preferred_name); ?></span></p>
                <?php endif; ?>
                <p><span class="label">Gender:</span> <span class="value"><?php echo htmlspecialchars($gender); ?></span></p>
                <p><span class="label">Date of Birth:</span> <span class="value"><?php echo htmlspecialchars($dob); ?></span></p>
                <p><span class="label">Proof of Birth:</span> <span class="value"><?php echo implode(", ", array_map('htmlspecialchars', $proof)); ?></span></p>
            </fieldset>

            <fieldset>
                <legend>Previous School Information</legend>
                <p><span class="label">Previous School Board:</span> <span class="value"><?php echo htmlspecialchars($prev_board); ?></span></p>
                <p><span class="label">Previous School:</span> <span class="value"><?php echo htmlspecialchars($prev_school); ?></span></p>
                <p><span class="label">Last Attended:</span> <span class="value"><?php echo htmlspecialchars($last_attended); ?></span></p>
                <p><span class="label">Previous Grade:</span> <span class="value"><?php echo htmlspecialchars($prev_grade); ?></span></p>
                <p><span class="label">Language of Instruction:</span> <span class="value"><?php echo htmlspecialchars($language); ?></span></p>
            </fieldset>

            <fieldset>
                <legend>Health Information</legend>
                <p><span class="label">Medical Conditions:</span> <span class="value"><?php echo htmlspecialchars($medical_conditions); ?></span></p>
                <p><span class="label">Requires Epi-pen:</span> <span class="value"><?php echo htmlspecialchars($epipen); ?></span></p>
                <p><span class="label">Immunization Record:</span> <span class="value"><?php echo htmlspecialchars($immunization); ?></span></p>
            </fieldset>

            <fieldset>
                <legend>Citizenship Information</legend>
                <p><span class="label">Birth Country:</span> <span class="value"><?php echo htmlspecialchars($birth_country); ?></span></p>
                <?php if ($birth_country == 'Canada'): ?>
                    <p><span class="label">Province:</span> <span class="value"><?php echo htmlspecialchars($province); ?></span></p>
                <?php endif; ?>
                <?php if ($birth_country != 'Canada'): ?>
                    <p><span class="label">Entry Date:</span> <span class="value"><?php echo htmlspecialchars("$entry_year-$entry_month-$entry_day"); ?></span></p>
                <?php endif; ?>
                <p><span class="label">Status in Canada:</span> <span class="value"><?php echo implode(", ", array_map('htmlspecialchars', $status)); ?></span></p>
            </fieldset>
        </div>
    </body>
    </html>
    <?php
}
?>