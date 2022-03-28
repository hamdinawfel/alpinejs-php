<!DOCTYPE html>
<?php
    // Get current page file name
    $page = basename($_SERVER["PHP_SELF"]);
?>
<html>
    <head>
        <title>alpineJs and php blog page</title>
        <!-- Tailwind -->
        <script src="https://cdn.tailwindcss.com"></script>
        <!-- Alpine.js -->
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.min.js" defer></script>
    </head>
    <body>

        <!-- Header -->
        <?php include('templates/header.php'); ?>

        <!-- Main -->
        <?php include('templates/main.php'); ?>
        
        <!-- Footer -->
        <?php include('templates/footer.php'); ?>
    </body>
</html>