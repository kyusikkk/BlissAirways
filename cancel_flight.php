<?php
session_start();
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['flight_id'])) {
        $flight_id = $_POST['flight_id'];
        $query = "DELETE FROM booking WHERE id = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("i", $flight_id);
        if ($stmt->execute()) {
            echo 'success';
        } else {
            echo 'error';
        }
        $stmt->close();
    }
}
?>
