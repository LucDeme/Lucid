<?php
    require_once('include.php');
    $var = "index";
    // On traite le formulaire
    if(!empty($_POST)){
        // POST n'est pas vide, on vérifie que totues les données sont présentes
        if(
            isset($_POST["type_contrat"], $_POST["client_contrat"])
            && !empty($_POST["type_contrat"]) && !empty($_POST["client_contrat"])
            
        ){
            // le formulaire est complet
            // On récupère les données en les protégeant (failles xss)
            // On retire toutes balise du titre
            $type_contrat = strip_tags($_POST["type_contrat"]);

            // on neutralise toute balise du contenu
            $client_contrat = htmlspecialchars($_POST["client_contrat"]);

            // On peut les enregistrer
        // On se connecte a la base
            require_once "../../includes/connexionDB.php";
            // On écrit la requête
            $sql = "INSERT INTO 'contrat'('type_contrat','client_contrat') VALUE (:type_contrat, :client_contrat)"

            // on prépare la requête
            $query = $db

            }
        else{
            die("fomulaire incomplet");
        }
    };
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
    <div class="grid">
        
        <?php require_once('_menu/menu.php'); ?>

        <form class="boxes" id="formcontrat" name="form_contrat" action="" method="post"> 
            <label><strong>Votre activité :</strong></label>
            <select name="type_contrat" autocomplete="off" OnChange="affiche_formulaire();">
                <option value="" selected hidden>Choisir une activité</option>
                <option value="association">Abonnement reseaux</option>
                <option value="entreprise">Campagne</option>
                <option value="entreprise">Creation graphique & Print</option>
                <option value="entreprise">Formation</option>
                <option value="entreprise">Site Web</option>
                <option value="entreprise">Autre</option>
                <option value="entreprise">Photo & Vidéo</option>
            </select>
        

            <span id="spanreseaux" style="position: absolute; visibility:hidden;">
            <ul>
                <li class="liform"><label>Nom client</label> <input type="text" name="client_contrat"/></li>
                <li class="liform"><label>Durée de l'abonnement</label> <input type="text" name=""/></li>
                <li class="liform">
                    <label>Reseaux</label>
                    <div class="checkboxes">
                        <input type="checkbox" autocomplete="off" class="demo1" id="demo1">
                        <label for="demo1" class="checboxlabel"><i class="uil uil-facebook"></i></label>
                        <input type="checkbox" autocomplete="off" class="demo1" id="demo2">
                        <label for="demo2" class="checboxlabel"><i class="uil uil-instagram"></i></i></label>
                        <input type="checkbox" autocomplete="off" class="demo1" id="demo3">
                        <label for="demo3" class="checboxlabel"><i class="uil uil-linkedin"></i></label>
                        <input type="checkbox" autocomplete="off" class="demo1" id="demo4">
                        <label for="demo4" class="checboxlabel"><i class="uil uil-google"></i></label>
                    </div>
                </li>
                <li class="liform"><label>Date de début de contrat</label> <input type="date" name=""/></li> 
                <li class="liform"><label>Budget abonnement</label> <input type="text" name=""/></li> 
                <li class="liform"><label>Budget publicité</label> <input type="text" name=""/></li> 
                <li class="liform"><label>Frais d'ouverture</label> <input type="text" name=""/></li> 
                <li class="liform"><label>Date dernier rendez-vous</label> <input type="date" name=""/></li>
                <li class="liform">
                <label>type paiement</label> <select name="" autocomplete="off" OnChange="affiche_formulaire();">
                    <option value="" selected hidden>type paiement</option>
                    <option value="association">Prélevement auto</option>
                    <option value="entreprise">Virement</option>
                    <option value="entreprise">Cheque</option>
                </select>
                </li>
            </ul>
            </span>

            <span id="spanautreservices" style="position: absolute; visibility:hidden;">
            	<ul> 
                  <li><label><strong>Nom client :</strong></label> <input type="text" name="nom_entreprise"/></li>
                  <li><label><strong>Date de vente :</strong></label> <input type="text" name="code_entreprise"/></li> 
                  <li><label><strong>Montant prestation :</strong></label> <input type="text" name="ville_entreprise"/></li> 
            	</ul>
            </span>
            <input type="submit" name="save_contrat">
        </form>

        <div class="listcontrat boxes" id="tablecontrat">
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
                        <td>Nom Client</td>
                        <td>Type Contrat</td>
                        <td>Nom Client</td>
                        <td>Type Contrat</td>
                        <td>Nom Client</td>
                        <td>Type Contrat</td>
                        <td>Nom Client</td>
                        <td>Type Contrat</td>
                        <td>Nom Client</td>
                        <td>Type Contrat</td>
                    </tr>
                </tbody>
            </table></p>
        </div>

    </div>
    </body>

       <?php require_once('_footer/footer.php');
        require_once('_footer/script.php'); ?>
</html>






