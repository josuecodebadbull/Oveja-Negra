<html>
<head>
  <title>OVEJA NEGRA</title>
  <!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"> </script>-->
  <script src="js/modernizr.custom.js"></script>
  <script src="js/jquery-1.10.2.min.js"></script>
  <script src="js/birdman.js"></script>
  <script src="js/efectos.js"></script>
  <script src="js/hamburgler.js"> </script> 
  <link rel="stylesheet" href="css/hamburgler.css">
  <script src="js/jquery.stellar.min.js"></script>
  <link href="css/ed-grid.css" rel="stylesheet" type="text/css" />
   <link rel="stylesheet" href="css/index.css">
<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />


<!-- Add fancyBox main JS and CSS files -->
  <script type="text/javascript" src="source/jquery.fancybox.js?v=2.1.5"></script>
  <link rel="stylesheet" type="text/css" href="source/jquery.fancybox.css?v=2.1.5" media="screen" />





  <script type="text/javascript">
    $(document).ready(function() {
      $('body').stellar();


         $('#titulo').click(function(e) {  
          $.fancybox.open([
          {
            href : 'images/juana/1.jpg',
            title : 'JUANA LA RODILLONA'
          }, {
            href : 'images/juana/2.jpg'
          }, {
            href : 'images/juana/3.jpg'
          }
        ], {
          helpers : {
            thumbs : {
              width: 75,
              height: 50
            }
          }
        });
        });


    });
    </script>

   
       






</head>
<body style="background-color: black">
  <?php include_once("analyticstracking.php") ?>
   <div  class="caja total bnegro" >    
    <div id="" class="grupo">  
      <div id="pics" class="caja movil-100  altototal2 txtcenter">

        <?php 
        include "menu.php";
         ?>

       
  
      <div id="contenedor_menu">
        <div id="icono">
            <a href="javascript:void(0)" class="icon"> 
                <div class="hamburger"> 
                    <div class="menui top-menu"></div> 
                    <div class="menui mid-menu"></div> 
                    <div class="menui bottom-menu"></div> 
                </div> 
            </a>     
        </div>
      </div>

      <div id="titulo" class="caja total borde blanco ">
        <p  class="ti birdman blanco  txtcenter">JUANA LA RODILLONA</p> <br>
        <div class="caja total txtleft">
          <a id="titulo"  class="rotate"><img src="img/gallery.png" width="40" height="40"/></a>
        </div>
            

      </div>
     
        
    </div> 


       
            
             <script src="js/jquery.backstretch.js"></script>
                  <script>
                      $("#pics").backstretch([
                       
                         "images/juana/2portada.jpg"
                        
                         
                  
                      ], {
                          fade: 750,
                          duration: 4000
                      });
                </script>

         


          <div class="caja movil-100 tablet-100 web-100  pad-30 ">
            <div id="video" class="caja-total txtcenter ">
            
               <iframe  width="70%" height="100%"  src="https://www.youtube.com/embed/L8M1z7-JHys"   frameborder="0" allowfullscreen></iframe>
            </div>
          

          </div>





          <div id="logograndeJuana" class="caja movil-100 tablet-100 web-100 pad-30 " data-stellar-background-ratio="0.5">
                  <div class="caja movil-100 centrar-contenido tablet-50 web-50 ">
                                            
                        <p class="parra arriba abajo  blanco pad-30 txtjustify ">
                       “Lo que más pude disfrutar de la Rodillona fue su actitud en el escenario. Los vatos se plantaron con bastante punch, sin miedo a ser agresivos con el público, que les respondió del mismo modo, al más puro estilo del punk de la vieja escuela”.<br><br>
                        </p>
                        <h3>-Luis Alberto Rodriguez,, Noisey Vice, 2014-</h3>
                        <div class="caja total arriba centrar-contenido">
                        <img src="images/juana/logo.jpeg" width="200">
                      </div>  
                        
                  </div>


                  <div id="playlist" class="caja movil-100 tablet-50 web-50 pad-30">
                     <div class="caja total txtcenter">
                      <h4>Tracks</h4> <br> <br>
                    </div>
                    <div class="grupo movil-tabla">
  <div class="caja movil-1-3 txtcenter pad-10"><h3>Tu Nación</h3></div>
  <div class="caja movil-2-3  txtcenter pad-10"><audio id="medio" controls>
                              <source src="audio/juana/nacion.m4a" type="audio/mp3">
                              Your browser does not support the audio element.
                            </audio></div>
                            </div>
                             <div class="grupo movil-tabla">
  <div class="caja movil-1-3 txtcenter pad-10"><h3>La Innombrable</h3></div>
  <div class="caja movil-2-3  txtcenter pad-10"><audio controls>
                              <source src="audio/juana/innom.m4a" type="audio/mp3">                    
                              Your browser does not support the audio element.
                            </audio></div>
                            </div>
                            




                   
             
                    
                     <div class="caja movil-100 arriba centrar-contenido">
                      <a id="closecontacto" href="index.php#booking" class="rotate"><img src="img/back.png" width="60" height="60"/></a> <br><br>
                      <a href="index.php#booking"><h3 id="regresar">Regresar a Booking</h3></a>

                      </div>
                  </div>



 <div class="caja total  pad-30 ">
                      <div class="caja movil-50 centrar-contenido  ">
                        <a href="https://www.facebook.com/juanalarodillonapunkrock?fref=ts" target="_blank">
                          <div class="facebook centrar-contenido">
                          </div>
                        </a>
                      </div>

                      <div class="caja movil-50   ">
                        <a href="https://twitter.com/LaJuanaOficial" target="_blank">
                          <div class="twitter centrar-contenido">
                          </div>
                        </a>
                      </div>



                 <div id="copy" class="caja total pad-30">
                  <p class="blanco parra copy">&#169 Oveja Negra <br>Esta pagina es un trabajo intelectual de Agencia Oveja Negra, puede ser reproducida sin ánimo de lucro,
pero no se concede permiso para modificar de ninguna manera, y la fuente y la dirección web tiene que ser citada. <br>
Si se usa para otros fines requiere autorización previa.</p>
                </div>


          
      </div>
  </div>
<script type="text/javascript">
       $(document).ready(function(){
    $('.birdman').birdman({speedUp:false});
    setTimeout(function(){
          $('#video').fadeIn(); 
    }, 3500);
  });
 </script>

</body>
</html>