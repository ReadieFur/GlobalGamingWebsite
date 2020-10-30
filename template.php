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
        <img src="/assets/images/banner.png">
        <section>
            <div></div>
            <div class="panel1Content bottomStrip">
                <div class="blurImage">
                    <img class="containImage" src="/assets/images/banner.png">
                </div>
                <!--#region Place MAIN content here-->
                <div class="p1c">
                    <span class="h3">Global Gaming</span>
                    <span class="h3">—</span>
                    <span class="h3 red">PAGE TITLE</span>
                </div>                
                <!--#endregion-->
            </div>
            <div></div>
        </section>
    </div>
</body>
<footer id="footer"><?php echo execAndRead("{$DOCUMENT_ROOT}/assets/php/footer.php"); ?></footer>
</html>