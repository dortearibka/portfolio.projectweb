<?php
// display_comments.php
$conn = new mysqli("localhost", "username", "password", "database");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Mengambil semua komentar tanpa artikel_id
$sql = "SELECT name, comment, created_at FROM comments ORDER BY created_at DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<div class='comment'>";
        echo "<h4>" . htmlspecialchars($row["name"]) . "</h4>";
        echo "<p>" . htmlspecialchars($row["comment"]) . "</p>";
        echo "<small>Posted on: " . $row["created_at"] . "</small>";
        echo "</div>";
    }
} else {
    echo "No comments yet.";
}

$conn->close();
?>
