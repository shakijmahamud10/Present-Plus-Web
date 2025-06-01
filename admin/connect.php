// <?php
// 	$conn = new mysqli('sql106.epizy.com', 'epiz_28857973', 'shakij852', 'epiz_28857973_attendance') or die(mysqli_error());

<?php
// It's good practice to enable error reporting for mysqli
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$conn = new mysqli('sql106.epizy.com', 'epiz_28857973', 'shakij852', 'epiz_28857973_attendance');

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// Optional: You can remove the 'die(mysqli_error())' from the connection line if using the above check.
// The original 'or die(mysqli_error())' is more for procedural style or query errors,
// for mysqli object connection errors, $conn->connect_error is standard.
?>
