<!DOCTYPE html>
<html>
<head>
    <title><?php echo SITE_NAME?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo ROOT_FOLDER ?>/css/jquery.datetimepicker.min.css">
	<link rel="stylesheet" href="<?php echo ROOT_FOLDER ?>/css/styles.css">
</head>
<body>

    <div class="container">

    <header>
        <h1 class="text-dark"><a class="nav-link" href="<?php echo ROOT_FOLDER ?>/index.php"><?php echo SITE_NAME ?></a></h1>
    </header>

    <nav>
        <ul class="nav">
            <li class="nav-item"><a class="nav-link" href="<?php echo ROOT_FOLDER ?>/index.php">Home</a></li>

            <?php if (Auth::isLoggedIn()) : ?>

                <li class="nav-item"><a class="nav-link" href="<?php echo ROOT_FOLDER ?>/admin/index.php">Admin</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo ROOT_FOLDER ?>/logout.php">Log out</a></li>

            <?php else : ?>

                <li class="nav-item"><a class="nav-link" href="<?php echo ROOT_FOLDER ?>/login.php">Log in</a></li>

            <?php endif; ?>
			<li class="nav-item"><a class="nav-link" href="<?php echo ROOT_FOLDER ?>/contact.php">Contact</a></li>
        </ul>
    </nav>

    <main>
