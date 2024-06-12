<?php
define("SITE_NAME", "My PHP Learning Site");
define("MAX_USERS", 100);
define("PI", 3.14159);
define("IS_LOGGED_IN", false);

echo "Site Name: " . SITE_NAME . "\n";
echo "Max Users: " . MAX_USERS . "\n";
echo "Value of PI: " . PI . "\n";
echo "Is Logged In: " . (IS_LOGGED_IN ? 'Yes' : 'No') . "\n";

echo "\nMagic Constants:\n";
echo "File: " . __FILE__ . "\n";
echo "Directory: " . __DIR__ . "\n";
echo "Line: " . __LINE__ . "\n";
