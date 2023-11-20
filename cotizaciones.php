<?php
session_start();
include_once("admin/php/conexion.php");
$sql=new conectar();
$sql->mysqlsrv();
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Explore Unique</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />
    
    
    
    <link rel="shortcut icon" href="../favicon.ico">
		<link href='http://fonts.googleapis.com/css?family=Raleway:400,800,300' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/set1.css" />
        <link rel="stylesheet" type="text/css" href="css/style7.css" />
  		<script src="js/modernizr.custom.js"></script>

  <!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FREEHTML5.CO
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">
	<!-- <link href='https://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700italic,900,700,900italic' rel='stylesheet' type='text/css'> -->

	<!-- Stylesheets -->
	<!-- Dropdown Menu -->
	<link rel="stylesheet" href="css/superfish.css">
	<!-- Owl Slider -->
	<!-- <link rel="stylesheet" href="css/owl.carousel.css"> -->
	<!-- <link rel="stylesheet" href="css/owl.theme.default.min.css"> -->
	<!-- Date Picker -->
	<link rel="stylesheet" href="css/bootstrap-datepicker.min.css">
	<!-- CS Select -->
	<link rel="stylesheet" href="css/cs-select.css">
	<link rel="stylesheet" href="css/cs-skin-border.css">

	<!-- Themify Icons -->
	<link rel="stylesheet" href="css/themify-icons.css">
	<!-- Flat Icon -->
	<link rel="stylesheet" href="css/flaticon.css">
	<!-- Icomoon -->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">
	
	<!-- Style -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
    
    
    <!--Required libraries-->
    <script src="js/min/jquery-v1.10.2.min.js" type="text/javascript"></script>
    <script src="js/min/jquery-finger-v0.1.0.min.js" type="text/javascript"></script>

    <!--Include flickerplate-->
	
	
    
        
	<!--Execute flickerplate-->
	
    
    <link rel="stylesheet" href="css/dsr.css">
   <style>
    .k-item{
     color:#6e3792;
}    
       .form {
           position: relative;
               margin: 0 auto 100px;
    padding: 45px;
    text-align: center;
    box-shadow: 0 0 1px 0 rgba(0, 0, 0, 0.2), 0 1px 1px 0 rgba(0, 0, 0, 0.24);
    margin-top: 20px;
          
       }

       
    
    </style>
