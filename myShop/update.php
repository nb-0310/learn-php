<?php include 'header.php'; ?>
<?php include 'config/db.php'; ?>

<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM products WHERE id = $id";
    $result = $conn->query($sql);
    $product = $result->fetch_assoc();
}
?>

<h2 class="text-2xl font-bold mb-4">Edit Product</h2>

<form action="update.php?id=<?php echo $id; ?>" method="POST">
    <div class="mb-4">
        <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name:</label>
        <input type="text" name="name" id="name" value="<?php echo $product['name']; ?>"
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
            required>
    </div>
    <div class="mb-4">
        <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Description:</label>
        <textarea name="description" id="description"
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
            required><?php echo $product['description']; ?></textarea>
    </div>
    <div class="mb-4">
        <label for="price" class="block text-gray-700 text-sm font-bold mb-2">Price:</label>
        <input type="text" name="price" id="price" value="<?php echo $product['price']; ?>"
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
            required>
    </div>
    <div class="flex items-center justify-between">
        <button type="submit" name="update"
            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Update
            Product</button>
    </div>
</form>

<?php
if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];

    $sql = "UPDATE products SET name='$name', description='$description', price='$price' WHERE id='$id'";
    if ($conn->query($sql) === TRUE) {
        echo "<div class='mt-4 p-4 text-green-700 bg-green-200 rounded'><strong>Success!</strong> Product updated successfully.</div>";
    } else {
        echo "Error updating record: " . $conn->error;
    }

    $conn->close();
}
?>

<?php include 'footer.php'; ?>