
<?php

if(isset($_POST['mailform2']))
 {
    if (filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL) && !empty($_POST['mail'])) 
    if(preg_match("#[0][6][- \.?]?([0-9][0-9][- \.?]?){4}$#", $_POST['tel']) && !empty($_POST['tel']))
   {
    {
  
echo '<div style="padding: 20px;background-color: #4CAF50;color:white;"><strong>BRAVO!</strong> Votre formulaire a bien ete envoyee!</div>';

    header("Location: pac.php");


     $to = 'contact.aue@gmail.com';

     $from = "Artisan Ultimate Energy  - Support";

     ini_set("SMTP", "SSL0.OVH.NET");   // Pour les hébergements mutualisés Windows de OVH

     // Subject
     $subject = '(POMPE A CHALEUR) - Formulaire :' . $_POST['nom'] ;

     // Headers
     $headers = 'Mime-Version: 1.0'."\r\n";
     $headers .= 'Content-type: text/html; charset=utf-8'."\r\n";
     $headers .= "\r\n";


   // Message
   $msg =      ' <html>
   <body>

   
       <div align="center">
           <br />
           <h3> 1 - Informations Personnels</h3>
           <br />
           <u>Nom/Prenom :</u>'. $_POST['nom']. '<br />

           <u>Adresse Mail :</u>'.$_POST['mail'].'<br />

           <u>Numero de Telephone :</u>'.$_POST['tel'].'<br /><br />
           <u>Adresse :</u>'.$_POST['adress'].'<br />
           <u>Ville :</u>'.$_POST['ville'].'<br />
           <u>Code Postal :</u>'.$_POST['codep'].'<br /><br />
         
           <h3> 2 - Pompe a Chaleur</h3>
         
           <br />

           <u>Quel mode de chauffage souhaitez-vous? :</u>'. $_POST['qmca'].'<br />

           <u>Quel type de chauffage avez-vous actuellement ? :</u>'. $_POST['qtca'].'<br />

           <u>Propriétaire ou Locataire ? :</u>'. $_POST['pouc'].'<br />

           <u>Votre logement a-t-il plus de 2 ans ? :</u>'. $_POST['l-2-a'].'<br />

           <u>Nombre de personne au domicile ? :</u>'. $_POST['n-p-d'].'<br />

           <u>Quelle est la surface de votre maison en m² :</u>'. $_POST['m2'].'m²<br />

           <u>Numéro Déclarant 1* :</u>'. $_POST['nd1'].'<br />

           <u> Numéro de L\'avis*: </u>'. $_POST['nda'].'<br />

           <u>Numéro Déclarant 2 :</u>'. $_POST['nd2'].'<br />

           <u>Numéro de L\'avis :  </u>'. $_POST['ndb'].'<br />

           <u>Messae :</u>'. $_POST['mess'].'<br />

           '.nl2br($_POST['message']).'
           <br />
       </div>
   </body>
   </html>';

   // Function mail()
   mail($to, $subject, $msg, $headers);
    }

  }
  else {
    echo'<div style="padding: 20px;background-color: #f44336;color:white;"><strong>ATTENTION! </strong>Votre Numero de Telephone est invalide, veuillez le verifier. Ex : 06 00 00 00 00. Votre champ est aussi potentielement vide.</div>';
   }

   else {
    echo'<div style="padding: 20px;background-color: #f44336;color:white;"><strong>ATTENTION! </strong>Votre Mail est invalide, veuillez le verifier. Ex : exemple@exemple.fr. Votre champ est aussi potentielement vide.</div>';
   }

}  

?>