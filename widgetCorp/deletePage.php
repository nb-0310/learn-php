<?php require_once ("includes/connection.php"); ?>
<?php require_once ("includes/functions.php"); ?>

<?php
if (intval($_GET['page']) == 0) {
    redirect_to('content.php');
}

$id = mysqli_real_escape_string($connection, $_GET['page']);
if ($page = get_page_by_id($id, $connection)) {
    $query = "DELETE FROM pages WHERE id = {$page['id']} LIMIT 1";
    $result = mysqli_query($connection, $query);
    if (mysqli_affected_rows($connection) == 1) {
        redirect_to("edit_subject.php?subj={$page['subject_id']}");
    } else {
        echo "<p>Page deletion failed.</p>";
        echo "<p>" . mysqli_error($connection) . "</p>";
        echo "<a href=\"content.php\">Return to Main Site</a>";
    }
} else {
    redirect_to('content.php');
}
?>

<?php
mysqli_close($connection);
?>