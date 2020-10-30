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
    <div class="panel1">
        <img src="https://cdn.global-gaming.co/images/banner.png">
        <section>
            <div></div>
            <div class="slideshowContainer panel1Content bottomStrip">

                <!--#region Place slides here | CURRENT MAX: 4-->
                <div style="display: none;">
                    <div>
                        <img src="https://cdn.global-gaming.co/images/rustBackground.jpg">
                        <h3>Rust</h3>
                        <p>The only aim in Rust is to survive - Overcome struggles such as hunger, thirst and cold. Build a fire. Build a shelter. Kill animals. Protect yourself from other players.</p>
                        <button onclick="location='../servers/rust'">More</button> <!--Work in progress-->
                    </div>
                    <div>
                        <img src="https://cdn.global-gaming.co/images/minecraftBackground.png">
                        <h3>Minecraft</h3>
                        <p>In Minecraft, players explore a blocky, procedurally-generated 3D world, and may discover and extract raw materials, craft tools, build structures or earthworks, and depending on game mode, can fight computer-controlled "mobs", as well as either cooperate with or compete against other players in the same world.</p>
                    </div>
                </div>
                <!--#endregion-->

                <img src="https://cdn.global-gaming.co/images/banner.png" class="containImage">
                <img src="https://cdn.global-gaming.co/images/banner.png" class="containImage fadeIn">

                <div class="slideInfoContainer">
                    <div class="slideText">
                        <h3>Title</h3>
                        <p>Content</p>
                    </div>
                    <div class="slideButtons">
                        <!--Created at runtime-->
                    </div>
                </div>
            </div>
            <div></div>
        </section>
    </div>
    <section>
        <table class="firstLinks">
            <tr>
                <td>
                    <button onclick="window.location = '/socials/';">
                        <img src="https://cdn.global-gaming.co/images/SocialsWhite.png" alt="SocialsWhite">
                        <h5>Socials</h5>
                        <h6>Visit our socials</h6>
                    </button>
                </td>
                <td>
                    <button onclick="window.location = '/twitch/';" id="twitchStreaming">
                        <img src="https://cdn.global-gaming.co/images/TwitchWhite.png" alt="TwitchWhite">
                        <h5>Twitch Streaming</h5>
                        <h6>View our channels</h6>
                    </button>
                </td>
                <td>
                    <button onclick="window.location = '/tournaments/';">
                        <img src="https://cdn.global-gaming.co/images/TrophyWhite.png" alt="TrophyWhite">
                        <h5>Game Tournaments</h5>
                        <h6>Our upcoming tournaments</h6>
                    </button>
                </td>
            </tr>
        </table>
    </section>
</body>
<footer id="footer"><?php echo execAndRead("{$DOCUMENT_ROOT}/assets/php/footer.php"); ?></footer>
</html>