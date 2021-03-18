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
          <h2>COMIENZA TU NUEVO <span>HOGAR</span></h2>
          <div>
            <a href="#msj" class="btn-get-started scrollto">Solicita Información.</a>
          </div>
        </div>
  
        
      </div>
    </div>
      <video class="video" autoplay muted loop id="myVideo" preload="metadata">
      <source src="<?php echo $sitio;  ?>video/banner.mov" type="video/mp4">
        </video>
  </section>
    
        <!--==========================
    Seccción Texto
  ============================-->
    <section id="texto" class="section-bg" >
        <div class="container" >
            <div class="row" >
                <div class="col-sm-12 text-center" >
                    <img src="<?php echo $sitio;  ?>icons/home.png" alt="casa campestre" />
                    <h3>“Lo más valioso del día<br> 
                    es llegar a tu hogar”</h3>
                    <p>Esto es <strong>Campestre del Valle</strong>, una 
                    comunidad en donde convergen:<br>
                    <strong>espacio</strong> y <strong>calidad</strong> de vida en un 
                    entorno <strong>armónico</strong>.
                    </p>
                    <h3>¡Descúbrela!</h3>
                </div>
            
            </div>
        </div>
    </section>
    
     <!--==========================
    Seccción Prototipos
  ============================-->
    <section id="casas" class="section-bg" >
        <div class="container" >
            <div class="row" >
                <div class="col-sm-12 text-center" ><h2>Prototipos</h2></div>
                <div class="col-sm-3" >
                    <div class="casa">
                        <a  href="<?=base_url('/ambar');?>" ><img src="<?php echo $sitio;  ?>prototipos/ambar1.png" /></a>
                        <h3>Ambar 1</h3>
                        <div class="links inline">
                            <a  class="scrollto btn-infor"  href="#msj" data="Ambar I"><li class="ver" ><span class="fa fa-envelope-o"></span></li></a>
                        <a href="<?=base_url('/ambar');?>" ><li class="ver" ><span class="fa fa-info"></span></li></a>
                            <a href="<?=base_url('/ambar#recorrido');?>"><li class="ver" ><span class="fat">360°</span></li></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3" >
                    <div class="casa">
                        <a href="<?=base_url('/ambar-II');?>"><img src="<?php echo $sitio;  ?>prototipos/ambar2.png" /></a>
                    <h3>Ambar 2</h3>
                        <div class="links">
                            <a  class="scrollto btn-infor"  href="#msj" data="Ambar II"><li class="ver" ><span class="fa fa-envelope-o"></span></li></a>

                            <a href="<?=base_url('/ambar-II');?>"><li class="ver" ><span class="fa fa-info"></span></li></a>
                            <a href="<?=base_url('/ambar-II#recorrido');?>"><li class="ver" ><span class="fat">360°</span></li></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3" >
                    <div class="casa">
                        <a href="<?=base_url('/basalto');?>"><img src="<?php echo $sitio;  ?>prototipos/basalto1.png" /></a>
                    <h3>Basalto 1</h3>
                        <div class="links">
                            <a  class="scrollto btn-infor" href="#msj" data="Basalto I"><li class="ver" ><span class="fa fa-envelope-o"></span></li></a>
                            <a href="<?=base_url('/basalto');?>"><li class="ver" ><span class="fa fa-info"></span></li></a>
                            <a href="<?=base_url('/basalto#recorrido');?>"><li class="ver" ><span class="fat">360°</span></li></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3" >
                    <div class="casa">
                        <a href="<?=base_url('/basalto-II');?>"><img src="<?php echo $sitio;  ?>prototipos/basalto2.png" /></a>
                    <h3>Basalto 2</h3>
                        <div class="links">
                            <a  class="scrollto btn-infor" href="#msj" data="Basalto II"><li class="ver" ><span class="fa fa-envelope-o"></span></li></a>
                            <a href="<?=base_url('/basalto-II');?>"><li class="ver" ><span class="fa fa-info"></span></li></a>
                            <a href="<?=base_url('/basalto-II#recorrido');?>"><li class="ver" ><span class="fat">360°</span></li></a>
                        </div>
                    </div>
                </div>
            
            </div>
        </div>
    
    </section>
    
     <!--==========================
    Seccción Amenidades
  ============================-->
    <section id="amenidades" class="section-bg" >
        <div class="container" >
            <div class="row" >
                <div class="col-sm-12 text-center" ><h2>Amenidades</h2></div>
                <div class="col-sm-6 text-center p-4 mb-5" >
                    <div class="box" >
                        <p>Facíl Acceso a nuestro <strong>desarrollo</strong></p>
                    </div>
                    <img class="img-fluid" src="<?php echo $sitio;  ?>/amenidades/1.png" />
                    
                </div> 
                <div class="col-sm-6 text-center p-4 mb-5" >
                    <div class="box" >
                        <p>Área de juegos <strong>infantiles</strong></p>
                    </div>
                    <img class="img-fluid" src="<?php echo $sitio;  ?>/amenidades/4.png" />
                    
                </div>
                
                <div class="col-sm-6 text-center p-4 of3" >
                    <div class="box" >
                        <p>Áreas <strong>verdes</strong></p>
                    </div>
                    <img class="img-fluid" src="<?php echo $sitio;  ?>/amenidades/2.png" />
                    
                </div>
                <div class="col-sm-12 text-center" >
                
                    <video class="video" controls preload="metadata" >
                        <source  src="<?php echo $sitio;  ?>video/render.mp4" type="video/mp4" >
                    </video>
                    
                </div>
            
            </div>
        </div>
    </section> 

