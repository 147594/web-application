<?php
require_once '../configs/DbConn.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Handle form data and insert into the database
    // Use prepared statements to prevent SQL injection
    // Sample code (adapt as needed):
    $stmt = $DbConn->prepare("INSERT INTO authorstb (AuthorFullName, AuthorEmail, AuthorAddress, AuthorBiography, AuthorDateOfBirth, AuthorSuspended) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->execute([$AuthorFullName, $AuthorEmail, $AuthorAddress, $AuthorBiography, $AuthorDateOfBirth, $AuthorSuspended]);

    // Redirect or display a success message
}
