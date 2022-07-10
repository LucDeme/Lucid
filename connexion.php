<?php
    require_once('include.php');
    $var = "connexion";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Lucid</title>
        <?php
            require_once('_head/meta.php');
            require_once('_head/link.php');
            require_once('_head/script.php');
        ?>
    </head>

    <body>
        <div class="container">
            <?php require_once('_menu/menu.php'); ?>
            <section class="main">
                <div class="main-top">
                    <h1><?= $var ?></h1>
                </div> 
            </section>
        </div>

        <?php require_once('_footer/footer.php'); ?>
    </body>
</html>