<?php
    $DOCUMENT_ROOT = $_SERVER["DOCUMENT_ROOT"];
    require_once "{$DOCUMENT_ROOT}/assets/php/main.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php echo execAndRead("{$DOCUMENT_ROOT}/assets/php/head.php"); ?>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<header id="header"><?php echo execAndRead("{$DOCUMENT_ROOT}/assets/php/header.php"); ?></header>
<body>
    <span>
        <iframe
            title="Partner form"
            src="https://docs.google.com/forms/d/e/1FAIpQLSc5xnLfHnk3iS7Z_U_IJPOGxN3uLKQmE-Nx3jkuzdzZ9OG8nQ/viewform?embedded=true"
            width="786"
            height="2045"
            frameborder="0"
            marginheight="0"
            marginwidth="0">
        </iframe>
    </span>
</body>
<footer id="footer"><?php echo execAndRead("{$DOCUMENT_ROOT}/assets/php/footer.php"); ?></footer>
</html>