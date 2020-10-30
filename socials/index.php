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
                <div class="p1c">
                    <span class="h3">Global Gaming</span>
                    <span class="h3">—</span>
                    <span class="h3 red">Socials</span>
                </div>
            </div>
            <div></div>
        </section>        
    </div>
    <section class="socialsList">
        <a class="asButton" href="https://discord.gg/fk3G2c6">
            <div>
                <img src="https://cdn.global-gaming.co/images/DiscordWhite.png" alt="DiscordWhite">
                <h3>Global Gaming</h3>
            </div>
        </a>
        <a class="asButton" href="https://facebook.com/GGHostMK">
            <div>
                <img src="https://cdn.global-gaming.co/images/FacebookWhite.png" alt="FacebookWhite">
                <h3>GG Host MK</h3>
            </div>
        </a>
        <a class="asButton" href="https://instagram.com/kofteamorg">
            <div>
                <img src="https://cdn.global-gaming.co/images/InstagramWhite.png" alt="InstagramWhite">
                <h3>kOF Team ORG</h3>
            </div>
        </a>
        <a class="asButton" href="https://youtube.com/channel/UC0SCQHrGhvRKd3pTkikLrnA">
            <div>
                <img src="https://cdn.global-gaming.co/images/YoutubeWhite.png" alt="YoutubeWhite">
                <h3>kOF Team</h3>
            </div>
        </a>
        <a class="asButton" href="https://twitter.com/kofteamorg">
            <div>
                <img src="https://cdn.global-gaming.co/images/TwitterWhite.png" alt="TwitterWhite">
                <h3>kOF Team ORG</h3>
            </div>
        </a>
        <a class="asButton" href="https://twitch.tv/kofteamorg">
            <div>
                <img src="https://cdn.global-gaming.co/images/TwitchWhite.png" alt="TwitchWhite">
                <h3>kOF Team ORG</h3>
            </div>
        </a>
    </section>
    <section>
        <br>
        <h3 class="decoratedHeader1"><span><span class="red">All of</span> our links</span></h3>
        <table>
            <tr><td><a class="asButton centerText" href="https://kof.global-gaming.co"><h4>kOF Website</h4></a></td></tr>
            <tr><td><a class="asButton centerText" href="https://kof.global-gaming.co/apply"><h4>Apply for kOF</h4></a></td></tr>
            <tr><td><a class="asButton centerText" href="https://www.facebook.com/kofteamorg"><h4>kOF Facebook</h4></a></td></tr>
            <tr><td><a class="asButton centerText" href="https://twitter.com/kofteamorg"><h4>kOF Twitter</h4></a></td></tr>
            <tr><td><a class="asButton centerText" href="https://twitch.tv/kofteamorg"><h4>kOF Twitch</h4></a></td></tr>
            <tr><td><a class="asButton centerText" href="https://discord.gg/pEC3gEn"><h4>GG Rust Discord</h4></a></td></tr>
            <tr><td><a class="asButton centerText" href="https://discord.gg/UbQkrbD"><h4>GG Minecraft Discord</h4></a></td></tr>
            <tr><td><a class="asButton centerText" href="https://donacii.global-gaming.co"><h4>Donacii</h4></a></td></tr>
            <tr><td><a class="asButton centerText" href="http://radioiwan.global-gaming.co"><h4>Radio IwAn</h4></a></td></tr>
            <tr><td><a class="asButton centerText" href="https://readie.global-gaming.co"><h4>Readie's Repo</h4></a></td></tr>
        </table>
    </section>
</body>
<footer id="footer"><?php echo execAndRead("{$DOCUMENT_ROOT}/assets/php/footer.php"); ?></footer>
</html>