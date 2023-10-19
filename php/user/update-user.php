<?php

require $_SERVER["DOCUMENT_ROOT"] . '/3MLab3/config/database.php';

// prepare and bind
$stmt = $conn->prepare("UPDATE users SET 
    first_name = ?,
    last_name = ?,
    gender = ?,
    updated_at = ?
    WHERE id = ?");
$stmt->bind_param("sssss", $firstname, $lastname, $gender, $updated_at, $id);

// set parameters and execute 
$firstname = $_POST["first_name"]; 
$lastname = $_POST["last_name"]; 
$gender = $_POST["gender"]; 
$updated_at = date("Y-m-d H:i:s"); 
$id = $_POST["id"]; 
$stmt->execute();

$stmt->close();
$conn->close();

header("location: ../../index.php?delete-success=true");