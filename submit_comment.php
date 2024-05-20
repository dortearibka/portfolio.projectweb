<?php
// Include the database connection file
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize inputs
    $name = htmlspecialchars($_POST['name']);
    $comment = htmlspecialchars($_POST['comment']);

    // Get database connection
    $conn = getConnection();

    // Prepare and bind SQL statement with placeholders
    $sql = "INSERT INTO comments (name, comment, created_at) VALUES (?, ?, NOW())";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $name, $comment);

    // Execute the statement
    if ($stmt->execute()) {
        echo "Comment submitted!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
}
?>
