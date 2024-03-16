<?php

require_once 'dbconnection.php';

// Check if a record ID is provided
if (isset($_POST['childname'])) {
    $recordId = $_POST['child_id'];
    
    // Use prepared statements to prevent SQL injection
    $sql = "DELETE FROM father WHERE child_id=$recordId";
    $stmt = "DELETE FROM child WHERE child_id = $recordId ";

    if ($conn->query($sql)) {
        $conn->query($stmt);
        echo "<script>alert('Data Deleted Successfully!'); window.location.href = 'delete.php';</script>";
    } else {
        echo "Error deleting record: ";
    }

} else {
    echo "Record ID not provided";
}


?>