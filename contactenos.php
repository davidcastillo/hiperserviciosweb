<!DOCTYPE html>
<html lang="es">
  <head>

    <title>Hiperservicios, traspaso de vehiculos y demás tramites de transito</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-K8CXZN');</script>
    <!-- End Google Tag Manager -->

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico">

    <!-- Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,400italic,600,600italic,700,700italic,900italic,900,300,300italic%7COpen+Sans:400,400italic,700,700italic' rel='stylesheet' type='text/css' />

    <!-- Css Files -->
    <link rel="stylesheet" type="text/css" href="style/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="style/owl.transitions.css">
		<link rel="stylesheet" type="text/css" href="style/owl.carousel.css">
		<link rel="stylesheet" type="text/css" href="style/owl.theme.css">
    <link rel="stylesheet" type="text/css" href="style/prettyPhoto.css">
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <link rel="stylesheet" type="text/css" href="style/responsive.css">
    <link rel="stylesheet" type="text/css" href="style/icons.css">
  </head>
  <body>
    <!-- Container -->
    <div class="site-container">

      <!--========================Header========================== -->
     <?php include 'header.php'; ?>
      <!-- End Header -->


      <!--========================google-map========================== -->
      <div class="google-map">
      </div>
      <!-- google-map -->

      <!--========================contact-us========================== -->
      <section class="contact-us d-toppagefixed">
        <div class="container">
          <div class="row">
            <div class="col-md-7">
              <form action="includes/sendemail.php" class="contact-form">
                <input type="text" name="name" placeholder="Su nombre">
                <input type="email" name="email" placeholder="Su Email">
                  <input type="text" name="subject" placeholder="Tema">
                  <textarea name="message" placeholder="Inquietud"></textarea>
                  <button type="submit" class="submit">enviar</button>
              </form> 
              
        <!-- End form holder -->
            </div>
            <div class="col-md-5">
              <div class="contact-info">
                <h4>HIPERSERVICIOS COLOMBIA</h4>
                <p>Con gusto atenderemos sus preguntas e inquietudes, muy pronto uno de nuestros asesores se pondra en contacto con Ud</p>
                <ul>
                <li><i class="icomoon-icon-phone"></i>315 229 23 79 -  317 482 38 41 <br>(8) 266 74 82 - 266 75 55</br></li>
                  <li><i class="icon-map-marker"></i><strong>BOGOTÁ:</strong>
                    <br>Ave suba No. 124 - 20 C.C Bahia 122 Local 100, Cerca al SIM de BOULEVAR</br>
                    </li>
                   <li><i class="icon-map-marker"></i><strong>MEDELLÍN:</strong>
                   <br>Cra. 43a #19A-87 Centro Comercial Automotriz Movicentro</br> 
                   </li>
                    <li><i class="icon-map-marker"></i><strong>IBAGUÉ:</strong>
                    <br>Calle 60 No.2A - 59 Barrio La Floresta</br> 
                    </li>
                    <li><i class="icomoon-icon-mail2"></i>asesorias@transitoscolombia.com</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End contact-us -->


     <!--========================Footer========================== -->
			     <?php include 'footer.php'; ?>
			<!-- End Footer -->


			
      <!-- scrollToTop -->
      <a href="#" class="scrollToTop">
        <i class="icon-angle-up"></i>
      </a>
    </div>
    <!-- End Container -->
    <!-- Js File -->
    <script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/owl.carousel.js"></script>
    <script type="text/javascript" src="js/jquery.appear.js"></script>
		<script type="text/javascript" src="js/jquery.countTo.js"></script>
    <script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="js/jquery.imagesloaded.min.js"></script>
    <script type="text/javascript" src="js/jquery.isotope.min.js"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
        <script type="text/javascript" src="js/gmap3.min.js"></script>
        <script type="text/javascript" src="js/validate.js"></script>
    <!-- Custom js -->
    <script type="text/javascript" src="js/custom.js"></script>
  </body>
</html>
