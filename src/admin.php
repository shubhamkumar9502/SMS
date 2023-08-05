<?php
require_once dirname(__FILE__, 1) . '\env.php' ;
require_once 'student/student-model.php';
require_once 'staff/staff-model.php';

use school\staff\staff;
use school\student\Student;

$student = new Student();
$count_student = $student->count_of_students();

$staff = new staff();
$count_staff = $staff->count_of_staffs();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="site.css">
</head>

<body>
    <div class="grid-container">
        <aside>
            <a href="student/student.php">Student</a>
            <a href="staff/staff.php">staff</a>
        </aside>
        <main>
            <div class="admin-grid">
                <div class="card" style="background-color: lightblue">
                    <div class="card-title">Student</div>
                    <div class="card-body">
                        <h3><?= $count_student[0] ?></h3>
                    </div>
                </div>
                <div class="card" style="background-color: azure">
                    <div class="card-title">Staff</div>
                    <div class="card-body">
                        <h3><?= $count_staff[0] ?></h3>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>

</html>