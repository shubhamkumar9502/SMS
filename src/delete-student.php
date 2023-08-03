<?php

use school\student\Student;
require 'student-model.php';

$studentvar = new Student();
$studentvar->delete($_GET['id']);