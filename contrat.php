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
                <div class="boxes form-reseaux">

                    <div class="absolu">              
                    <form name="votre_activite" action="" method="post"> 
                        <label><strong>Votre activité :</strong></label>
                        <select name="activite" autocomplete="off" OnChange="affiche_formulaire();">
                            <option value="" selected hidden>Choisir une activité</option>
                            <option value="association">Abonnement reseaux</option>
                            <option value="entreprise">Campagne</option>
                            <option value="entreprise">Creation graphique & Print</option>
                            <option value="entreprise">Photo & Vidéo</option>
                            <option value="entreprise">Formation</option>
                            <option value="entreprise">Site Web</option>
                            <option value="entreprise">Autre</option>
                        </select>
                    </form>
                    <span id="spanAssociation" style="position:absolute; visibility:hidden;">
                    	<ul><form id="formAssociation" name="formAssociation" method="POST">
                            <li><label>Nom client</label> <input type="text" name="nom_association"/></li>
                            <li><label>Durée de l'abonnement</label> <input type="text" name="activite_association"/></li>
                            <li><label>Reseaux</label>
                                <INPUT class="checkboxes" type="checkbox" name="choix1" value="1"> FB
                                <INPUT class="checkboxes" type="checkbox" name="choix2" value="2"> INSTA
                                <INPUT class="checkboxes" type="checkbox" name="choix3" value="3"> LINK
                                <INPUT class="checkboxes" type="checkbox" name="choix4" value="4"> ADS
                            <li><label>Date de début de contrat</label> <input type="text" name="nom_association"/></li> 
                            <li><label>Budget abonnement</label> <input type="text" name="activite_association"/></li> 
                            <li><label>Budget publicité</label> <input type="text" name="nom_association"/></li> 
                            <li><label>Frais d'ouverture</label> <input type="text" name="activite_association"/></li> 
                            <li><label>Date dernier rendez-vous</label> <input type="text" name="nom_association"/></li>
                            <label>type paiement</label> <select name="activite" autocomplete="off" OnChange="affiche_formulaire();">
                                <option value="" selected hidden>type paiement</option>
                                <option value="association">Prélevement auto</option>
                                <option value="entreprise">Virement</option>
                                <option value="entreprise">Cheque</option>
                            </select>
                    	</form></ul>
                    </span>
                    <span id="spanEntreprise" style="position:absolute; visibility:hidden;">
                    	<ul><form id="formEntreprise" name="formEntreprise" method="POST"> 
                          <li><label><strong>Nom client :</strong></label> <input type="text" name="nom_entreprise"/></li>
                          <li><label><strong>Date de vente :</strong></label> <input type="text" name="code_entreprise"/></li> 
                          <li><label><strong>Montant prestation :</strong></label> <input type="text" name="ville_entreprise"/></li> 
                    	</form></ul>
                    </span>
                    </div>  
                </div>



                <!-- <form method="post" class="form-reseaux boxes">
                    <h2 class="titreh">Saisir un nouveau contrat<hr></h2>
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
                    <input type="submit" value="Envoyer le formulaire">                 
                </form> -->

                <div class="listcontrat boxes">
                    <table>
                        <thead>
                            <tr>
                                <th colspan="1">Client</th>
                                <th colspan="1">Prestation</th>
                                <th colspan="1">janv.</th>	
                                <th colspan="1">févr.</th>
                                <th colspan="1">mars.</th>
                                <th colspan="1">avr.</th>
                                <th colspan="1">juin.</th>
                                <th colspan="1">juil.</th>
                                <th colspan="1">août.</th>
                                <th colspan="1">sept.</th>
                                <th colspan="1">oct.</th>
                                <th colspan="1">nov.</th>
                                <th colspan="1">déc.</th>
                                <th colspan="1">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Nom Client</td>
                                <td>Type Contrat</td>
                            </tr>
                        </tbody>
                    </table></p>
                </div>
                <p class="listcontrats boxes">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magni, provident rat
                    ione! Alias debitis, reiciendis facere libero praesentium commodi impedit dolore incidunt ea illo quod p
                    rovident laudantium. Beatae nemo fuga commodi.</p>
            </div>
        </div>
    </body>

        <?php require_once('_footer/footer.php');
        require_once('_footer/script.php'); ?>
</html>


