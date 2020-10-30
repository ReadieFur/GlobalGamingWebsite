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
    <div class="panel1">
        <img src="https://cdn.global-gaming.co/images/banner.png">
        <section>
            <div></div>
            <div class="panel1Content bottomStrip">                
                <div class="blurImage">
                    <img class="containImage" src="https://cdn.global-gaming.co/images/banner.png">
                </div>
                <!--#region Place MAIN content here-->
                <div class="p1c">
                    <span class="h3">Global Gaming</span>
                    <span class="h3">—</span>
                    <span class="h3 red">Socials</span>
                </div>
                <!--#endregion-->
            </div>
            <div></div>
        </section>        
    </div>
    <section class="socialsList">
        <a class="asButton" onclick="window.location = 'https://discord.gg/fk3G2c6';">
            <div>
                <img src="https://cdn.global-gaming.co/images/DiscordWhite.png" alt="DiscordWhite">
                <h3>Global Gaming</h3>
            </div>
        </a>
        <a class="asButton" onclick="window.location = 'https://facebook.com/GGHostMK';">
            <div>
                <img src="https://cdn.global-gaming.co/images/FacebookWhite.png" alt="FacebookWhite">
                <h3>GG Host MK</h3>
            </div>
        </a>
        <a class="asButton" onclick="window.location = 'https://instagram.com/kofteamorg';">
            <div>
                <img src="https://cdn.global-gaming.co/images/InstagramWhite.png" alt="InstagramWhite">
                <h3>kOF Team ORG</h3>
            </div>
        </a>
        <a class="asButton" onclick="window.location = 'https://youtube.com/channel/UC0SCQHrGhvRKd3pTkikLrnA';">
            <div>
                <img src="https://cdn.global-gaming.co/images/YoutubeWhite.png" alt="YoutubeWhite">
                <h3>kOF Team</h3>
            </div>
        </a>
        <a class="asButton" onclick="window.location = 'https://twitter.com/kofteamorg';">
            <div>
                <img src="https://cdn.global-gaming.co/images/TwitterWhite.png" alt="TwitterWhite">
                <h3>kOF Team ORG</h3>
            </div>
        </a>
        <a class="asButton" onclick="window.location = 'https://twitch.tv/kofteamorg';">
            <div>
                <img src="https://cdn.global-gaming.co/images/TwitchWhite.png" alt="TwitchWhite">
                <h3>kOF Team ORG</h3>
            </div>
        </a>
    </section>
</body>
<footer id="footer"><?php echo execAndRead("{$DOCUMENT_ROOT}/assets/php/footer.php"); ?></footer>
</html>