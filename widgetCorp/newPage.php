
<?php require_once("includes/session.php"); ?>
<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php confirm_logged_in(); ?>
<?php
	if (intval($_GET['subj']) == 0) {
		redirect_to('content.php');
	}

	include_once("includes/formFunctions.php");

	if (isset($_POST['submit'])) {
		$errors = array();
	
		$required_fields = array('menu_name', 'position', 'visible', 'content');
		$errors = array_merge($errors, check_required_fields($required_fields, $_POST));
		
		$fields_with_lengths = array('menu_name' => 30);
		$errors = array_merge($errors, check_max_field_lengths($fields_with_lengths, $_POST));
		
		$subject_id = mysql_prep($_GET['subj'], $connection);
		$menu_name = trim(mysql_prep($_POST['menu_name'], $connection));
		$position = mysql_prep($_POST['position'], $connection);
		$visible = mysql_prep($_POST['visible'], $connection);
		$content = mysql_prep($_POST['content'], $connection);
	
		if (empty($errors)) {
			$query = "INSERT INTO pages (
						menu_name, position, visible, content, subject_id
					) VALUES (
						'{$menu_name}', {$position}, {$visible}, '{$content}', {$subject_id}
					)";
			if ($result = $connection->query($query)) {
				$message = "The page was successfully created.";
				$new_page_id = mysqli_insert_id($mysqli);
				redirect_to("content.php?page={$new_page_id}");
			} else {
				$message = "The page could not be created.";
			}
		} else {
			if (count($errors) == 1) {
				$message = "There was 1 error in the form.";
			} else {
				$message = "There were " . count($errors) . " errors in the form.";
			}
		}
	}
?>
<?php find_selected_page($connection); ?>
<?php include("includes/header.php"); ?>
<table id="structure">
	<tr>
		<td id="navigation">
			<?php echo navigation($sel_subject, $sel_page, $connection); ?>
			<br />
			<a href="new_subject.php">+ Add a new subject</a>
		</td>
		<td id="page">
			<h2>Adding New Page</h2>
			<?php if (!empty($message)) {echo "<p class=\"message\">" . $message . "</p>";} ?>
			<?php if (!empty($errors)) { display_errors($errors); } ?>
			
			<form action="new_page.php?subj=<?php echo $sel_subject['id']; ?>" method="post">
				<?php $new_page = true; ?>
				<?php include "pageForm.php" ?>
				<input type="submit" name="submit" value="Create Page" />
			</form>
			<br />
			<a href="edit_subject.php?subj=<?php echo $sel_subject['id']; ?>">Cancel</a><br />
		</td>
	</tr>
</table>
<?php include("includes/footer.php"); ?>
