<?php
    $DOCUMENT_ROOT = $_SERVER["DOCUMENT_ROOT"];
    require_once "{$DOCUMENT_ROOT}/assets/php/main.php";
?>
<!DOCTYPE html>
<html lang="en">
<head><?php echo execAndRead("{$DOCUMENT_ROOT}/assets/php/head.php"); ?></head>
<header id="header"><?php echo execAndRead("{$DOCUMENT_ROOT}/assets/php/header.php"); ?></header>
<body>
    <div class="panel1">
        <img src="https://cdn.global-gaming.co/images/rustBackground.jpg">
        <section>
            <div></div>
            <div class="panel1Content bottomStrip">                
                <div class="blurImage">
                    <img class="containImage" src="https://cdn.global-gaming.co/images/rustBackground.jpg">
                </div>
                <!--#region Place MAIN content here-->
                <div class="p1c">
                    <span class="h2">Global Gaming</span>
                    <span class="h2">—</span>
                    <span class="h2 red">Rust</span>
                </div>                
                <!--#endregion-->
            </div>
            <div></div>
        </section>        
    </div>
    <section>
        <h3 class="decoratedHeader1">
            <span>
                <span class="red">One of the best</span> Rust vanilla enhanced weekly servers
            </span>
        </h3>
        <p>
            Modded for the most phenomenal gaming experience with carefully chosen plugins that are optimized so you can experience the best Rust adventure.<br>
            Visit our Discord to become a verified member and to participate in $10 steam wallet giveaways on a monthly basis, as well as getting our announcements about the community!<br>
            Perfectly balanced gameplay, friendly staff who only monitor, respond to reports and don't play. Toxic players get filtered fast. We hope you enjoy your stay.
        </p>
        <h5 style="margin-left: 0;">
            <span class="red">Server address:</span>&nbsp;&nbsp;
            <span>rust.global-gaming.co:28015</span>
        </h5>
        <button onclick="window.location.href='https://discord.gg/g4Gwub7'">Rust Discord</button>
    </section>
</body>
<footer id="footer"><?php echo execAndRead("{$DOCUMENT_ROOT}/assets/php/footer.php"); ?></footer>
</html>