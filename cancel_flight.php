<?php
session_start();
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_SESSION['user_id'])) {
        $user_id = $_SESSION['user_id'];
        $flight_id = $_POST['flight_id'];

        $query = "DELETE FROM booking WHERE id = ? AND users_id = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("ii", $flight_id, $user_id);

        if ($stmt->execute()) {
            echo "Flight cancellation successful!";
        } else {
            echo "Error: Flight cancellation failed.";
        }

        $stmt->close();
    } else {
        echo "Error: User not authenticated.";
    }
}
?>
