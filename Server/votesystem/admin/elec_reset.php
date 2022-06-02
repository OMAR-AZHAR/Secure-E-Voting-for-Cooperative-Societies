<?php
include 'includes/session.php';

$sql = "DELETE FROM election_record";
if ($conn->query($sql)) {
    $_SESSION['success'] = "Records reset successfully";
} else {
    $_SESSION['error'] = "Something went wrong in reseting";
}

header('location: election_record.php');
