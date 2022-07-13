<!DOCTYPE html PUBLIC>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>activite</title>
</head>
<body>
<script>
    function affiche_formulaire(){
        var choix = document.votre_activite.activite.selectedIndex;        
        document.getElementById('spanAssociation').style.visibility = 'hidden';
        document.getElementById('spanEntreprise').style.visibility  = 'hidden';
        document.getElementById('spanAssociation').style.visibility = (choix==1)? 'visible' : 'hidden';
        document.getElementById('spanEntreprise').style.visibility  = (choix==2)? 'visible' : 'hidden';
    }
</script>

 

<form name="votre_activite" action="" method="post"> 
	<label><strong>Votre activité :</strong></label>
	<select name="activite" OnChange="affiche_formulaire();">
		<option value="" selected>Choisir une activité</option>
		<option value="association">Association</option>
		<option value="entreprise">Entreprise</option>
	</select>
</form>
 
<span id="spanAssociation" style="position:absolute; visibility:hidden;">
	<ul><form id="formAssociation" name="formAssociation" method="POST">
      <li><label><strong>Nom :</strong></label> <input type="text" name="nom_association"/></li> 
      <li><label><strong>But, Activité</strong></label> <input type="text" name="activite_association"/></li> 
	</form></ul>
</span>
 
<span id="spanEntreprise" style="position:absolute; visibility:hidden;">
	<ul><form id="formEntreprise" name="formEntreprise" method="POST"> 
      <li><label><strong>Nom :</strong></label> <input type="text" name="nom_entreprise"/></li>
      <li><label><strong>Adresse :</strong></label> <input type="text" name="adresse_entreprise" /></li>
      <li><label><strong>Code Postal :</strong></label> <input type="text" name="code_entreprise"/></li> 
      <li><label><strong>Ville :</strong></label> <input type="text" name="ville_entreprise"/></li> 
      <li><label><strong>Secteur d'activité :</strong></label> <input type="text" name="activite_entreprise"/></li>
	</form></ul>
</span>
 
</body>
</html>