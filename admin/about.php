<?php

use Classes\About;

require '../config.php';

$page_title = 'About';

$a = new About();

if(!empty($_POST))
{
	$a->setData($_POST);
	header('Location: about.php');
}

$about = $a->getData();

?>

<?php require 'inc/header.php'; ?>

	<form action="" method="post">
		<input type="hidden" name="hidden" value="1">

		<div class="mb-3">
			<label for="title" class="form-label">Title</label>
			<input type="text" id="title" name="title" value="<?= $about['title']; ?>" class="form-control">
		</div>
		<div class="mb-3">
			<label for="text" class="form-label">Content</label>
			<textarea name="text" id="text" rows="10" class="form-control"><?= $about['text']; ?></textarea>
		</div>

		<div>
			<input type="submit" value="Сохранить" class="btn btn-primary">
		</div>
	</form>

<?php require 'inc/footer.php'; ?>
