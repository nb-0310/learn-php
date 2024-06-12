<?php
define("SITE_NAME", "My PHP Learning Site");
define("MAX_USERS", 100);
define("PI", 3.14159);
define("IS_LOGGED_IN", false);

echo "Site Name: " . SITE_NAME . "<br>";
echo "Max Users: " . MAX_USERS . "<br>";
echo "Value of PI: " . PI . "<br>";
echo "Is Logged In: " . (IS_LOGGED_IN ? 'Yes' : 'No') . "<br>";

echo "<br>Magic Constants:<br>";
echo "File: " . __FILE__ . "<br>";
echo "Directory: " . __DIR__ . "<br>";
echo "Line: " . __LINE__ . "<br>";