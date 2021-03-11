<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= $title ?> - AdminPanel</title>
	<link rel="stylesheet" href="/public/css/bootstrap.min.css">
    <link rel="stylesheet" href="/public/css/style.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-8 m-auto">
            <h1 class="text-center text-muted my-5 border">Admin Panel</h1>

            <div class="row">
                <div class="col-md-3">
                    <?php require_once 'sidebar.tpl';?>
                </div>
                <div class="col-md-9 border-start">