<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
        
           
        
        <link rel="stylesheet" href="css/dsr.css">
        
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>
<body>
	<div id="fh5co-wrapper">
	<div id="fh5co-page">
	<div id="fh5co-header" >
		<header id="fh5co-header-section">
			<div class="container">
				<div class="nav-header">
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
					<h1 id="fh5co-logo">
                        <div class="logo"><a href="index.php"><img src="images/logo3.png" width="100%" height="auto"></a> </div>
                    </h1>
                    
                    
					
				</div>
			</div>
		</header>
        <div class="buscador">
        <div class="buscar-texto">
        <form method="get" id="busquedaf" action="busqueda.php">
        <input name="buscartext" value="<?php echo $_GET["buscartext"] ?>" id="buscartext" type="text" placeholder="BUSCAR PAQUETES" class="buscar">
        </form>
        </div>
        <div class="lupaa" onclick="buscarp()" style="cursor:pointer"><img src="images/lupa2.png" width="100%" height="auto"></div>
        </div>
        <?php if (isset($_SESSION["usuariop"]) && $_SESSION["usuariop"]!='') { ?>
         <div class="nom"><?php echo $_SESSION["usuariop-name"] ?></div>
         <a href="php/log-out.php"><div class="inicia">CERRAR SESION</div></a>
        <?php } else { ?>        
		<a href="login.php"><div class="inicia">INICIAR SESION</div></a>
        <?php } ?>
        <div class="user">
        	<img src="images/user.png" width="43" height="auto">
        </div>
	</div>
    
    <div class="parallax">
      <?php
            $queryhead="select imagen_header from (select * from paquetes_menu where imagen_header!='' and categoria='Menu') headertab order by RAND() limit 1 ";
            $reshead=mysql_query($queryhead);
            $rowhead=mysql_fetch_array($reshead);
        ?>
    <img src="admin/images/<?php echo $rowhead["imagen_header"] ?>" width="100%" height="auto">
        
    </div>
    
	
	<!-- end:fh5co-header -->
	
	
        <script src="js/dsr.js"></script>
    
    
    
	
    
      <div class="espacio">
		

	<div id="fh5co-hotel-section">
		
        
        
        
        
         <div class="espacio">
    
  
			
					<div class="section-title text-center" style="float:initial;margin-bottom:0px">
						<div class="espacio-titulo"><i class="fa fa-plane fa-4x" style="    color: #6e3792;"></i><h2>COTIZACIONES</h2></div>
						
					</div>
				
			
    
    
		<div class="form">
            
    
            
            
   <form class="login-form" action="php/cotizacionesg.php" method="post">
      <input type="text" name="origen" class="question" id="origen" required/>
  <label for="origen"><span>Lugar de Origen</span></label>
       <input type="text" name="destino" class="question" id="destino" required/>
  <label for="destino"><span>Lugar de Destino</span></label>
      
       
  <div id="basicExample">
       <input type="text" name="fida" class="question date start" id="fida" required/>
  <label for="fida"><span>Fecha de Ida (yyyy-mm-dd)</span></label>
       
       <input type="text" name="fvuelta" class="question date end" id="fvuelta" required/>
  <label for="fvuelta"><span>Fecha de Regreso (yyyy-mm-dd)</span></label>

      
      </div>       
       
       <select name="tipo">
           <option>Vuelo</option>
           <option>Hospedaje</option>
           <option>Vuelo + Hospedaje</option>
       </select>
       <input type="text" name="adul" class="question" id="adul" required/>
  <label for="adul"><span>Adultos</span></label>
       <input type="text" name="ninos" class="question" id="ninos" required/>
  <label for="ninos"><span>Niños</span></label>
       <input type="text" name="infa" class="question" id="infa" required/>
  <label for="infa"><span>Infantes</span></label>
       
       <br>
       <input type="submit" value="Enviar" class="form-bot" style="border:block" />
       
      
    </form>
                
      </div>          
                
                
	
    </div>

	

	<footer id="footer" class="fh5co-bg-color">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<div class="copyright">
						<p><small>&copy; 2017 Explore Unique. <br> 
                        
                        </small></p>
					</div>
				</div>
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-3">
							<h3>Menú</h3>
							<ul class="link">
								<li><a href="index.php">Inicio</a></li>
								
								<li><a href="nosotros.php">Nosotros</a></li>
								<li><a href="contacto.php">Contáctanos</a></li>
							</ul>
						</div>
						<div class="col-md-3">
							<h3>Paquetes</h3>
							<ul class="link">
                                <?php
                                $querymenu="SELECT * FROM paquetes_menu where jerarquia='' order by `index`";
                                $resmenu=mysql_query($querymenu) or die ("error".mysql_error());
                                while ($rowmenu=mysql_fetch_array($resmenu)){
                                ?>
								<li><a href="destinos.php?id=<?php echo $rowmenu["idpaquetes_menu"] ?>"><?php echo ucwords(strtolower($rowmenu["descripcion"])) ?></a></li>
								
                                <?php } ?>
							</ul>
						</div>
						<div class="col-md-6">
							<h3>Contáctanos</h3>
							<?php  require_once('php/datosContacto.php');
							echo "Email:$correo <br>";
                        	echo "Teléfono: $telefono<br>";
							?>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<ul class="social-icons">
						<li>
						<?php require_once('php/datosContacto.php');?>
							<a href="<?php echo $facebook ?>" target="_blank"><i class="icon-facebook-with-circle"></i></a>
							<a href="<?php echo $instagram ?>" target="_blank"><i class="icon-instagram-with-circle"></i></a>
							<a href="<?php echo $twitter ?>" target="_blank"><i class="icon-twitter-with-circle"></i></a>
							<a href="<?php echo $whatsapp ?>" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" height="1.1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#c0c0c0}</style><path d="M224 122.8c-72.7 0-131.8 59.1-131.9 131.8 0 24.9 7 49.2 20.2 70.1l3.1 5-13.3 48.6 49.9-13.1 4.8 2.9c20.2 12 43.4 18.4 67.1 18.4h.1c72.6 0 133.3-59.1 133.3-131.8 0-35.2-15.2-68.3-40.1-93.2-25-25-58-38.7-93.2-38.7zm77.5 188.4c-3.3 9.3-19.1 17.7-26.7 18.8-12.6 1.9-22.4.9-47.5-9.9-39.7-17.2-65.7-57.2-67.7-59.8-2-2.6-16.2-21.5-16.2-41s10.2-29.1 13.9-33.1c3.6-4 7.9-5 10.6-5 2.6 0 5.3 0 7.6.1 2.4.1 5.7-.9 8.9 6.8 3.3 7.9 11.2 27.4 12.2 29.4s1.7 4.3.3 6.9c-7.6 15.2-15.7 14.6-11.6 21.6 15.3 26.3 30.6 35.4 53.9 47.1 4 2 6.3 1.7 8.6-1 2.3-2.6 9.9-11.6 12.5-15.5 2.6-4 5.3-3.3 8.9-2 3.6 1.3 23.1 10.9 27.1 12.9s6.6 3 7.6 4.6c.9 1.9.9 9.9-2.4 19.1zM400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zM223.9 413.2c-26.6 0-52.7-6.7-75.8-19.3L64 416l22.5-82.2c-13.9-24-21.2-51.3-21.2-79.3C65.4 167.1 136.5 96 223.9 96c42.4 0 82.2 16.5 112.2 46.5 29.9 30 47.9 69.8 47.9 112.2 0 87.4-72.7 158.5-160.1 158.5z"/></svg></a>

						</li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
