<?php include 'header.php'; ?>
<?php include 'config/db.php'; ?>

<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM products WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        echo "<div class='mt-4 p-4 text-green-700 bg-green-200 rounded'><strong>Success!</strong> Product deleted successfully.</div>";
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $conn->close();
}
?>

<?php include 'footer.php'; ?>
