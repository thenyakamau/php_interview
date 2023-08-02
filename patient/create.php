<?php

include('../connect.php');

$name = $_POST['name'];
$date = $_POST['date'];
$gender_id = $_POST['gender_id'];
$general_comment = $_POST['general_comments'];
$services = $_POST['services'];

$service_array = json_decode($services);

$sql = "INSERT INTO tbl_patient (name, date_of_birth, gender_id) VALUES ('$name', '$date', '$gender_id');";

$patient_id = $conn->insert_id;
if ($conn->query($sql) === FALSE)
    echo json_encode(["message" => "Error: " . $sql . "<br>" . $conn->error, "success" => false]);

$patient_id = $conn->insert_id;

foreach ($service_array as $key => $service_id) {
    # code...
    $service_sql = "INSERT INTO tbl_patient_services (patient_id, service_id, general_comments)
    VALUES ('$patient_id', '$service_id', '$general_comment')";


    if ($conn->query($service_sql) === FALSE)
        echo json_encode(["message" => "Error: " . $sql . "<br>" . $conn->error, "success" => false]);
}


echo json_encode(["message" => "Record has been created", "success" => true]);
