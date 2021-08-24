<!DOCTYPE html>

<html lang="en">



<head>



    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="">

    <meta name="author" content="TemplateMo">

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">



    <title>Artisan Ultimate Energy - Footer</title>

<!--



Lava Landing Page



https://templatemo.com/tm-540-lava-landing-page



-->



    <!-- Additional CSS Files -->

    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">



    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">



    <link rel="stylesheet" href="assets/css/templatemo-lava.css">



    <link rel="stylesheet" href="assets/css/owl-carousel.css">



</head>



<body>



    <!-- ***** Footer Start ***** -->

    <footer id="contact-us">

        <div class="container">

            <div class="footer-content">

                <div class="row">

                    <!-- ***** Contact Form Start ***** -->

                    <div class="col-lg-6 col-md-12 col-sm-12">

                        <div class="contact-form">

                            <form id="contact" action="" method="post">

                            <center><h2>Question ? Demande ? Aide ? Contactez-nous !</h2></center>
                                <div class="row">

                                <div class="col-md-6 col-sm-12">

                                    <fieldset>

                                        <input name="name" type="text" id="name" placeholder="Nom*" required=""

                                            style="background-color: rgba(250,250,250,0.3);">

                                    </fieldset>

                                    </div>

                                    <div class="col-md-6 col-sm-12">

                                    <fieldset>

                                        <input name="-rename" type="text" id="name" placeholder="Prenom*" required=""

                                            style="background-color: rgba(250,250,250,0.3);">

                                    </fieldset>

                                    </div>

                                    <div class="col-md-6 col-sm-12">

                                        <fieldset>

                                            <input name="email" type="text" id="email" placeholder="E-Mail*"

                                                required="" style="background-color: rgba(250,250,250,0.3);">

                                        </fieldset>

                                    </div>

                                    <div class="col-md-6 col-sm-12">

                                        <fieldset>

                                            <input name="tel" type="text" id="tel" placeholder="Telephone (facultatif)"

                                                 style="background-color: rgba(250,250,250,0.3);">

                                        </fieldset>

                                    </div>

                                    <div class="col-lg-12">

                                        <fieldset>

                                            <textarea name="message" rows="6" id="message" placeholder="Votre demande*"

                                                required="" style="background-color: rgba(250,250,250,0.3);"></textarea>

                                        </fieldset>

                                    </div>

                                    <div class="col-lg-12">

                                        <fieldset>

                                            <button type="submit" id="form-submit" name="suppform" class="main-button">Soumettre</button>

                                        </fieldset>

                                        <?php
if(isset($_POST['suppform']))
{
    if (filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL) && !empty($_POST['mail']))
    if (!empty($_POST['name']) && !empty($_POST['prename']) && !empty($_POST['mail']) && !empty($_POST['mess']))
    if(preg_match("#[0][6][- \.?]?([0-9][0-9][- \.?]?){4}$#", $_POST['tel']))

     {

    
      echo "Formulaire envoyée - Vous serez contactée trés rapidement! Veuillez consulter votre mail constamment!";

      $to = 'contact.aue@gmail.com';

      $from = "Artisan Ultimate Energy - Support";

      $topic = "Demande AIDE - AUE";

      ini_set("SMTP", "SSL0.OVH.NET");   // Pour les hébergements mutualisés Windows de OVH

      // Subject
      $subject = 'Demande d\'aide -' . $_POST['name'] . ' ' . $_POST['prename'];
 
      // Headers
      $headers = 'Mime-Version: 1.0'."\r\n";
      $headers .= 'Content-type: text/html; charset=utf-8'."\r\n";
      $headers .= "\r\n";


    // Message
    $msg =      ' <html>
    <body>
  
        <div align="center">
            <h3> Demande - Question </h3>
            <br />
        
            <u>Nom :</u>'.$_POST['name'].'<br />

            <u>Prenom :</u>'.$_POST['prename'].'<br />

            <u>Adresse Mail :</u>'.$_POST['email'].'<br />

            <u>Telephone :</u>'.$_POST['tel'].'<br />

            <u>Message :</u>'. $_POST['mess'].'<br />

            '.nl2br($_POST['message']).'
            <br />
        </div>
    </body>
    </html>';

    // Function mail()
    mail($to, $subject, $msg, $headers);
  
}  
else {  
    echo'<div style="padding: 20px;color:#f44336;"><strong>ATTENTION! </strong>Votre mail est invalide, veuillez le verifier. Ex : exemple@exemple.fr</div>';
   }

   else {
    echo'<div style="padding: 20px;color: #f44336;"><strong>ATTENTION! </strong>Veuillez renseigner vos champs obligatoires !</div>';
   }

   else {
    echo'<div style="padding: 20px;color: #f44336;"><strong>ATTENTION! </strong>Votre Numero de Telephone est invalide, veuillez le verifier. Ex :06 00 00 00 00</div>';
   }
}
?>

                                    </div>

                                    
                                </div>

                            </form>

                        </div>

                    </div>

                    <!-- ***** Contact Form End ***** -->

                    <div class="right-content col-lg-6 col-md-12 col-sm-12">

                        <h2>À propos <em>de nous</em></h2>

                        <p>La Société Artisan Ultimate Energy vous aidera à avancer dans vos projets d’énergie renouvelable avec l’accompagnement nécessaire pour bénéficier des aides en vigueurs. <br> <br> Dans le cas, où vous souhaiteriez importer des fichiers ou toute autre chose plus détaillante concernant votre demande envoyez directement un email a : <strong>contact.aue@gmail.com</strong></p>

                       <!-- <ul class="social">

                            <li><a href="https://fb.com/templatemo"><i class="fa fa-facebook"></i></a></li>

                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>

                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>

                            <li><a href="#"><i class="fa fa-rss"></i></a></li>

                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>

                        </ul>
!-->
                    </div>

                </div>

            </div>

            <div class="row">

                <div class="col-lg-12">

                    <div class="sub-footer">

                        <p>Copyright &copy; 2020 - Artisan Ultimate Energy</p>

                    </div>

                </div>

            </div>

        </div>

    </footer>





</body>

</html>