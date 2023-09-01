<?php
session_start();
include('conn.php');
if(isset($_POST['appointmentId'])) {
    $appointmentId = $_POST['appointmentId'];
    $sql = "DELETE FROM appointments_form_data WHERE AppointmentFormID='" . $appointmentId . "'";
    if (mysqli_query($conn, $sql)) {
        $_SESSION['success_message'] = "Appointment canceled successfully";
    } else {
        $_SESSION['error_message'] = "Error canceling appointment: " . mysqli_error($conn);
    }
}
header('Location: appointment_status.php');
exit;
?>
