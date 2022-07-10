<?php
    require_once('include.php');
    $var = "index";
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
    <?php require_once('_menu/menu.php'); ?>
    <body>
        <div class="main">
            <h1>Bootstrap 5 Sidebar Navigation</h1>

            <div class="grid">
                <h2>Grid</h2>
                <div class="grid-container">
                    <form method="post">
                        <label> Client </label>
                        <input type="text" name="client" value="" placeholder="Saisie nom client"/>
                        <label> Type Paiement </label>
                        <input type="text" name="paiement" value="" placeholder="selectionner type de paiement"/>
                        <label> Durée </label>
                        <input type="text" name="duree" value="" placeholder="Definir durée (en mois)"/>
                        <label> Client </label>
                        <input type="text" name="client" value="" placeholder="Saisie nom client"/>
                        <label> Client </label>
                        <input type="text" name="client" value="" placeholder="Saisie nom client"/>
                        <label> Client </label>
                        <input type="text" name="client" value="" placeholder="Saisie nom client"/>
                        <label> Client </label>
                        <input type="text" name="client" value="" placeholder="Saisie nom client"/>
                        <label> Client </label>
                        <input type="text" name="client" value="" placeholder="Saisie nom client"/>
                        <label> Client </label>
                        <input type="text" name="client" value="" placeholder="Saisie nom client"/>
                        <label> Client </label>
                        <input type="text" name="client" value="" placeholder="Saisie nom client"/>
                        <label> Client </label>
                        <input type="text" name="client" value="" placeholder="Saisie nom client"/>
                        <textarea name="formcontrat" id="" cols="30" rows="10"></textarea>
                        <input type="submit">            
                    </form>
                </div>
            </div>
        </div>
    </body>

        <?php require_once('_footer/footer.php');
        require_once('_footer/script.php'); ?>
</html>


