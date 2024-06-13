<?php 
require_once("includes/connection.php"); 
require_once("includes/functions.php");

$sel_subject = null;
$sel_page = null;

find_selected_page($connection); 
?>
<?php include("includes/header.php"); ?>
<table id="structure">
	<tr>
		<td id="navigation">
			<?php echo navigation($sel_subject, $sel_page, $connection); ?>
			<br />
			<a href="newSubject.php">+ Add a new subject</a>
		</td>
		<td id="page">
		<?php if (!is_null($sel_subject)) { ?>
			<h2><?php echo htmlspecialchars($sel_subject['menu_name']); ?></h2>
		<?php } elseif (!is_null($sel_page)) { ?>
			<h2><?php echo htmlspecialchars($sel_page['menu_name']); ?></h2>
			<div class="page-content">
				<?php echo htmlspecialchars($sel_page['content']); ?>
			</div>
			<br />
			<a href="editPage.php?page=<?php echo urlencode($sel_page['id']); ?>">Edit page</a>
		<?php } else { ?>
			<h2>Select a subject or page to edit</h2>
		<?php } ?>
		</td>
	</tr>
</table>
<?php require("includes/footer.php"); ?>
