<?php
$host = "172.31.31.128";
$user = "student";
$pass = "password";
$db = "jobs";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM roles";
$result = $conn->query($sql);

$data = array();
while ($row = $result->fetch_assoc()) {
  $data[] = $row;
}

header('Content-Type: application/json');
echo json_encode($data);

$conn->close();
?>