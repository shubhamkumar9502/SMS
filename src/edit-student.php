<?php

use school\student\Student;
require 'student-model.php';

    $studentvar = new Student();

    if(isset($_POST['submit'])) {
        $studentvar->edit($_POST);
    } else {
        $student = $studentvar->details($_GET['id']);
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student</title>
    <link rel="stylesheet" href="site.css">
</head>

<body>
    <div class="grid-container">
        <aside>
            <a href="index.php">Home</a>
            <a href="admin.php">Admin Home</a>
            <a href="student.php">Student</a>
        </aside>
        <main>
            <h1>Edit Student</h1>
            <form action="" method="post">
                <label for="">ID</label>
                <input type="text" name="id" id="id" readonly value="<?= $student['id']?>">
                <label for="">First Name</label>
                <input type="text" name="first_name" id="first_name" value="<?= $student['first_name']?>">
                <label for="">Middle Name</label>
                <input type="text" name="middle_name" id="middle_name" value="<?= $student['middle_name']?>">
                <label for="">Last Name</label>
                <input type="text" name="last_name" id="last_name" value="<?= $student['last_name']?>">
                <label for="">Contact Number</label>
                <input type="text" name="contact_no" id="contact_no" value="<?= $student['contact_no']?>" maxlength="10" minlength="10">
                <button name="submit">Submit</button>
            </form>
        </main>
    </div>
</body>

</html>