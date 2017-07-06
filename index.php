<?
$v1 = $_GET['s'];
?>
<html>
<head>
  <title>OVEJA NEGRA</title>
  <!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"> </script>-->
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
  <script src="js/modernizr.custom.js"></script>
  <script src="js/jquery-1.10.2.min.js"></script>
  <script src="js/birdman.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <link href="css/ed-grid.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="css/index.css">
  <script src="js/overHang.js"></script>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <!-- Add fancyBox main JS and CSS files -->
  <script type="text/javascript" src="source/jquery.fancybox.js?v=2.1.5"></script>
  <link rel="stylesheet" type="text/css" href="source/jquery.fancybox.css?v=2.1.5" media="screen" />
  <style type="text/css">
 
    .espace{
      padding: 30px;
    }
    #map{
      width: 90%;
      height: 500px;
      display: block;
      margin: 0 auto;
    }    
  </style>
 
  

  <script type="text/javascript">


    function initMap() {
        var uluru = {lat: 19.438032,lng : -99.154148};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: uluru
        });
  
        var marker = new google.maps.Marker({
          position: uluru,
          map: map,
          title: 'Agencia Oveja Negra'
        });

        $("#infoperson").fadeOut();
      }

    $(document).ready(function() {


      $('body').stellar();
      $( "#clickme" ).click(function() {
        productionDisplay();
      });
      $( "#clickmeUSA" ).click(function() {
        productionDisplay();
      });

      function productionDisplay(){
        $( "#EventosP" ).toggle( "slow", function() {
          $("#FILIJ31").backstretch("images/filij31.jpg");
          $("#FILIJ32").backstretch("images/filij32.jpg");
          $("#FILIJ33").backstretch("images/filij33.jpg");
          $("#FILIJ34").backstretch("images/filij34.jpg");
          $("#mezcal").backstretch("images/cartel.png");
          $("#RECREO").backstretch("images/recreo.jpeg");
          $("#CALACAS").backstretch("images/calacas.jpg");
          $("#ALICIA").backstretch("images/alicia.jpg");
        });

      }

      $( "#closemenu" ).click(function() {
        $( "#EventosP" ).toggle( "slow", function() {        
        });
      });
      $("#closecontacto").click(function(){
        $( "#infoperson" ).toggle( "slow", function() {

        });
      });
      $( "#closemenum" ).click(function() {
        $( "#GruposM" ).toggle( "slow", function() {

        });
      });
      $( "#clickmeb" ).click(function() {
        bookingDisplay();
      });

      $( "#clickmebusa" ).click(function() {
        bookingDisplay();
      });
//IR A LA SECCION DE MENU DE TALENTOS Y SELECCIONAR POR TEMATICA
var $servicio = "<?php echo $v1 ; ?>" ;

if ($servicio.length == 0) {
        //nada
      } else {
        irmenu($servicio);
      }

      function irmenu($servicio) {


        switch ($servicio) {
          case "Booking":
          
          $servicio ="booking";
          mostrar($servicio);
          break;
          case "booking":
          $servicio ="booking";
          mostrar($servicio);
          break;
          case "BOOKING":
          $servicio ="booking";
          mostrar($servicio);
          break;
          case "PRODUCTION":
          $servicio ="production";
          mostrar($servicio);
          break;
          case "Production":
          $servicio ="production";
          mostrar($servicio);
          break;
          case "production":
          $servicio ="production";
          mostrar($servicio);
          break;
          default:
          console.log("Sorry, we are out of " + expr + ".");
        }
      }

      function mostrar($seccion){
        if ($seccion == "booking") {
          bookingDisplay();
          $('html,body').animate({
            scrollTop: $("#GruposB").offset().top
          }, 2000);


        }
        else{
          productionDisplay();
          $('html,body').animate({scrollTop: $("#EventosP").offset().top}, 2000);
        }
      } 

      function bookingDisplay(){
        $("#GruposB").toggle( "slow", function() {
          $("#sargento").backstretch("images/sargento/portadab.png");
          $("#juana").backstretch("images/juana.jpg");
          $("#seeed").backstretch("images/seeed.jpeg");
          $("#Sidestepper").backstretch("images/sidestepperportada.jpg");
          $("#losaguas").backstretch("images/aguas/1.jpg");
          $("#estramboticos").backstretch("images/estramboticos.jpg");
          $("#losaguasUSA").backstretch("images/aguasUSA.jpg");
          $("#estramboticosUSA").backstretch("images/estramboticos/estramboUSA.jpg");
          $("#panteon").backstretch("images/panteonrococo.jpg");
          $("#sekta").backstretch("images/sekta/sekta.png");
          $("#resorte").backstretch("images/resorte/Portada.jpg");
          $("#haragan").backstretch("images/haragan.jpg");
          $("#enjambre").backstretch("images/enjambreportada.jpg");
          $("#porter").backstretch("images/porter/PORTADA.jpg");
          $("#tech").backstretch("images/technicolor/technicolor_fabrics PORTADA.jpg");
          $("#chesudaka").backstretch("images/chesudaka/chesudaka.jpeg");
          $("#sidd").backstretch("images/sidd/Sidd-Metropolitan.jpg");
          $("#abandofbitch").backstretch("images/abandofbitches/bandofbitches.jpg");
          $("#gusana").backstretch("images/gusana/gusana.jpg");
          $("#nanapancha").backstretch("images/nanapancha/nanapancha.jpg");
          $("#rastrillos").backstretch("images/rastrillos/rastrillos.jpg");
          $("#skip").backstretch("images/skip/skip.jpg");
        });

      }

      $( "#closemenub" ).click(function() {
        $( "#GruposB" ).toggle( "slow", function() {

        });
      });
      $( "#acercade" ).click(function() {
        $( "#infoperson" ).toggle( "slow", function() {
          $("#mapamobile").backstretch("img/mapamobile.png");
          $('#production').css('background-position', 'left top');
          $("#bodyContent").width("200px");
        });
      });     

      $("#fancybox-manual-b").click(function() {
        $.fancybox.open({
          href : 'iframe.html',
          type : 'iframe',
          padding : 5
        });
      });

      $("#fancybox-manual-a").click(function() {
        $.fancybox.open({
          href : 'iframe.html',
          type : 'iframe',
          padding : 5
        });
      });

      $("#fancybox-manual-c").click(function() {
        $.fancybox.open({
          href : 'iframe.html',
          type : 'iframe',
          padding : 5
        });
      });
      $("#fancybox-manual-d").click(function() {
        $.fancybox.open({
          href : 'iframe.html',
          type : 'iframe',
          padding : 5
        });
      });
      $("#fancybox-manual-e").click(function() {
        $.fancybox.open({
          href : 'iframe.html',
          type : 'iframe',
          padding : 5
        });
      });
      $("#fancybox-manual-f").click(function() {
        $.fancybox.open({
          href : 'iframe.html',
          type : 'iframe',
          padding : 5
        });
      });
    });
  </script>
