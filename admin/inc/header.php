<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $page_title; ?> - Admin Panel</title>
    <link rel="stylesheet" href="../public/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/css/style.css">
</head>
<body>
	<div class="container my-4">
		<div class="row">
			<div class="col-md-8 m-auto">
				<ul class="nav">
					<li class="nav-item">
						<h1 class="text-success h5 nav-link">Admin Panel</h1>
					</li>
					<li class="nav-item">
						<a href="index.php" class="nav-link">Modules</a>
					</li>
					<li class="nav-item">
						<a href="seo.php" class="nav-link">SEO</a>
					</li>
					<li class="nav-item">
						<a href="hero.php" class="nav-link">Hero</a>
					</li>
					<li class="nav-item">
						<a href="about.php" class="nav-link">About</a>
					</li>
					<li class="nav-item">
						<a href="faq.php" class="nav-link">FAQ</a>
					</li>
				</ul><hr>
				<h3 class="text-muted py-4"><?= $page_title; ?></h3>