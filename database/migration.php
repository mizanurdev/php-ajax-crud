<?php
//connection
require_once ("config.php");

// Student table
$createStudentTable = "CREATE TABLE students (
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(300) NULL,
    email VARCHAR(300) NULL,
    phone VARCHAR(50) NULL,
    course VARCHAR(150) NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

// Execute each table creation query individually
$tables = [
    'Student' => $createStudentTable
];

foreach ($tables as $tableName => $createQuery) {
    $sql = $conn->query($createQuery);
    if ($sql) {
        echo "Table $tableName created successfully<br>";
    } else {
        echo "Error creating table $tableName: " . $conn->error . "<br>";
    }
}
?>