</div>
	</div>
    </div>
	<!-- END fh5co-page -->

	</div>
	<!-- END fh5co-wrapper -->
	<section>
				
				<p><button id="trigger-overlay" type="button">-<br>-<br>-</button></p>
			</section>
            
	<!-- END fh5co-wrapper -->
    <div class="overlay overlay-contentpush">
			<button type="button" class="overlay-close">Close</button>
			<nav>
				<ul>
					<li></i><a href="index.php"><i class="fa fa-home fa-2x"></i>&nbsp;INICIO</a></li>
					<li><a href="nosotros.php"><i class="fa fa-users fa-2x"></i>&nbsp;NOSOTROS</a></li>
					<?php
                    $querymenu="SELECT * FROM paquetes_menu where jerarquia='' order by `index`";
                    $resmenu=mysql_query($querymenu) or die ("error".mysql_error());
                    while ($rowmenu=mysql_fetch_array($resmenu)){
                    ?>
					<li style="text-transform:uppercase"><a href="destinos.php?id=<?php echo $rowmenu["idpaquetes_menu"] ?>"><i class="fa fa-map fa-2x"></i>&nbsp;<?php echo $rowmenu["descripcion"] ?></a></li>
					<?php } ?>
                    <li></i><a href="cotizaciones.php"><i class="fa fa-credit-card-alt fa-2x"></i>&nbsp;COTIZAR</a></li>
					
					
					<li><a href="sugerencias.php"><i class="fa fa-telegram fa-2x"></i>&nbsp;SUGERENCIAS</a></li>
				</ul>
			</nav>
		</div>
        
        
	
	<!-- Dropdown Menu -->
	<script src="js/hoverIntent.js"></script>
	<script src="js/superfish.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Counters -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Owl Slider -->
	<!-- // <script src="js/owl.carousel.min.js"></script> -->
	<!-- Date Picker -->
	<script src="js/bootstrap-datepicker.min.js"></script>
	
	<script src="js/selectFx.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>

	<script src="js/custom.js"></script>
    
    
    
    <script>
		$(document).ready(function() {
				/*
				var hoy = new Date();
					var dd = hoy.getDate();
					var mm = hoy.getMonth()+1; //hoy es 0!
					var yyyy = hoy.getFullYear();
					
					if(dd<10) {
						dd='0'+dd
					} 
					
					if(mm<10) {
						mm='0'+mm
					} 
					
					hoy = yyyy+'/'+mm+'/'+dd;
                        
					$("#fida").kendoDatePicker({					   
						format: "yyyy/MM/dd",
						value: hoy,
					});
					$("#fregreso").kendoDatePicker({					   
						format: "yyyy/MM/dd",
						value: hoy,
					});	
					$("#fida").removeClass("k-picker-wrap");
					$("#fregreso").removeClass("k-picker-wrap");
				$("#idavuelta").click(function() {  
					if($("#idavuelta").is(':checked')) {  
						$("#fregreso").data("kendoDatePicker").enable(false);
						$("#fregreso").data("kendoDatePicker").val("00/00/0000");
					}  
				}); 
				$("#ida").click(function() {  
					if($("#ida").is(':checked')) {  
						$("#fregreso").data("kendoDatePicker").enable(true);
					}  
				});  
				$(".k-state-default > .k-select").css("visibility","hidden");
				$(".k-datepicker").bind("click", function() {
						if ($(this).children().children(".nvuelocampomedio").attr("aria-disabled")=="false"){
						$(this).children().children(".nvuelocampomedio").data("kendoDatePicker").open()
						}
					});*/
				
                
                   /* $("#origen").kendoAutoComplete({
                        dataTextField: "Ciudad",

						
                        minLength: 4,
						filtering: function(e) {
						  	var filter = e.filter;
							if (!filter.value) {
								e.preventDefault();
								e.sender.dataSource.data([]);
							  }
						},
                        dataSource: dataSourceac
                    });
					$("#destino").kendoAutoComplete({
                        dataTextField: "Ciudad",
	
                        minLength: 4,
						filtering: function(e) {
						  	var filter = e.filter;
							if (!filter.value) {
								e.preventDefault();
								e.sender.dataSource.data([]);
							  }
						},
                        dataSource: dataSourceac
                    });
					*/
            
            $( "#origen" ).autocomplete({
              source: function( request, response ) {
                $.ajax( {
                  url: "php/read.php",
                  dataType: "json",
                  data:{id:"ciudades2", ciudad: request.term},
                  success: function( data ) {
                    response( data );
                  }
                } );
              },
              minLength: 4,
              select: function( event, ui ) {
                console.log( "Selected: " + ui.item.ciudad + " aka " + ui.item.ciudad );
              }
            } );
            $( "#destino" ).autocomplete({
              source: function( request, response ) {
                $.ajax( {
                  url: "php/read.php",
                  dataType: "json",
                  data:{id:"ciudades2", ciudad: request.term},
                  success: function( data ) {
                    response( data );
                  }
                } );
              },
              minLength: 4,
              select: function( event, ui ) {
                console.log( "Selected: " + ui.item.ciudad + " aka " + ui.item.ciudad );
              }
            } );
					
		})
		</script>

<script>
    

    $('#basicExample .date').datepicker({
        'format': 'yyyy-mm-dd',
        'autoclose': true
    });

    // initialize datepair
    var basicExampleEl = document.getElementById('basicExample');
    var datepair = new Datepair(basicExampleEl);
</script>
      
    <script>
			// For Demo purposes only (show hover effect on mobile devices)
			[].slice.call( document.querySelectorAll('a[href="#"') ).forEach( function(el) {
				el.addEventListener( 'click', function(ev) { ev.preventDefault(); } );
			} );
		</script>
        
        <script src="js/dsr.js"></script>
        <script src="js/classie.js"></script>
		<script src="js/demo7.js"></script>
        
        

</body>
</html>