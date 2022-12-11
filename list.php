<?php
include "conn.php";

$stmt = $conn->prepare("SELECT * FROM employee ORDER BY id");

$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($results as $row) {
    foreach ($row as $key => $value) {
        echo "${value} <br>";
    }
}
echo "<br> <a href='index.php'>Home";

?>