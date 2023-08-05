<?php
use school\staff\staff;
require 'staff-model.php';

$staffvar =new staff();
$staffvar->delete($_GET['id']);
