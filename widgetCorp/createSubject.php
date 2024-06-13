<?php require_once ("includes/connection.php"); ?>
<?php require_once ("includes/functions.php"); ?>

<?php
$errors = [];

$required_fields = ['menu_name', 'position', 'visible'];
foreach ($required_fields as $fieldname) {
    if (!isset($_POST[$fieldname]) || empty($_POST[$fieldname])) {
        $errors[] = $fieldname;
    }
}

$fields_with_lengths = ['menu_name' => 30];
foreach ($fields_with_lengths as $fieldname => $maxlength) {
    if (strlen(trim($_POST[$fieldname])) > $maxlength) {
        $errors[] = $fieldname;
    }
}

if (!empty($errors)) {
    redirect_to("new_subject.php");
}
?>

<?php
$menu_name = mysqli_real_escape_string($connection, $_POST['menu_name']);
$position = mysqli_real_escape_string($connection, $_POST['position']);
$visible = mysqli_real_escape_string($connection, $_POST['visible']);
?>

<?php
$query = "INSERT INTO subjects (menu_name, position, visible) VALUES ('{$menu_name}', {$position}, {$visible})";
$result = mysqli_query($connection, $query);
if ($result) {
    redirect_to("content.php");
} else {
    echo "<p>Subject creation failed.</p>";
    echo "<p>" . mysqli_error($connection) . "</p>";
}
?>

<?php mysqli_close($connection); ?>