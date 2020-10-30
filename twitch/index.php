<?php
    $DOCUMENT_ROOT = $_SERVER["DOCUMENT_ROOT"];
    require_once "{$DOCUMENT_ROOT}/assets/php/main.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php echo execAndRead("{$DOCUMENT_ROOT}/assets/php/head.php"); ?>
    <link rel="stylesheet" type="text/css" href="styles.css"/>
    <script src="/assets/js/twitch_api.js"></script>
    <script src="script.js"></script>
</head>
<header id="header"><?php echo execAndRead("{$DOCUMENT_ROOT}/assets/php/header.php"); ?></header>
<body>
    <section>
        <div id="onlineChannels">
            <h3 class="decoratedHeader1"><span><span class="red">Live</span> channels</span></h3>
            <div class="channels"></div>
        </div>
        <div id="offlineChannels">
            <h3 class="decoratedHeader1"><span><span class="red">Offline</span> channels</span></h3>
            <div class="channels">
            </div>
        </div>
    </section>
</body>
<footer id="footer"><?php echo execAndRead("{$DOCUMENT_ROOT}/assets/php/footer.php"); ?></footer>
</html>