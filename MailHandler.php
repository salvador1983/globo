<?php
include ('smtp/class.phpmailer.php');

$nombre = $_POST['name'];
$telefono = $_POST['telefono'];
$texto = $_POST['texto']; 
$mail = $_POST['mail']; 

$mensaje = "Este mensaje fue enviado por " . $nombre . " <br>"; 
$mensaje .= "Su e-mail es: " . $mail . " <br>"; 
$mensaje .= "Telefono: " . $telefono . " <br>"; 
$mensaje .= "Mensaje: " . $texto . " <br>"; 
$mensaje .= "Enviado el " . date('d/m/Y', time()); 

$para = 'info@jaliscoenglobo.com';
$asunto = 'Contacto desde la web'; 


if (empty($_POST['name'])){
   $respuesta ="Es necesario completar el formulario de contacto";
}else{
	$mail = new PHPMailer();
	
	$mail->IsSMTP();
	$mail->IsHTML(true);

	$mail->Host = "jaliscoenglobo.com";
	
	$mail->From = "noreply@jaliscoenglobo.com";
	
	$mail->SMTPAuth = true;
	
	$mail->Username = "noreply@jaliscoenglobo.com";
	$mail->Password = "jaliscoenglobo2016";
	
	$mail->Subject = $asunto;
	
	$body = $mensaje;
	
	$mail->FromName = "WEB Jalisco en Globo";
	
	$mail->MsgHTML($body);
	
	$mail->AddAddress($para);
	
	if(!$mail->Send()) {
		$respuesta = "Error enviando: " . $mail->ErrorInfo;
	} else {
		$respuesta = "Gracias sus datos han sido recibidos";
	}
}

 
?> 

<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8" />
      <title>Jaliso en Globo</title>
      <meta name="description" content="">
      <meta name="author" content="">
      <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
      <![endif]-->
      <!-- Mobile Specific Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
      <script type="text/javascript">
         var browser			= navigator.userAgent;
         var browserRegex	= /(Android|BlackBerry|IEMobile|Nokia|iP(ad|hone|od)|Opera M(obi|ini))/;
         var isMobile		= false;
         if(browser.match(browserRegex)) {
         	isMobile			= true;
         	addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
         	function hideURLbar(){
         		window.scrollTo(0,1);
         	}
         }
      </script>
      <!-- CSS -->
      <link rel="stylesheet" href="includes/base.css">
      <link rel="stylesheet" href="includes/amazium.css">
      <link rel="stylesheet" href="includes/layout.css">
      <link rel="stylesheet" href="includes/style.css">
      <!-- nav resposive -->

    <link rel="stylesheet" href="css/responsive-nav.css">
    <link rel="stylesheet" href="css/styles.css">
    <script src="js/responsive-nav.js"></script>
    
      <!-- end nav resposive -->
      <!-- Favicons -->
      <link rel="shortcut icon" href="images/favicon.ico">
      <link rel="apple-touch-icon-precomposed" href="images/apple-touch-icon.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/apple-touch-icon-72x72.png" />
      <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/apple-touch-icon-114x114.png" />
      <!-- To Top scripts -->
     
      <script src="includes/smoothscroll.js"type="text/javascript" ></script>
      <script src="http://jqueryjs.googlecode.com/files/jquery-1.3.js" type="text/javascript"></script>
      <script src="includes/jquery.easing.1.3.js" type="text/javascript"></script>
      <script src="includes/jquery.ui.totop.js" type="text/javascript"></script>
      
      <script type="text/javascript">
         $(document).ready(function() {
         	$().UItoTop({ easingType: 'easeOutQuart' });
         	prependTo:'#demo1'
         });
      </script>
      
      <!-- slideshow -->
      <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700,300,300italic' rel='stylesheet' type='text/css'>
      <link rel="stylesheet" type="text/css" href="css/demo.css" />
      
            <!-- end -->
 </head>
   <body>
     <header>
      <div class="row">
       <section class="header">
         <div class="row">
           <div class="grid_6"><a href="index.html">
               <img src="./images/logotipo.png" width="436" height="147"></a>
               <!-- 	<h1>DR . Alberto García de Alba Paniagua</h1> -->
            </div>
            </section>
           </div>
      </div>
       </header>
                     <!-- star nav -->
         <div class="backnav">
          <div class="row">
         
             <nav class="nav-collapse">
             
                     <ul class="square">
                     
                     <li><a href="index.html">inicio</a></li>
                      
                     <li><a href="nosotros.html">nosotros</a></li>
                      
                     <li><a href="procedimientos.html">procedimientos</a></li>
                      
                     <li><a href="galeria.html">galeria</a></li>
                        
                      <li><a href="blog.html">blog</a></li>
                         
                     <li><a href="contacto.html">contacto</a></li>
                    </ul>                   
               </nav>
             </div>
            </div>
            
            <!-- end navegador -->
            <!-- formulario -->
            <div class="row">
	<div class="grid_8 offset_3">
     <h1><?php echo $respuesta; ?></h1>
			 </div>
     </div>
                   <!-- footer star -->
      <footer>
         <hr />
         <div class="row">
            <div class="grid_6">
               <h1>jalisco en globo</h1>
               <ul class="square">
                  <li><a href="index.html">inicio</a></li>
                  <li><a href="nosotros.html">nosotros</a></li>
                  <li><a href="pilotos.html">pilotos</a></li>
                  <li><a href="galeria.html">galeria</a></li>
                  <li><a href="paquetes.html">paquetes</a></li>
                  <li><a href="blog.html">blog</a></li>
                  <li><a href="concejos.html">recomendaciones</a></li>
                  <li><a href="contacto.html">contacto</a></li>
                </ul>
            </div>
                 <div class="grid_3">
               <h1>Social</h1>
               <ul class="square">
                  <li><a href="https://www.facebook.com/jalisco.englobo">facebook</a></li>
                  <li><a href="https://twitter.com/JALISCOENGLOBO1">twitter</a></li>
                  <li><a href="http://www.yumping.com.mx/vuelo-en-globo/jalisco-en-globo--e19680646">bloger</a></li>
               </ul>
            </div>
            <div class="grid_3"><img src="./images/index_4.png" width="250" height="250" alt="logofooter"></div>
         </div>
      </footer>
     </div>
      </div>
       <script>
      var navigation = responsiveNav(".nav-collapse", {
        animate: true,                    // Boolean: Use CSS3 transitions, true or false
        transition: 284,                  // Integer: Speed of the transition, in milliseconds
        label: "Menu",                    // String: Label for the navigation toggle
        insert: "after",                  // String: Insert the toggle before or after the navigation
        customToggle: "",                 // Selector: Specify the ID of a custom toggle
        closeOnNavClick: false,           // Boolean: Close the navigation when one of the links are clicked
        openPos: "relative",              // String: Position of the opened nav, relative or static
        navClass: "nav-collapse",         // String: Default CSS class. If changed, you need to edit the CSS too!
        navActiveClass: "js-nav-active",  // String: Class that is added to <html> element when nav is active
        jsClass: "js",                    // String: 'JS enabled' class which is added to <html> element
        init: function(){},               // Function: Init callback
        open: function(){},               // Function: Open callback
        close: function(){}               // Function: Close callback
      });
    </script>

   </body>
</html>