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
            href : 'images/alicia/1.jpg',
            title : '¡Todos a jugar con Alicia!'
          }, {
            href : 'images/alicia/2.jpg'
          }, {
            href : 'images/alicia/3.jpg'
          }, {
            href : 'images/alicia/4.jpg'
          }, {
            href : 'images/alicia/5.jpg'
          }, {
            href : 'images/alicia/6.jpg'
          }, {
            href : 'images/alicia/7.jpg'
          }, {
            href : 'images/alicia/8.jpg'
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
        <p  class="ti birdman blanco  txtcenter">Todos a jugar con Alicia</p> <br>
        <div class="caja total txtleft">
          <a id="titulo"  class="rotate"><img src="img/gallery.png" width="40" height="40"/></a>
        </div>
            

      </div>
     
        
    </div> 


       
               <script src="js/jquery.backstretch.js"></script>
                  <script>
                      $("#pics").backstretch([
                        
                         "images/alicia/1portada.jpg",
                         "images/alicia/2portada.jpg",
                         
                         "images/alicia/4portada.jpg"
                         

                  
                      ], {
                          fade: 750,
                          duration: 4000
                      });
                </script>

         


          <div class="caja movil-100 tablet-100 web-100  pad-30 ">
            <div id="video" class="caja-total txtcenter ">
            
               <iframe  width="70%" height="100%" src="https://www.youtube.com/embed/mAAHLM6j6SE" frameborder="0" allowfullscreen></iframe>
            </div>
          

          </div>




          <div id="logograndeAlicia" class="caja movil-100 tablet-100 web-100 pad-30 " data-stellar-background-ratio="0.5">
                  <div class="caja movil-100 centrar-contenido tablet-50 web-50 ">
                                            
                        <p class="parra  blanco  txtjustify ">
                        Alas y Raíces dará continuidad al derecho de los niños al juego, una de las garantías culturales que establece la Convención Internacional de los Derechos de los Niños... se celebrará el 150 aniversario de la novela “Alicia en el país de las maravillas” del matemático, lógico y escritor británico Charles Lutwidge Dodgson, más conocido como Lewis Carroll (1832-1898).<br><br>
Este segundo festival se esperan más de 50 mil personas.<br><br><br>
                        </p>
                        <h3>-Edwin Trujete,<br> secretario ejecutivo de Desarrollo Infantil del Conaculta, PERIÓDICO EXCELSIOR, 21 DE ABRIL, 2015-</h3>
                        
                        
                  </div>


                  <div class="caja movil-100 tablet-50 web-50 pad-30">
                     
                    <div class="logo txtcenter">
                      <img  src="images/alicia.jpg" >
                    </div>
                    <br><br><br><br><br>
                     <div class="caja movil-100 tablet-1-3 txtcenter pad-30 ">
                      <a id="closecontacto" href="index.php#production" class="rotate"><img src="img/back.png" width="60" height="60"/></a>
                    </div>

                    <div class="caja movil-100 tablet-2-3 txtcenter pad-30 ">
                      <a href="index.php#production"><h3 id="regresar">Regresar a Production</h3></a>
                    </div>
                  
                  </div>
          </div>


          <!--Cambiar fondo de Alicia-->








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
