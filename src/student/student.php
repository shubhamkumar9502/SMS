<?php
require "student-model.php";

use school\student\Student;

$student = new Student();
$students = $student->index();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read Student</title>
    <link rel="stylesheet" href="../site.css">
</head>

<body>
    <div class="grid-container">
        <aside>
            <?php require('../sidebar.php')?>
        </aside>
        <main>
            <h1>List of Students</h1>
            <a href="new-student.php" class="btn btn-primary m-3">New Student</a>
            <table class="table" cellspacing="0">
                <tr>
                    <th>Id</th>
                    <th>First Name</th>
                    <th>Middle Name</th>
                    <th>Last name</th>
                    <th>Contact Number</th>
                    <th></th>
                    <th></th>
                </tr>
                <?php
                foreach ($students as $student) {
                ?>
                    <tr>
                        <td><?= $student['id'] ?></td>
                        <td><?= $student['first_name'] ?></td>
                        <td><?= $student['middle_name'] ?></td>
                        <td><?= $student['last_name'] ?></td>
                        <td><?= $student['contact_no'] ?></td>
                        <td><a href="<?php echo 'edit-student.php?id=' . $student['id']?>">Edit</a></td>
                        <td><a href="<?php echo 'delete-student.php?id=' . $student['id']?>">Delete</a></td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </main>
    </div>
</body>

</html>