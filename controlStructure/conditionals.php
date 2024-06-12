<?php
$day = date("l");

if ($day == "Monday") {
    echo "Today is Monday." . "<br />";
} elseif ($day == "Friday") {
    echo "Today is Friday." . "<br />";
} else {
    echo "Today is $day." . "<br />";
}

$favoriteColor = "blue";

switch ($favoriteColor) {
    case "red":
        echo "Your favorite color is red!" . "<br />";
        break;
    case "blue":
        echo "Your favorite color is blue!" . "<br />";
        break;
    case "green":
        echo "Your favorite color is green!" . "<br />";
        break;
    default:
        echo "Your favorite color is neither red, blue, nor green!" . "<br />";
}