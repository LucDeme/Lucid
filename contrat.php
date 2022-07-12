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
            <h1 class="boxes">Un nouveau contrat ? Youuhouu</h1>

            <div class="grid">
                <form method="post" class="form-reseaux boxes">
                    <h2 class="titreh">Saisir un nouveau contrat<hr></h2>
                    <div class="formgrid">
                        <label> Service </label>
                        <select type="text" name="service" value="" placeholder="Saisie nom client">
                            <option value="" disabled selected hidden>Selectionner un service</option>
                            <option value="abo">Abonnement reseaux</option>
                            <option value="campagne">Campagne</option>
                            <option value="crea">Creation graphique & Print</option>
                            <option value="shoot">Photo & Vidéo</option>
                            <option value="Formation">Formation</option>
                            <option value="Site">Site Web</option>
                            <option value="Autre">Autre</option>
                        </select>
                        <label> Type Paiement </label>
                        <input type="text" name="client" value="" placeholder="Saisie nom client"/>
                        <label> Durée </label>
                        <input type="text" name="paiement" value="" placeholder="selectionner type de paiement"/>
                        <label> Durée de l'Abonnement </label>
                        <input type="text" name="duree" value="" placeholder="Definir durée (en mois)"/>
                    </div>
                        <input type="submit" value="Envoyer le formulaire">
                    
                
                </form>
                <p class="listcontrat boxes">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magni, provident ratione! Alias debitis, reiciendis facere libero praesentium commodi impedit dolore incidunt ea illo quod provident laudantium. Beatae nemo fuga commodi.</p>
                <p class="listcontrats boxes">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magni, provident ratione! Alias debitis, reiciendis facere libero praesentium commodi impedit dolore incidunt ea illo quod provident laudantium. Beatae nemo fuga commodi.</p>
            </div>
        </div>
    </body>

        <?php require_once('_footer/footer.php');
        require_once('_footer/script.php'); ?>
</html>


