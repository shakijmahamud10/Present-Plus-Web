<?php
function get_client_ip()
{
    $ipaddress = '';
    if (isset($_SERVER['HTTP_CLIENT_IP']))
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    else if (isset($_SERVER['HTTP_X_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if (isset($_SERVER['HTTP_X_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    else if (isset($_SERVER['HTTP_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    else if (isset($_SERVER['HTTP_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    else if (isset($_SERVER['REMOTE_ADDR']))
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}


echo "Your IP address is: " . get_client_ip();

require_once 'admin/connect.php';
$student = $_POST['student'];
$time = date("H:i", strtotime("+22 HOURS"));
$date = date("Y-m-d", strtotime("+10 HOURS"));
$q_student = $conn->query("SELECT * FROM `student` WHERE `student_no` = '$student'") or die(mysqli_error());
$f_student = $q_student->fetch_array();
$student_name = $f_student['firstname'] . " " . $f_student['lastname'];
$conn->query("INSERT INTO `time4` VALUES('', '$student', '$student_name', '$time', '$date')") or die(mysqli_error());
echo "<h3 class = 'text-muted'>" . $student_name . " <label class = 'glyphicon glyphicon-ok-sign' 'text-info'></label></h3>";
 
// Function to get the client IP address
