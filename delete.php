<?php
include 'db.php';
if(isset($_GET['id'])){
    $id = $_GET['id'];
$conn->query("DELETE FROM signupform WHERE id=$id");
header("Location: index.php");
exit();
}else{
    ?>
    <script >alert("Your ID not found");</script>
    <?php
}
?>
