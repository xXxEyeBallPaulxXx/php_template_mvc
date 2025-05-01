<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? $pageTitle : 'Website'; ?></title>
    <link rel="stylesheet" href="/public/css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;500;700;900&display=swap" rel="stylesheet">
</head>
<body>
    <header id="main-header">

    </header>
    
    <?php include $viewFile; ?>
    <footer id="main-footer">
        <div id="footer-copyright">
                <p>&copy; 2025 Template Alle Rechte vorbehalten.</p>
        </div>
    </footer>
    <script src="public/libs/jquery.js"></script>
    <script src="public/libs/gsap/gsap.min.js"></script>
    <script src="public/js/main.js"></script>

</body>
</html>
