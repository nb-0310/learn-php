<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "users";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM users";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table class='table-auto w-full'>";
        echo "<thead><tr><th class='px-4 py-2'>ID</th><th class='px-4 py-2'>Name</th><th class='px-4 py-2'>Email</th><th class='px-4 py-2'>Created At</th></tr></thead>";
        echo "<tbody>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td class='border px-4 py-2'>" . $row["id"] . "</td>";
            echo "<td class='border px-4 py-2'>" . $row["name"] . "</td>";
            echo "<td class='border px-4 py-2'>" . $row["email"] . "</td>";
            echo "<td class='border px-4 py-2'>" . $row["created at"] . "</td>";
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
    } else {
        echo "0 results";
    }

    $conn->close();
    ?>
</body>

</html>