<?php

use school\staff\staff;

require 'staff-model.php';

if (isset($_POST['submit'])) {
    $staff = new staff();
    $staff->create($_POST);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Staff</title>
    <link rel="stylesheet" href="../site.css">
</head>

<body>
    <div class="grid-container">
        <aside>
            <a href="../index.php">Home</a>
            <a href="../admin.php">Admin Home</a>
            <a href="student.php">Student</a>
        </aside>
        <main>
            <h1>New Staff</h1>
            <form action="" method="post">
                <label for="">First Name</label>
                <input type="text" name="first_name" id="first_name">
                <label for="">Middle Name</label>
                <input type="text" name="middle_name" id="middle_name">
                <label for="">Last Name</label>
                <input type="text" name="last_name" id="last_name">
                <label for="">Contact Number</label>
                <input type="text" name="contact_no" id="contact_no" maxlength="10" minlength="10">
                <button name="submit">Submit</button>
            </form>
        </main>
    </div>
</body>

</html>