</head>
<body class="">
  <?php //include_once("analyticstracking.php") ?>
  <div id="fotohome">
    <img id="logoove" src="img/logooveja.png" width="140">		
    <div id="titulosportada" class=" ">  
      <h2 class="birdman" >OVEJA</h2>
      <h1 class="birdman">NEGRA</h1>
      <h3 class="birdman">"Booking, Management & Production"</h3>
    </div>
  </div>
  <script src="js/jquery.backstretch.js"></script>
  <div id="datosove" class="caja total   abajo40" >
    <div class="grupo">
      <div id="titulosegunda" class="caja total " >
        <div  class="caja movil-100 arriba">
          <p class="ti">Acerca de Nosotros</p> <br> <br>
           
          <p id="somos"  class="parra  txtjustify">  Oveja Negra es un grupo de mentes y personajes únicos que tienen una característica en común: La pasión por la producción de espectáculos, tours y carreras artísticas, a través de la disciplina creativa y trabajo dedicado.
          </p><br><br>
        </div>
        <div id="bton" class="caja movil-100  pad-30 ">
          <a id="acercade" class="bt ">MÁS ACERCA DE NOSOTROS</a>
           
        </div>
      </div>	
    </div>
  </div>
  <div id="infoperson" class="caja total  ">
    <div  class="grupo">
      <div class="caja movil-100 tache"><a id="closecontacto" class="rotate">  <img src="img/closen.png" width="80" height="80"/></a></div>
      <div class="caja movil-100 tablet-50 web-50">
        <p class="ti quien  altoti">Booking &#38;  Management</p>
        <p class="parra quienes ">
          Othón Zapata <br>
          <a class="parra quienes" href="mailto:othon@agenciaovejanegra.com?subject=Contrataciones de servicios de producción y/o booking en México o USA&body=Estoy interesado en contratar (servicios de producción o talento) para mi venue, evento especial y/o Festival en USA (o México), y escribo para… Saludos?subject=Contrataciones de servicios de producción y/o booking en México o USA" >othon@agenciaovejanegra.com </a>
        </p>
      </div>
      <div class="caja movil-100 tablet-50 web-50">
        <p class="ti quien  altoti">Project Manager</p>
        <p class="parra quienes ">
          Salvador Lisjuan Ramirez <br>
          <a class="parra quienes" href="mailto:othon@agenciaovejanegra.com?subject=Contrataciones de servicios de producción y/o booking en México o USA&body=Estoy interesado en contratar (servicios de producción o talento) para mi venue, evento especial y/o Festival en USA (o México), y escribo para… Saludos?subject=Contrataciones de servicios de producción y/o booking en México o USA" >jomba@agenciaovejanegra.com </a><br>

        </p>
      </div>
      <div class="caja movil-100 tablet-50 web-100  txtcenter padbot40">
        <p class="ti quien  altoti txtcenter">Diseño y Comunicación</p>
        <p class="parra quienes txtcenter">
          Daniel Torres<br>
          <a class="parra quienes txtcenter" href="mailto:daniel@agenciaovejanegra.com?subject=Contrataciones de servicios de producción y/o booking en México o USA&body=Estoy interesado en contratar (servicios de producción o talento) para mi venue, evento especial y/o Festival en USA (o México), y escribo para… Saludos?subject=Contrataciones de servicios de producción y/o booking en México o USA" >daniel@agenciaovejanegra.com</a> <br>
                 
     
        </p>
      </div>
    </div>
    
    <div class="grupo">
      <div id="mapaweb" class="caja total alto abajo  ">
        <div class="caja total">
          <p class="ti  quien arriba abajo">UBICACIÓN</p>
          <div id="map"></div> 
        </div>
      </div>
      <p id="ubimobile" class="ti  quien arriba abajo">UBICACIÓN</p>
      <a href="https://www.google.com.mx/maps/place/Oveja+Negra:+Booking,+Management+%26+Production/@19.4380695,-99.1553656,17z/data=!4m7!1m4!3m3!1s0x85d1f8d22b46a2dd:0xfbc9634d57745897!2sIgnacio+Mariscal+120,+Tabacalera,+06030+Ciudad+de+M%C3%A9xico,+D.F.!3b1!3m1!1s0x85d1f8dac4b680ed:0xb60f6be1c0871c8a" target="_blank">
        <div id="mapamobile" class="caja movil-100 " style="position: relative; z-index: 0; background-image: none; background-position: initial initial; background-repeat: initial initial;">

        <div class="backstretch" style="left: 0px; top: 0px; overflow: hidden; margin: 0px; padding: 0px; height: 400px; width: 360px; z-index: -999998; position: absolute;"><img src="img/mapamobile.png" style="position: absolute; margin: 0px; padding: 0px; border: none; width: 846.7043314500941px; height: 400px; max-height: none; max-width: none; z-index: -999999; left: -243.35216572504703px; top: 0px;"></div></div>

      </a>

    

    </div>
  </div>
  <div id="booking" class="caja total pad-80">
    <div class="grupo ">
      <div class="caja movil-100 tablet-100 web-50">
        <p class="ti blanco arriba">BOOKING</p>
        <p id="nadamos"  class="parra blanco bnegro60 borde blanco">
          Nos encargamos de venta y promoción de talentos Internacionales en México y U.S., comprometiéndonos con la calidad artística y operativa para hacer del TOUR una experiencia única para cada persona envuelta en un show, desde el promotor hasta el espectador.
        </p>
        <div id="sabermas" class="caja movil-100 tablet-100 web-100 ">
          <a id="clickmeb"  class=" chico">Saber Más</a>
        </div>
      </div>
      <div class="caja movil-100 tablet-50 web-50 ">
      </div>
    </div>
  </div>
  <div id="bookingmobil" class="caja total display" >
    <div class="grupo ">
      <div class="caja movil-100 tablet-100 web-50">
        <p class="ti blanco arriba">BOOKING</p>
        <p id="nadamos"  class="parra blanco bnegro60 borde blanco">
          Nos encargamos de venta y promoción de talentos Internacionales en México y U.S., comprometiéndonos con la calidad artística y operativa para hacer del TOUR una experiencia única para cada persona envuelta en un show, desde el promotor hasta el espectador.
        </p>
        <div id="sabermas" class="caja movil-100 tablet-100 web-100 ">
          <a id="clickmebusa"  class=" chico">Saber Más</a>            
        </div>
      </div>        
    </div>
  </div> 

  <div id="GruposB" class="caja total display">

    <div id="promenu" class="grupo">

      <div class="caja movil-100 tablet-100 web-100" style="padding-top:120px !important;">
        <div class="cerrar tache"><a id="closemenub" class="rotate">  <img src="img/closen.png" width="80" height="80"/></a></div>
      </div>

      <div id="" class="caja movil-100 tablet-50 web-50  alto">
        <a href="aguas.php"><div id="losaguas" class="caja total "></div> </a>
        <div class="caja total">
          <p class="ti quien altoti">Los Aguas Aguas</p>
        </div> 

      </div>
      
      <div id="" class="caja movil-100 tablet-50 web-50  alto">
        <a href="losestrambos.php"><div id="estramboticos" class="caja total "></div> </a>
        <div class="caja total">
          <p class="ti quien altoti">Los Estrambóticos</p>
        </div>  
      </div>


      <div id="" class="caja movil-100 tablet-50 web-50  alto">
        <a href="sargento.php"><div id="sargento" class="caja total "></div> </a>
        <div class="caja total">
          <p class="ti quien altoti">Sergent Garcia</p>
        </div>  
      </div>

      <div id="" class="caja movil-100 tablet-50 web-50  alto">
        <a href="juana.php"><div id="juana" class="caja total "></div> </a>
        <div class="caja total">
          <p class="ti quien altoti">Juana la Rodillona</p>
        </div>  
      </div>



      <div id="" class="caja movil-100 tablet-50 web-50  alto ">
        <a href="seeed.php"><div id="seeed" class="caja total "></div> </a>
        <div class="caja total">
          <p class="ti quien altoti">Seeed</p>
        </div>  
      </div>
      <div id="" class="caja movil-100 tablet-50 web-50  alto">
        <a href="sidestepper.php"><div id="Sidestepper" class="caja total "></div> </a>
        <div class="caja total">
          <p class="ti quien altoti">Sidestepper</p>
        </div>  
      </div>
      <div id="" class="caja movil-100 tablet-50 web-50  alto ">
        <a href="haragan.php"><div id="haragan" class="caja total "></div> </a>
        <div class="caja total">
          <p class="ti quien altoti">El Haragán y Cia</p>
        </div>  
      </div>
      <div id="" class="caja movil-100 tablet-50  alto ">
        <a href="panteon.php"><div id="panteon" class="caja total "></div> </a>
        <div class="caja total">
          <p class="ti quien altoti">Panteón Rococó</p>
        </div>  
      </div>
      <div id="" class="caja movil-100 tablet-50  alto ">
        <a href="sekta.php"><div id="sekta" class="caja total "></div> </a>
        <div class="caja total">
          <p class="ti quien altoti">Sekta Core</p>
        </div>  
      </div>
      <div id="" class="caja movil-100 tablet-50  alto ">
        <a href="resorte.php"><div id="resorte" class="caja total "></div> </a>
        <div class="caja total">
          <p class="ti quien altoti">Resorte</p>
        </div>  
      </div>
      <div id="" class="caja movil-100 tablet-50 web-50  alto">
        <a href="enjambre.php"><div id="enjambre" class="caja total "></div> </a>
        <div class="caja total">
          <p class="ti quien altoti">Enjambre</p>
        </div>  
      </div>
      <div id="" class="caja movil-100 tablet-50 web-50  alto">
        <a href="porter.php"><div id="porter" class="caja total "></div> </a>
        <div class="caja total">
          <p class="ti quien altoti">Porter</p>
        </div>  
      </div>
      <div id="" class="caja movil-100 tablet-50 web-50  alto">
        <a href="aguas.php"><div id="losaguasUSA" class="caja total "></div> </a>
        <div class="caja total">
          <p class="ti quien altoti">Los Aguas Aguas</p>
        </div>  
      </div>
        <div id="" class="caja movil-100 tablet-50 web-50  alto">
          <a href="siddhartha.php"><div id="sidd" class="caja total "></div> </a>
          <div class="caja total">
            <p class="ti quien altoti">Siddhartha</p>
          </div>  
        </div>
        <div id="" class="caja movil-100 tablet-50 web-50  alto">
          <a href="abandofbitches.php"><div id="abandofbitch" class="caja total artista"></div> </a>
          <div class="caja total">
            <p class="ti quien altoti">A Band of Bitches</p>
          </div>  
        </div>
        <div id="" class="caja movil-100 tablet-50 web-50  alto">
          <a href="gusana.php"><div id="gusana" class="caja total artista"></div> </a>
          <div class="caja total">
            <p class="ti quien altoti">La Gusana Ciega</p>
          </div>  
        </div>
        <div id="" class="caja movil-100 tablet-50 web-50  alto">
          <a href="nanapancha.php"><div id="nanapancha" class="caja total artista"></div> </a>
          <div class="caja total">
            <p class="ti quien altoti">Nana Pancha</p>
          </div>  
        </div>
        <div id="" class="caja movil-100 tablet-50 web-50  alto">
          <a href="rastrillos.php"><div id="rastrillos" class="caja total artista"></div> </a>
          <div class="caja total">
            <p class="ti quien altoti">Rastrillos</p>
          </div>  
        </div>
        <div id="" class="caja movil-100 tablet-50 web-50  alto">
          <a href="skip.php"><div id="skip" class="caja total artista"></div> </a>
          <div class="caja total">
            <p class="ti quien altoti">Skip & Die</p>
          </div>  
        </div>
      </div> 
    </div>
    <div id="management" class="caja total">
      <div class="grupo">
      <div id="" class="caja movil-100 tablet-50 web-50">
      <p class="ti arriba blanco">MANAGEMENT</p>
      <p id="nadamos"  class="parra blanco bnegro60 borde blanco">
            Asesoramos, con un perfil directivo, preventivo y de mercado probado. <br><br>Sabemos aprovechar y concretar las oportunidades, pero sobre todo, buscarlas.
      </p>
      </div>
      </div>
    </div>
      <div id="GruposM" class="caja total display">
        <div class="grupo">

          <div class="caja total">
            <a id="closemenum" class="rotate">  <img src="img/closen.png" width="80" />
            </div>

            <div id="titM" class="caja total corta bgris ">
              <p class="ti arriba">Los Aguas Aguas</p>
            </div>

            <div id="sec1" class="caja movil-100 tablet-50 web-50 ">
              <div id="fotoma"class="caja total larga "></div>
              <div id="texto" class="caja total corta bgris">
                <p   class="parra pad-30">
                  Organizamos la venta y promoción de talentos extranjeros en México y talentos mexicanos en Estados Unidos, todo de forma cooperativa.
                </p>
              </div>
            </div>
            <div id="sec2" class="caja movil-100 tablet-50 web-50 ">
              <div id="text2" class="caja total corta bgris ">
                <p class="ti arriba">Los Aguas Aguas</p>
              </div>
              <div id="fotomana" class="caja total larga "></div>
            </div>
          </div>

        </div>
        <div id="production" class="caja total pad-80 " >
          <div class="grupo ">
            <div class="caja movil-100 tablet-100 web-50 ">
              <p class="ti arriba blanco  ">PRODUCTION</p>
              <p id="nadamos"  class="parra blanco bnegro60 borde blanco">
                La producción de eventos y espectáculos, la definimos como la posibilidad de conjuntar todos los elementos técnicos y humanos armónicamente en un momento específico y sincrónico, mediante disciplina operativa y control presupuestal, siendo la rentabilidad del proyecto el resultado.
              </p>

              <div id="sabermas" class="caja movil-100 tablet-100 web-100 ">

                <a id="clickme"  class="bt chico">Saber Más</a>

              </div>
            </div>
            <div class="caja movil-100 tablet-100 web-50 ">
            </div>    
          </div>
        </div>



        <div id="productionmobil" class="caja total display" >
          <div class="grupo ">
            <div class="caja movil-100 tablet-100 web-50 ">
              <p class="ti arriba blanco  ">PRODUCTION</p>
              <p id="nadamos"  class="parra blanco bnegro60 borde blanco">
                La producción de eventos y espectáculos, la definimos como la posibilidad de conjuntar todos los elementos técnicos y humanos armónicamente en un momento específico y sincrónico, mediante disciplina operativa y control presupuestal, siendo la rentabilidad del proyecto el resultado.
              </p>

              <div id="sabermas" class="caja movil-100 tablet-100 web-100 ">

                <a id="clickmeUSA"  class="bt chico">Saber Más</a>

              </div>
            </div>




          </div>
        </div> 

   

        <div id="EventosP" class="caja total display">
          <div class="caja total ">
            <div class="caja movil-100 tablet-50 web-50 tache">

              <a id="closemenu" class="rotate">  <img src="img/closen.png" width="80" height="80"> </a>

            </div>
            <div id="promenu" class="grupo ">
              <br><br>

              <div id="" class="caja movil-50  tablet-1-3 alto">
                <a href="filij31.php"><div id="FILIJ31" class="caja total "></div> </a>
                <div class="caja total">
                  <p class="ti quien altoti">FILIJ 31</p>
                </div>  
              </div>

              <div id="" class="caja movil-50  tablet-1-3 alto">
                <a href="filij32.php"><div id="FILIJ32" class="caja total "></div> </a>
                <div class="caja total">
                  <p class="ti quien altoti">FILIJ 32</p>
                </div>  
              </div>



              <div id="" class="caja movil-100  tablet-1-3 alto">
                <a href="filij33.php"><div id="FILIJ33" class="caja total "></div> </a>
                <div class="caja total">
                  <p class="ti quien altoti">FILIJ 33</p>
                </div>  
              </div>

              <div id="" class="caja movil-100   alto">
                <a href="filij34.php"><div id="FILIJ34" class="caja total "></div> </a>
                <div class="caja total">
                  <p class="ti quien altoti">FILIJ 34</p>
                </div>  
              </div>



              <div class="caja movil-100 tablet-100 web-50 ">
                <div id="" class="caja movil-50 alto ">
                  <a href="mezcal.php"><div id="mezcal" class="caja total "></div> </a>
                  <div class="caja total">
                    <p class="ti quien altoti">Feria del Mezcal</p>
                  </div>  
                </div>

                <div id="" class="caja movil-50 alto ">
                  <a href="recreo.php"><div id="RECREO" class="caja total "></div> </a>
                  <div class="caja total">
                    <p class="ti quien altoti">Recreo de Verano</p>
                  </div>  
                </div>
              </div>




              <div class="caja movil-100  tablet-100 web-50">
                <div id=""  class="caja movil-50  alto">
                  <a href="calacas.php"><div id="CALACAS" class="caja total "></div> </a>
                  <div class="caja total">
                    <p class="ti quien altoti">Calacas</p>
                  </div>  
                </div>


                <div id=""  class="caja movil-50  alto">
                  <a href="alicias.php"><div id="ALICIA" class="caja total "></div> </a>
                  <div class="caja total">
                    <p class="ti quien altoti">¡Todos a jugar con Alicia!</p>
                  </div>  
                </div>
              </div>
            </div>  
          </div> 
        </div>



        <div id="Formulario" class="grupo ">

