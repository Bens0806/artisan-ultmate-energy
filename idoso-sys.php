
<?php

if(isset($_POST['mailform']))
 {
    if (filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) 
    if(preg_match("#[0][6][- \.?]?([0-9][0-9][- \.?]?){4}$#", $_POST['tel']))
   {
    {
  
echo '<div style="padding: 20px;background-color: #4CAF50;color:white;"><strong>BRAVO!</strong> Votre formulaire a bien ete envoyee!</div>';

     $to = 'contact.aue@gmail.com';

     $from = "Artisan Ultimate Energy  - Support";

     ini_set("SMTP", "SSL0.OVH.NET");   // Pour les hébergements mutualisés Windows de OVH

     // Subject
     $subject = '(ISOLATION) - Formulaire :' . $_POST['nom'] . ' ' . $_POST['prenom'];

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
           <u>Nom: </u>'. $_POST['nom']. '<br>
           <br />

           <u>Prenom :</u>'.$_POST['prenom'].'<br />

           <u>Adresse Mail :</u>'.$_POST['mail'].'<br />

           <u>Numero de Telephone :</u>'.$_POST['tel'].'<br /><br />
           <u>Adresse :</u>'.$_POST['adress'].'<br />
           <u>Ville :</u>'.$_POST['ville'].'<br />
           <u>Code Postal :</u>'.$_POST['codep'].'<br /><br />
         
           <h3> 2 - Isolation</h3>
         
           <br />

           <u>Quel Type d\'Isolation avez-vous besoin? :</u>'. $_POST['1'] . ' ' . $_POST['2'] . ' ' . $_POST['3'] . ' ' . $_POST['4'] .' '. $_POST['5'] . ' ' . $_POST['7'] . ' ' . $_POST['8'] . '<br />

           <u>Propriétaire ou Locataire ? :</u>'. $_POST['pouc'].'<br />

           <u>Type d\'habitation ? :</u>'. $_POST['t-h'].'<br />

           <u>Type de chauffage ? :</u>'. $_POST['t-c'].'<br />

           <u>Vous êtes ? :</u>'. $_POST['v-e'].'<br />

           <u>Nombre de personne au domicile ? :</u>'. $_POST['n-p-d'].'<br />

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
    echo'<div style="padding: 20px;background-color: #f44336;color:white;"><strong>ATTENTION! </strong>Votre Numero de Telephone est invalide, veuillez le verifier. Ex : 06 00 00 00 00</div>';
   }

   else {
    echo'<div style="padding: 20px;background-color: #f44336;color:white;"><strong>ATTENTION! </strong>Votre Mail est invalide, veuillez le verifier. Ex : exemple@exemple.fr</div>';
   }

}  

?>