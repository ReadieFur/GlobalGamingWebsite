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
        <img src="https://cdn.global-gaming.co/images/minecraftBackground.png">
        <section>
            <div></div>
            <div class="panel1Content bottomStrip">                
                <div class="blurImage">
                    <img class="containImage" src="https://cdn.global-gaming.co/images/minecraftBackground.png">
                </div>
                <!--#region Place MAIN content here-->
                <div class="p1c">
                    <span class="h2">Global Gaming</span>
                    <span class="h2">—</span>
                    <span class="h2 red">Minecraft</span>
                </div>                
                <!--#endregion-->
            </div>
            <div></div>
        </section>        
    </div>
    <section>
        <h3 class="decoratedHeader1">
            <span>
                <span class="red">Global Gaming</span> Minecraft
            </span>
        </h3>
        <p>
            Welcome to the Global Gmaing Minecraft server, featuring:
            <li>Survival Multiplayer</li>
            <li>Creative Plots (COMING SOON)</li>
            <li>Minigames (COMING SOON)</li>
        </p>
        <h5 style="margin-left: 0;">
            <span class="red">Server address:</span>&nbsp;&nbsp;
            <span>mc.global-gaming.co</span>
        </h5>
        <button onclick="window.location.href='https://discord.gg/fk3G2c6'">Minecraft Discord</button>
    </section>
</body>
<footer id="footer"><?php echo execAndRead("{$DOCUMENT_ROOT}/assets/php/footer.php"); ?></footer>
</html>