<div class="caja movil-100 tablet-100 web-50 centrar-contenido pad-30">
 <div class="caja total">
  <p class="ti quien altoti">Social Network</p>
</div>
<a class="twitter-timeline" href="https://twitter.com/OvejaNegraTuit" data-widget-id="625903403974070272">Tweets por el @OvejaNegraTuit.</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
</div>





<div class="caja movil-100 tablet-100 web-50 pad-30">
  <div class="grupo  centrar-contenido ">
    <div class="caja movil-100">
      <p class="ti quien altoti">Contacto</p>
    </div>
    <div class="caja mextra3 movil-50 tablet-1-3 altototal2 ">
      <a id="" href="https://www.facebook.com/OvejaNegraProductions" target="_blank" class="rotate">  <img src="images/facebook.png" width="100"/></a>
    </div>
    <div class="caja mextra3 movil-50 tablet-1-3  altototal2">
      <a id="" href="https://www.instagram.com/ovejanegraproductions/"  target="_blank" class="rotate">  <img src="images/instagram.png" width="100"/></a>
    </div>
    <div class="caja mextra3 movil-50 tablet-1-3 altototal2">
      <a id="" href="https://www.google.com.mx/maps/place/Ignacio+Mariscal+120,+Tabacalera,+06030+Ciudad+de+M%C3%A9xico,+D.F./@19.4379688,-99.1539778,17z/data=!3m1!4b1!4m2!3m1!1s0x85d1f8d22b46a2dd:0xfbc9634d57745897?hl=en" target="_blank" class="rotate ">  <img src="images/maps.png" width="100" /> </a>
    </div>

    <div class="caja mextra3 movil-50 tablet-50 altototal2">
      <a id="" href="tel:70335699" class="rotate ">  <img src="images/tel.png" width="100"/></a>
    </div>
    <div class="caja mextra3 movil-100 tablet-50 altototal2">
      <a  href ="http://www.bands4brands.org/" class="rotate">  <img src="images/b4b.png" width="100"/></a>
    </div>
    <div class="caja movil-100 altototal2">
      <p class="parra quienes">
        Ignacio Mariscal #120. <br>
        Col.Tabacalera C.P. 06030<br>Ciudad de México, México.
        <br><br><br>
        Tel.- 55 7033 5699<br>
        Othón Zapata J.- 55 2735 7212<br>
      </p>
    </div>
  </div>
