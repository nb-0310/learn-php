<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 py-10">
    <div class="container mx-auto">
        <div class="w-full max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl">
            <div class="md:flex">
                <div class="w-full p-4 px-5 py-5">
                    <div class="text-center mb-5">
                        <h1 class="text-gray-800 text-3xl font-semibold">Contact Form</h1>
                    </div>
                    <form action="process.php" method="POST">
                        <div class="mb-4">
                            <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name:</label>
                            <input type="text" name="name" id="name"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                required>
                        </div>
                        <div class="mb-4">
                            <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email:</label>
                            <input type="text" name="email" id="email"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                required>
                        </div>
                        <div class="mb-4">
                            <label for="message" class="block text-gray-700 text-sm font-bold mb-2">Message:</label>
                            <textarea name="message" id="message"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                required></textarea>
                        </div>
                        <div class="flex items-center justify-between">
                            <button type="submit"
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Submit</button>
                        </div>
                    </form>
                    <?php
                    if (isset($_SESSION['feedback'])) {
                        if ($_SESSION['feedback']['type'] == 'success') {
                            echo "<div class='mt-4 p-4 text-green-700 bg-green-200 rounded'><strong>Success!</strong> " . $_SESSION['feedback']['message'] . "</div>";
                        } elseif ($_SESSION['feedback']['type'] == 'error') {
                            echo "<div class='mt-4 p-4 text-red-700 bg-red-200 rounded'><strong>Error:</strong> " . $_SESSION['feedback']['message'] . "</div>";
                        }
                        unset($_SESSION['feedback']);
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>