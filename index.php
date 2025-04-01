<?php
$title = "My Simple PHP Website";  // The title of the page
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
</head>
<body>
    <!-- Header Section -->
    <header>
        <h1>Welcome to My Simple PHP Website</h1>
        <p>This website is built with plain PHP. No CSS, no JavaScript, just PHP generating static content!</p>
    </header>

    <!-- About Section -->
    <section>
        <h2>About Us</h2>
        <p>We are a simple website designed to showcase how a website can be built with PHP without any additional styling or scripts.</p>
    </section>

    <!-- Contact Section -->
    <section>
        <h2>Contact Us</h2>
        <p>If you'd like to get in touch, you can reach us at <strong>contact@simplephp.com</strong>.</p>
    </section>

    <!-- Footer Section -->
    <footer>
        <p>&copy; 2025 My Simple PHP Website</p>
    </footer>
</body>
</html>
