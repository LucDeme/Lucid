
<!-- afficher le form de la page contrat en fonction du select -->

<script>
    function affiche_formulaire(){
        var choix = document.votre_activite.activite.selectedIndex;        
        document.getElementById('spanAssociation').style.visibility = 'hidden';
        document.getElementById('spanEntreprise').style.visibility  = 'hidden';
        document.getElementById('spanAssociation').style.visibility = (choix==1)? 'visible' : 'hidden';
        document.getElementById('spanEntreprise').style.visibility  = (choix==2) || (choix==3) || (choix==4) || (choix==5) || (choix==6) || (choix==7)? 'visible' : 'hidden';
        }
</script>