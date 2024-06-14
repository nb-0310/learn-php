<?php require_once ("includes/connection.php"); ?>
<?php require_once ("includes/functions.php"); ?>
<?php
$sel_page = [
	"id" => 1,
	"subject_id" => 1,
	"menu_name" => "Page1",
	"position" => 1,
	"visible" => 1,
	"content" => "This is Page1."
];

$sel_subject = [
	"id" => 1,
	"subject_id" => 1,
	"menu_name" => "Subject1",
	"position" => 1,
	"visible" => 1,
];
?>

<?php find_selected_page($connection); ?>
<?php include ("includes/header.php"); ?>
<table id="structure">
	<tr>
		<td id="navigation">
			<?php echo public_navigation($sel_subject, $sel_page, $connection); ?>
		</td>
		<td id="page">
			<?php if ($sel_page) { ?>
				<h2><?php echo htmlentities($sel_page['menu_name']); ?></h2>
				<div class="page-content">
					<?php echo strip_tags(nl2br($sel_page['content']), "<b><br><p><a>"); ?>
				</div>
			<?php } else { ?>
				<h2>Welcome to Widget Corp</h2>
			<?php } ?>
		</td>
	</tr>
</table>
<?php include ("includes/footer.php"); ?>