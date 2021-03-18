<?php if(!defined('BASEPATH')) exit('No direct script access allowed.');

$css_path = base_url('assets/css').'/';
$js_path = base_url('assets/js').'/';
$assets = base_url('assets').'/';
?>
<body>
    
  <header id="header">

    <div id="topbar">
      <div class="container">
        <div class="social-links">
          <a data-title="Facebook" href="https://web.facebook.com/campestredelvalle.mx" class="facebook"><i class="fa fa-facebook"></i></a>
          <a data-title="Instagram" href="https://www.instagram.com/campestredelvalle.mx/" class="instagram"><i class="fa fa-instagram"></i></a>
        </div>
      </div>
    </div>

    <div class="container">

      <div class="logo float-left">
        <a href="<?=base_url('/inicio');?>" class="scrollto"><img src="<?php echo $assets; ?>logo_blanco.png" alt="Logo Campestre"  width="160px"  /></a>
      </div>

      <nav class="main-nav float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="<?=base_url('/inicio');?>">Inicio</a></li>
          <li><a class="e" href="#planta-baja">Planta Baja</a></li>
          <li><a class="e" href="#planta-alta">Planta Alta</a></li>
          <li><a class="e" href="#galeria">Galería</a></li>
          <li><a class="e" href="#recorrido">Recorrido</a></li>
            <li class="e drop-down" ><a style="color:#F2F2F2" >Más Prototipos</a>
                <ul>
                    <li><a href="<?=base_url('/ambar');?>" >Ambar</a></li>
                    <li><a href="<?=base_url('/ambar-II');?>" >Ambar II</a></li>
                    <li><a href="<?=base_url('/basalto');?>" >Basalto</a></li>
                    <li><a href="<?=base_url('/basalto-II');?>" >Basalto II</a></li>
                </ul>
            </li>
        </ul>
      </nav><!-- .main-nav -->
      
    </div>
  </header><!-- #header -->
    