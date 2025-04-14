<?php include('config.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $site_title; ?></title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="images/logo.png" type="image/png">
</head>
<body>
    <header>
        <div class="container">
            <div id="branding">
                <h1><span class="highlight">Nature's</span> Wonders</h1>
            </div>
            <nav>
                <ul>
                    <li <?php if(basename($_SERVER['PHP_SELF']) == 'index.php') echo 'class="current"'; ?>><a href="index.php">Home</a></li>
                    <li <?php if(basename($_SERVER['PHP_SELF']) == 'about.php') echo 'class="current"'; ?>><a href="about.php">About</a></li>
                    <li <?php if(basename($_SERVER['PHP_SELF']) == 'destinations.php') echo 'class="current"'; ?>><a href="destinations.php">Destinations</a></li>
                    <li <?php if(basename($_SERVER['PHP_SELF']) == 'gallery.php') echo 'class="current"'; ?>><a href="gallery.php">Gallery</a></li>
                    <li <?php if(basename($_SERVER['PHP_SELF']) == 'contact.php') echo 'class="current"'; ?>><a href="contact.php">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>