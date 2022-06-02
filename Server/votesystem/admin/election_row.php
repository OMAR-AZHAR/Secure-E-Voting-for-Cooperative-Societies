<?php
include 'includes/session.php';

if (isset($_POST['Election_ID'])) {
    $Election_ID = $_POST['Election_ID'];
    $sql = "SELECT * FROM election_record WHERE Election_ID = '$Election_ID'";
    $query = $conn->query($sql);
    $row = $query->fetch_assoc();

    echo json_encode($row);
}
