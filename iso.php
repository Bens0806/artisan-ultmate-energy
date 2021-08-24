
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
        <link rel="stylesheet" href="assets/css/mail.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
        <link rel="stylesheet" href="assets/css/templatemo-lava.css">
        <link rel="stylesheet" href="assets/css/owl-carousel.css">
    </head>
<body class="bg-white text-dark">
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-195416434-1">
</script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-195416434-1');
</script>
    <?php include('idoso-sys.php');
          include('nav.php'); ?>
    <div style="margin-top:80px;"></div>
      <form action="idoso-sys.php" method="post" >
      
        <h3 class="text-center">TESTEZ VOTRE ÉLIGIBILITÉ - Isolation</h3>
        
        <fieldset>
        <div style="margin-top: 15px;"></div>
          <legend><span class="number">1</span>Informations</legend>
        <div style="margin-bottom: 15px;"></div>

          <label for="name">Nom:</label>
          <input type="text" id="name" name="nom" placeholder="Ex : Deschamps">
          <label for="name">Prenom:</label>
          <input type="text" id="name" name="prenom" placeholder="Ex : Jean">
          
          <label for="mail">Mail:</label>
          <input type="text" id="mail" name="mail" placeholder="Ex : exemple@exemple.com">
          <span class="error"><?php $err_mail ?></span>

          <label for="tel">Telephone:</label>
          <input type="tel" id="tel" name="tel" placeholder="+33 6 01 02 03 04">

          <label>Adresse:</label>
          <input id="adress" name="adress" type="text">
 
          <label>Ville:</label>
          <input id="ville" name="ville" type="text">

          <label>Code Postal:</label>
          <input id="codep" name="codep" type="text" placeholder="Ex : 00000">
           </fieldset>
        
        <fieldset>
          <legend><span class="number">2</span>Isolation</legend>
          <div style="margin-top: 15px;"></div>
        </fieldset>
        <fieldset>
      
        <label for="scales">Quel Type d'Isolation avez-vous besoin?</label>
           <div class="checkbox">
            <label for="1">            
            <input type="checkbox" id="scales" name="1" value="Cave">Cave</label>
            <label for="2">            
            <input type="checkbox" id="scales" name="2" value="Sous sols">Sous Sols</label>
            <label for="3">            
            <input type="checkbox" id="scales" name="3" value="Vide Sanitaire">Vide Sanitaire</label>
            <label for="4">
            <input type="checkbox" id="scales" name="4" value="Comble Rampants">Comble Rampants</label>
            <label for="4">
            <input type="checkbox" id="scales" name="4" value="Comble Perdus">Comble Perdus</label>
            <label for="5">
            <input type="checkbox" id="scales" name="5" value="Garage">Garage</label>
            <label for="6">
            <input type="checkbox" id="scales" name="6" value="Mur Interieur">Mur Interieur</label>
            <label for="7">
            <input type="checkbox" id="scales" name="7" value="Mur Exterieur">Mur Extérieur</label>
            
    </div>
        <hr>

          <select name="pouc" aria-required="true" aria-invalid="false">
            <option value="Champ non-rempli">Propriétaire ou Locataire ?</option>
            <option value="Propriétaire">Propriétaire</option>
            <option value="Locataire">Locataire</option>
            <option value="Autre">Autre</option>
          </select>

          <select name="t-h" aria-required="true" aria-invalid="false">
            <option value="Champ non-rempli">Type d'habitation ?</option>
            <option value="Appartement">Appartement</option>
            <option value="Pavillon">Pavillon</option>
            <option value="Maisonde ville">Maisonde ville</option>
            <option value="Loft">Loft</option>
            <option value="Autre">Autre</option>
          </select>

          <select name="t-c" aria-required="true" aria-invalid="false">
            <option value="Champ non-rempli">Type de chauffage ?</option>
            <option value="Gaz">Gaz</option>
            <option value="Fioul">Fioul</option>
            <option value="Bois ou Biomasse">Bois ou Biomasse</option>
            <option value="Electrique">Electrique</option>
            <option value="Pompe à chaleur">Pompe à chaleur</option>
            <option value="Autre">Autre</option>
          </select>

          <select name="v-e" aria-required="true" aria-invalid="false">
            <option value="Champ non-rempli">Vous êtes ?</option>
            <option value="Marié">Marié</option>
            <option value="Pacsé">Pacsé</option>
            <option value="En Union Libre">En Union Libre</option>
            <option value="Célibataire">Célibataire</option>
            <option value="Divorcé">Divorcé</option>
            <option value="Veuf/Veuve">Veuf/Veuve</option>
          </select>

          <select name="n-p-d" aria-required="true" aria-invalid="false">
            <option value="Champ non-rempli">Nombre de personne au domicile ?</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="Plus de 6">Plus de 6</option>`
          </select>

          <hr>

          <label>Numéro Déclarant 1*:</label>
          <input id="nd1" name="nd1" type="text">

          <label>Numéro de L'avis*:</label>
          <input id="nda" name="nda" type="text">

          <p><strong>Si vous disposez d'une 2e Avis d'imposition dans le Foyer Fiscal :</strong></p>
          <label>Numéro Déclarant 2:</label>
          <input id="nd2" name="nd2" type="text">

          <label>Numéro de L'avis:</label>
          <input id="ndb" name="ndb" type="text">

          <label>Message :</label>
          <textarea name="mess" placeholder="Commentaire ..."></textarea>
        </fielset>

        <div style="margin-top: 15px;"></div>

        <button type="submit" name="mailform">Soumettre</button>

</form>
 
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    </body>
</html>


