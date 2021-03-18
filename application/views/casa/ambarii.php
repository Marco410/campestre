<?php if(!defined('BASEPATH')) exit('No direct script access allowed.');

$sitio = base_url('assets/sitio').'/';
?>   
<!--==========================
    Intro Section
  ============================-->   
    
  <section id="intro" class="clearfix">
    <div class="container d-flex h-100 encima ">
      <div class="row justify-content-center align-self-center">
        <div class="col-sm-9 intro-info " style="margin-left: 200px;">
          <h2>CONOCE <span>AMBAR II</span></h2>
          <div>
            <a href="#img" data="Ambar II" id="btn-info" class="btn-get-started scrollto">Solicita Información.</a>
          </div>
        </div>
  
        
      </div>
    </div>
    <img class="bannerimg" src="<?php echo $sitio; ?>prototipos/ambar2.jpg"  width="100%" height="100%" />
  </section>

<!--==========================
    Dimension
  ============================-->   
    
   <section id="dimenciones" class="clearfix">
      <div class="container" >
          <div class="row" >
              <div class="col-sm-6 text-center" >
                  <h2>Dimensiones</h2> 
                  <div class="box" ><img src="<?php echo $sitio;  ?>icons/terreno.svg" alt="terreno campestre" /> 105 m2 de Terreno</div>
                  <div class="box" ><img src="<?php echo $sitio;  ?>icons/ladrillos.svg" alt="construccion campestre" /> 103 m2 de construcción</div>
            </div>
              <div class="col-sm-6 text-center" >
                  <h2>Brochure</h2>
                  <div class="box" ><a  target="_blank" href="<?php echo $sitio;  ?>archivos/BROCHURE AMBAR C.V.pdf" style="color:#466179;margin-left:25px;margin-right:25px;" class="enlace" >Descargar <i class="fa fa-file-pdf-o" style="" ></i></a></div>
                 
            </div>
          </div>
      </div>
    </section>
            
<!--==========================
    Planta Baja
  ============================-->   
    
  <section id="planta-baja" class="clearfix">
      <div class="container" >
        <div class="row" >
            <div class="col-sm-12 text-center" >
                <h2>Planta Baja</h2>
            </div>
            <div class="col-sm-6" >
                <img  class="img-planta" src="<?php echo $sitio ?>prototipos/plantas/Ambar Planta Baja.png" />
            </div> 
            <div class="col-sm-6 col-12 p-4" >
                <div class="col-sm-12" >
                 <div class="box" ><img src="<?php echo $sitio;  ?>icons/bed.svg" alt="recamara campestre" /> Recámara</div>
                    <div class="box" ><img src="<?php echo $sitio;  ?>icons/kitchen.svg" alt="cocina campestre" /> Cocina Integral con estufa</div><div class="box" ><img src="<?php echo $sitio;  ?>icons/armchair.svg" alt="sala campestre" /> Sala y Comedor</div><div class="box" ><img src="<?php echo $sitio;  ?>icons/lavadora.svg" alt="servicio campestre" /> Área de Servicio</div><div class="box" ><img src="<?php echo $sitio;  ?>icons/bathtub.svg" alt="sala campestre" /> Baño Completo ( Cancel de cristal templado)</div>
                </div>
            </div>
        </div>
      </div>
    
  </section>

<!--==========================
    Planta Alta
  ============================-->   
    
  <section id="planta-alta" class="clearfix">
      <div class="container" >
        <div class="row" >
            <div class="col-sm-12 text-center" >
                <h2>Planta Alta</h2>
            </div>
            <div class="col-sm-6 col-12 p-4" >
                <div class="col-sm-12" >
                 <div class="box" ><img src="<?php echo $sitio;  ?>icons/bed.svg" alt="recamara campestre" /> 2 Recámaras con closet</div>
                    <div class="box" ><img src="<?php echo $sitio;  ?>icons/librero.svg" alt="estudio campestre" /> Estudio</div><div class="box" ><img src="<?php echo $sitio;  ?>icons/camiseta.svg" alt="vestidor campestre" /> Vestidor</div><div class="box" ><img src="<?php echo $sitio;  ?>icons/bathtub.svg" alt="sala campestre" /> 2 Baños Completos ( Cancel de cristal templado)</div>
                </div>
            </div>
            
            <div class="col-sm-6" >
                <img  class="img-planta" src="<?php echo $sitio ?>prototipos/plantas/Ambar Planta Alta.png" />
            </div> 
        </div>
      </div>
    
  </section>

  <!--==========================
      Galeria Section
    ============================-->
    <section id="galeria" class="wow fadeInUp">
      <div class="container">
          <div class="col-sm-12 text-center" >
            <h2>Galería</h2>
          </div>

        <div class="owl-carousel galeria-carousel">
         
            
            <?php for($i=1; $i <= 39 ; $i++){ ?>
            
            <a href="<?php echo $sitio;  ?>prototipos/galeria/ambar/<?php echo $i ?>A.jpg" data-title="Prototipo Ambar" data-lightbox="ambar1" ><img src="<?php echo $sitio;  ?>prototipos/galeria/ambar/<?php echo $i ?>A.jpg" alt="Galeria Ambar Campestre <?php echo $i ?>"></a>
            <?php } ?>
        </div>
          
        

      </div>
    </section><!-- #clients -->

 <!--==========================
      Recorrido
    ============================-->
    <section id="recorrido" class="wow fadeInUp">
      <div class="container">
          <div class="col-sm-12 text-center" >
            <h2>Recorrido</h2><img src="<?php echo $sitio;  ?>icons/360-grados.svg" class="img-fluid" alt="Recorrido 360 Ambar">
          </div>
          
          <div class="col-sm-12 text-center" >
            <iframe width='853' height='480' src='https://metrics.ag/3d-model/campestre-del-valle-ambar/fullscreen/' frameborder='0' allowfullscreen allow='xr-spatial-tracking'></iframe>
          </div>
        </div>
</section>