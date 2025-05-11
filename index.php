<?php
include 'db.php';

$sql = "SELECT * FROM signupform"; 
$result = $conn->query($sql);

if (!$result) {
    echo "Query failed: " . $conn->error;
    exit();
}

if ($result->num_rows > 0) {
    echo "<h2>User List</h2>";
    echo "<table border='1'>
            <tr><th>ID</th><th>Name</th><th>Email</th><th>Phone</th><th>Action</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['name']}</td>
                <td>{$row['email']}</td>
                <td>{$row['phone_number']}</td>
                <td><a href='update.php?id={$row['id']}'>Edit</a> | 
                    <a href='delete.php?id={$row['id']}'>Delete</a></td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "No users found.";
}
$conn->close();
?>
