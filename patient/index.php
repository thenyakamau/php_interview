<?php


include('../connect.php');

$sql = "SELECT * FROM tbl_patient";
$result = $conn->query($sql);

$response = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $service_sql = "SELECT tbl_patient_services.*, tbl_services.service_name
        FROM tbl_patient_services
        JOIN tbl_services ON tbl_services.service_id = tbl_patient_services.service_id
        WHERE patient_id = '$row[patient_id]'";

        $service_result = $conn->query($service_sql);
        $service_response = array();
        while ($service_row = $service_result->fetch_assoc()) {

            array_push($service_response, $service_row);
        }


        $gender_sql = "SELECT *
        FROM tbl_gender
        WHERE gender_id = '$row[gender_id]'";

        $gender_result = $conn->query($gender_sql);
        $gender_response = array();
        while ($gender_row = $gender_result->fetch_assoc()) {
            array_push($gender_response, $gender_row);
        }

        $row['services'] = $service_response;
        $row['gender'] = $gender_response;
        array_push($response, $row);
    }
}
echo json_encode($response);