</div>
<div id="reservado" class="caja total pad-30">
  <div class="grupo">
    <div class="caja movil-100 pad-30 centrar-contenido">
      <p class=" parra quienes">
        Partners:
      </p>

    </div>
    <div class="caja caja mextra3  movil-50  centrar-contenido ">
     <a href="https://www.facebook.com/ManagersAnonimos"  target="_blank"><img src="images/manonimos.jpg" width="120"></a>
   </div>
  <div class="caja caja mextra3 movil-50  centrar-contenido ">
    <a href="http://themusicjointgroup.com/"><img src="images/TheMusicJoint1.png" width="190" ></a> 
  </div>

  <div class="caja  total pad-30">
    <p class="negro parra copy">Oveja Negra: Booking, Management and Production 
      <img src="images/mr.png" width="15">. <br><br>Esta página es propiedad intelectual, de Oveja Negra: Booking, Management and Production <img src="images/mr.png" width="15">. Puede ser utilizada sin fines de lucro y la fuente y la dirección web deden ser citadas. En caso de requerir otro uso, puede contactarse con la empresa para solicitar información especifíca</p>
    </div>
  </div>

</div>
</div>

<script type="text/javascript">
  $(document).ready(function(){
     $("#productionmobil").backstretch("images/Portada-Produccion.jpg");
    $("#bookingmobil").backstretch("images/Portada_Management.jpg");
    $("#booking").backstretch("images/porter/4.jpg");
    $('.birdman').birdman({speedUp:false});
    $("#fotohome").backstretch([
      "img/portada1.jpg",
      "img/portada2.jpg",
      "img/portada4.jpg",
      "img/portada6.jpg",
      "img/portada5.jpg"
      ], {
        fade: 950,
        duration: 1900
      });
    $("#bookingmobil").backstretch("images/sidestepperportada.jpg");
    $("#production").backstretch([
          "images/Portada-Produccion.jpg",
          "images/filij31/2.jpg"
          ], {
            fade: 950,
            duration: 1900
          });
  });
</script>
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTwREFa8QLJg30X1YY3b0EZCQ6iQo1rgY&callback=initMap">
    </script>
</body>
</html>