<?php
include 'db.php';

$sql = "SELECT * FROM contactos ORDER BY nombre ASC";
$result = $conn->query($sql);

$contactos = [];

while($row = $result->fetch_assoc()) {
    $contactos[] = $row;
}

echo json_encode($contactos);
$conn->close();
?>