<!--==========================
    Seccción Blog
  ============================-->
    <section id="blog" class="section-bg" >
        <div class="container" >
            <div class="row" >
                <div class="col-sm-12 text-center" ><h2>Síguenos en Nuestras Redes Sociales</h2></div>
                <div class="col-sm-12 text-center" >
                    <div class="box" >
                        <div class="col-sm-12 text-center" >
                        <a href="https://web.facebook.com/campestredelvalle.mx" style="color:#466179" ><li class="fa fa-facebook" ></li></a><a style="color:#466179" href="https://www.instagram.com/campestredelvalle.mx/"><li class="fa fa-instagram" ></li></a></div>
                        
                        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fweb.facebook.com%2Fcampestredelvalle.mx&tabs=timeline&width=400&height=500&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=false&appId=1186409934866517" width="400" height="450" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                       
                    </div>
                </div> 
            
            </div>
        </div>
    </section>  
    
    <!--==========================
    Seccción Mapa
  ============================-->
    <section id="mapa" class="section-bg" >
        <div class="container" >
            <div class="row" >
                <div class="col-sm-12 text-center" ><h2>Ubicación</h2></div>
            </div>
            <div class="row">
                    <div class="col-sm-4" >
                    <p>La ubicación es sin duda, una de las características más importantes de <strong>Campestre del Valle</strong></p>
                    </div>
                
                 <div class="col-sm-8" >
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3746.892094295862!2d-101.19236374982482!3d20.096797086444354!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842cfbf0006d98c9%3A0x921db2c8edf3bf61!2sCampestre%20del%20Valle!5e0!3m2!1ses-419!2smx!4v1614203520259!5m2!1ses-419!2smx" width="100%" height="350" style="border:0;border-radius: 15px;" allowfullscreen="" loading="lazy"></iframe>
                </div>
                <div class="col-sm-12 p-5 text-center" >
                    <span >A través de amplias avenidas  como el <strong>Libramiento Sur</strong>,<br> <strong>Carretera Moroleón Piñicuaro o Libramiento San Miguel</strong><br> accedes fácilmente a las vías <strong>comerciales más importantes </strong>de la ciudad.
                        </span>
                </div>
                </div>
        </div>
    </section>
    
   

    
 

