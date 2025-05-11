<?php
include 'db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Handle update POST request
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['UserName'];
        $email = $_POST['Email'];
        $contact = $_POST['PhoneNo'];

        $sql = "UPDATE signupform SET name='$name', email='$email', phone_number='$contact' WHERE id=$id";

        if ($conn->query($sql) === TRUE) {
            header("Location: index.php");
            exit();
        } else {
            echo "Update failed: " . $conn->error;
        }
    }

    // Get user data to pre-fill the form
    $result = $conn->query("SELECT * FROM signupform WHERE id=$id");
    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
    ?>
    <h2>Edit User</h2>
    <form method="post">
        Name: <input type="text" name="UserName" value="<?= $row['name'] ?>"><br>
        Email: <input type="email" name="Email" value="<?= $row['email'] ?>"><br>
        Phone: <input type="text" name="PhoneNo" value="<?= $row['phone_number'] ?>"><br>
        <input type="submit" value="Update">
    </form>
    <?php
    } else {
        echo "User not found.";
    }
} else {
    echo "User ID not found.";
}
?>
