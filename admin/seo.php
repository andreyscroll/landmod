<?php

use Classes\Seo;

require '../config.php';

$page_title = 'SEO';

$s = new Seo();

if(!empty($_POST))
{
	$s->setData($_POST);
	header('Location: seo.php');
}

$seo = $s->getData();

?>

<?php require 'inc/header.php'; ?>

	<form action="" method="post">
		<input type="hidden" name="hidden" value="1">

		<div class="mb-3">
			<label for="title" class="form-label">Title</label>
			<input type="text" id="title" name="title" value="<?= $seo['title']; ?>" class="form-control">
		</div>
		<div class="mb-3">
			<label for="description" class="form-label">Description</label>
			<textarea name="description" id="description" rows="2" class="form-control"><?= $seo['description']; ?></textarea>
		</div>
		<div class="mb-3">
			<label for="keywords" class="form-label">Keywords</label>
			<input type="text" id="keywords" name="keywords" value="<?= $seo['keywords']; ?>" class="form-control">
		</div>
		<div class="mb-3">
			<label for="head" class="form-label">Head</label>
			<textarea name="head" id="head" rows="2" class="form-control"><?= $seo['head']; ?></textarea>
		</div>
		<div class="mb-3">
			<label for="footer" class="form-label">Footer</label>
			<textarea name="footer" id="footer" rows="7" class="form-control"><?= $seo['footer']; ?></textarea>
		</div>

		<div>
			<input type="submit" value="Сохранить" class="btn btn-primary">
		</div>

	</form>

<?php require 'inc/footer.php'; ?>
