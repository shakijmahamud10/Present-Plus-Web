// <?php
// 	require_once 'admin/connect.php';
// 	$student = $_POST['student'];
// 	$q_student = $conn->query("SELECT * FROM `student` WHERE `student_no` = '$student'") or die(mysqli_error());
// 	$v_student = $q_student->num_rows;
// 	if($v_student > 0){
// 		echo 'Success';
// 	}else{
// 		echo 'Error';
// 	}

<?php
ini_set('display_errors', 1); // Optional: for debugging, remove in production
ini_set('display_startup_errors', 1); // Optional: for debugging, remove in production
error_reporting(E_ALL); // Optional: for debugging, remove in production

require_once 'admin/connect.php'; // This connects to the database

if (isset($_POST['student'])) {
    $student_no = $_POST['student'];

    // Use prepared statements to prevent SQL injection
    $stmt = $conn->prepare("SELECT student_no FROM `student` WHERE `student_no` = ?");
    if ($stmt === false) {
        // die() can be too abrupt. Consider logging errors or a more user-friendly message.
        die("Prepare failed: (" . $conn->errno . ") " . $conn->error);
    }

    $stmt->bind_param("s", $student_no); // "s" means the data type is string

    if ($stmt->execute()) {
        $stmt->store_result(); // Necessary to get num_rows
        if ($stmt->num_rows > 0) {
            echo 'Success';
        } else {
            echo 'Error: Student not found'; // More specific error
        }
        $stmt->close();
    } else {
        // die() can be too abrupt.
        die("Execute failed: (" . $stmt->errno . ") " . $stmt->error);
    }

} else {
    echo 'Error: Student ID not provided';
}

// $conn->close(); // Good practice to close the connection if it's not persistent and no more queries follow.
                 // However, PHP often closes it automatically at the end of script execution.
?>
