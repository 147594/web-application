<?php
require_once '../configs/DbConn.php';

// Retrieve data from the database
$stmt = $DbConn->query("SELECT * FROM authorstb ORDER BY AuthorFullName ASC");
$authors = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Display authors in a table
echo "<table>";
echo "<tr><th>AuthorFullName</th><th>AuthorEmail</th> <!-- Add other columns as needed --> </tr>";
foreach ($authors as $author) {
    echo "<tr><td>{$author['AuthorFullName']}</td><td>{$author['AuthorEmail']}</td><!-- Add other columns as needed --></tr>";
}
echo "</table>";
