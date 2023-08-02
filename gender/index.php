<?php


include('../connect.php');

$sql = "SELECT * FROM tbl_gender";
$result = $conn->query($sql);

$response = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        array_push($response, $row);
    }
}
echo json_encode($response);
