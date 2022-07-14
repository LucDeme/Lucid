
<!-- afficher le form de la page contrat en fonction du select -->

<script>
    function affiche_formulaire(){
        var choix = document.form_contrat.type_contrat.selectedIndex;        
        document.getElementById('spanreseaux').style.visibility = 'hidden';
        document.getElementById('spanautreservices').style.visibility  = 'hidden';
        document.getElementById('spanreseaux').style.visibility = (choix==1)? 'visible' : 'hidden';
        document.getElementById('spanautreservices').style.visibility  = (choix==2) || (choix==3) || (choix==4) || (choix==5) || (choix==6) || (choix==7)? 'visible' : 'hidden';
        document.getElementById('spanreseaux').style.position = (choix==1)? 'initial' : 'absolute';
        document.getElementById('spanautreservices').style.position  = (choix==2) || (choix==3) || (choix==4) || (choix==5) || (choix==6) || (choix==7)? 'initial' : 'absolute';

        }
</script>