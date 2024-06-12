<?php include 'header.php'; ?>
<?php include 'config/db.php'; ?>

<div class="w-full h-[80vh]">


    <h2 class="text-2xl font-bold mb-4">Product List</h2>

    <?php
    $sql = "SELECT * FROM products";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table class='table-auto w-full'>";
        echo "<thead><tr><th class='px-4 py-2'>ID</th><th class='px-4 py-2'>Name</th><th class='px-4 py-2'>Description</th><th class='px-4 py-2'>Price</th><th class='px-4 py-2'>Actions</th></tr></thead>";
        echo "<tbody>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td class='border px-4 py-2'>" . $row["id"] . "</td>";
            echo "<td class='border px-4 py-2'>" . $row["name"] . "</td>";
            echo "<td class='border px-4 py-2'>" . $row["description"] . "</td>";
            echo "<td class='border px-4 py-2'>$" . $row["price"] . "</td>";
            echo "<td class='border px-4 py-2'><a href='update.php?id=" . $row["id"] . "' class='text-blue-600'>Edit</a> | <a href='delete.php?id=" . $row["id"] . "' class='text-red-600'>Delete</a></td>";
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
    } else {
        echo "0 results";
    }

    $conn->close();
    ?>
</div>

<?php include 'footer.php'; ?>