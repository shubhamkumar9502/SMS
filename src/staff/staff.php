<?php
require "staff-model.php";

use school\staff\staff;

$staff = new staff();
$staffs = $staff->index();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read staff</title>
    <link rel="stylesheet" href="../site.css">
</head>

<body>
    <div class="grid-container">
        <aside>
            <?php require('../sidebar.php') ?>
        </aside>
        <main>
            <h1>List of Staffs</h1>
            <a href="new-staff.php" class="btn btn-primary m-3">New Staff</a>
            <?php
            if ($staffs != null) {
            ?>
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
                    foreach ($staffs as $staff) {
                    ?>
                        <tr>
                            <td><?= $staff['id'] ?></td>
                            <td><?= $staff['first_name'] ?></td>
                            <td><?= $staff['middle_name'] ?></td>
                            <td><?= $staff['last_name'] ?></td>
                            <td><?= $staff['contact_no'] ?></td>
                            <td><a href="<?php echo 'edit-staff.php?id=' . $staff['id'] ?>">Edit</a></td>
                            <td><a href="<?php echo 'delete-staff.php?id=' . $staff['id'] ?>">Delete</a></td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
            <?php
            } else {
                echo "</p>No Records found!</p>";
            }
            ?>
        </main>
    </div>
</body>

</html>