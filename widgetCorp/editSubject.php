<?php require_once("includes/session.php"); ?>
<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php confirm_logged_in(); ?>

<?php
$errors = array();

if (intval($_GET['subj']) == 0) {
    redirect_to("content.php");
}

if (isset($_POST['submit'])) {
    $required_fields = array('menu_name', 'position', 'visible');
    foreach ($required_fields as $fieldname) {
        if (!isset($_POST[$fieldname]) || (empty($_POST[$fieldname]) && $_POST[$fieldname] != 0)) {
            $errors[] = $fieldname;
        }
    }

    $fields_with_lengths = array('menu_name' => 30);
    foreach ($fields_with_lengths as $fieldname => $maxlength) {
        if (strlen(trim(mysql_prep($_POST[$fieldname], $connection))) > $maxlength) {
            $errors[] = $fieldname;
        }
    }

    if (empty($errors)) {
        $id = mysql_prep($_GET['subj'], $connection);
        $menu_name = mysql_prep($_POST['menu_name'], $connection);
        $position = mysql_prep($_POST['position'], $connection);
        $visible = mysql_prep($_POST['visible'], $connection);

        $query = "UPDATE subjects SET 
                    menu_name = '{$menu_name}', 
                    position = {$position}, 
                    visible = {$visible} 
                WHERE id = {$id}";
        $result = $connection->query($query);

        if (mysqli_affected_rows($connection) == 1) {
            $message = "The subject was successfully updated.";
        } else {
            $message = "The subject update failed.";
            $message .= "<br />";
        }

    } else {
        $message = "There were " . count($errors) . " errors in the form.";
    }
}
?>

<?php find_selected_page($connection); ?>
<?php include("includes/header.php"); ?>

<table id="structure">
    <tr>
        <td id="navigation">
            <?php echo navigation($sel_subject, $sel_page, $connection); ?>
        </td>
        <td id="page">
            <h2>Edit Subject: <?php echo htmlspecialchars($sel_subject['menu_name']); ?></h2>
            <?php if (!empty($message)) {
                echo "<p class=\"message\">" . htmlspecialchars($message) . "</p>";
            } ?>
            <?php
            if (!empty($errors)) {
                echo "<p class=\"errors\">";
                echo "Please review the following fields:<br />";
                foreach ($errors as $error) {
                    echo " - " . htmlspecialchars($error) . "<br />";
                }
                echo "</p>";
            }
            ?>
            <form action="editSubject.php?subj=<?php echo urlencode($sel_subject['id']); ?>" method="post">
                <p>Subject name:
                    <input type="text" name="menu_name" value="<?php echo htmlspecialchars($sel_subject['menu_name']); ?>" id="menu_name" />
                </p>
                <p>Position:
                    <select name="position">
                        <?php
                        $subject_set = get_all_subjects($connection);
                        $subject_count = mysqli_num_rows($subject_set);
                        for ($count = 1; $count <= $subject_count + 1; $count++) {
                            echo "<option value=\"{$count}\"";
                            if ($sel_subject['position'] == $count) {
                                echo " selected";
                            }
                            echo ">{$count}</option>";
                        }
                        ?>
                    </select>
                </p>
                <p>Visible:
                    <input type="radio" name="visible" value="0"<?php
                    if ($sel_subject['visible'] == 0) {
                        echo " checked";
                    }
                    ?> /> No
                    &nbsp;
                    <input type="radio" name="visible" value="1"<?php
                    if ($sel_subject['visible'] == 1) {
                        echo " checked";
                    }
                    ?> /> Yes
                </p>
                <input type="submit" name="submit" value="Edit Subject" />
                &nbsp;&nbsp;
                <a href="deleteSubject.php?subj=<?php echo urlencode($sel_subject['id']); ?>" onclick="return confirm('Are you sure?');">Delete Subject</a>
            </form>
            <br />
            <a href="content.php">Cancel</a>
            <div style="margin-top: 2em; border-top: 1px solid #000000;">
                <h3>Pages in this subject:</h3>
                <ul>
                    <?php
                    $subject_pages = get_pages_for_subject($sel_subject['id'], $connection);
                    while ($page = mysqli_fetch_assoc($subject_pages)) {
                        echo "<li><a href=\"content.php?page={$page['id']}\">
                        " . htmlspecialchars($page['menu_name']) . "</a></li>";
                    }
                    ?>
                </ul>
                <br />
                + <a href="newPage.php?subj=<?php echo $sel_subject['id']; ?>">Add a new page to this subject</a>
            </div>
        </td>
    </tr>
</table>

<?php include("includes/footer.php"); ?>