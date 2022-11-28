<?php
// In the include files (where direct access isn't permitted):
defined('_DEFVAR') or exit('Restricted Access');
$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "tensfome";

// Create connection
$conn = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}