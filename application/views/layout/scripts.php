  <?php if(!defined('BASEPATH')) exit('No direct script access allowed.');

  $assets = base_url('assets').'/';
  $js_path = base_url('assets/js').'/';
  ?>

   <!--==========================
    Footer
  ============================-->
  <footer id="footer" class="section-bg">
    <div class="footer-top">
      <div class="container">

        <div class="row">

          <div class="col-lg-4">

            <div class="row">

                <div class="col-sm-6">

                  <div class="footer-info">
                      <img src="assets/logo.png"  height="80px" width="250px" style="margin-bottom: 20px;" />
                       <div class="footer-links">
                    <h4>Enlaces</h4>
                    <ul>
                      <li><a class="scrollto" href="<?=base_url('/inicio');?>">Inicio</a></li>
                      <li><a class="scrollto" href="<?=base_url('/inicio#prototipos');?>">Casas</a></li>
                      <li><a href="<?=base_url('/politica');?>">Política de Privacidad</a></li>
                    </ul>
                  </div>
                      
                      <div class="footer-links">
                    <h4>Contacto</h4>
                    <p>
                      <strong>Telefono:</strong> <a href="tel:800 030-0148">800 030-0148</a><br>
                      <strong>Email:</strong> ventas@camprestredelvalle.mx<br>
                    </p>
                  </div>
                      
                  <div class="social-links">
                    <a href="https://web.facebook.com/campestredelvalle.mx" class="facebook"><i class="fa fa-facebook"></i></a>
                    <a href="https://www.instagram.com/campestredelvalle.mx/" class="instagram"><i class="fa fa-instagram"></i></a>
                  </div>
                  </div>

                </div>
            </div>

          </div>

          <div class="col-lg-8">

            <div id="msj"  class="form">
              
              <h4>Envianos un mensaje</h4>
              <p>Queremos saber tus dudas.</p>
              <form  name="form_msj" id="form_msj" method="post"  class="contactForm">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Tu nombre" data-rule="minlen:4" data-msg="" required />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Tu Correo" data-rule="email" required data-msg="Please enter a valid email" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="tema" id="tema" placeholder="Tema" data-rule="minlen:4" required data-msg="Ingrese tema valido" value="" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <textarea required class="form-control" name="message" rows="5" data-rule="required" data-msg="Por favor escribe algo" placeholder="Mensaje"></textarea>
                </div>

                <div id="respuesta"></div>

                <div class="text-center">
                <button type="submit" class="btn btn-sm" id="btn" data-title="Enviar Mensaje">Enviar Mensaje</button></div>
              </form>
            </div>

          </div>

          

        </div>

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Campestre del Valle</strong>. Todos los derechos reservados.
      </div>
      <div class="credits">
       
        Diseñador por  <a href="https://ziro.mx/">Ziromx</a>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <a id="btn-w" href="https://bit.ly/3c1SBuy" class="whats"><i class="fa fa-whatsapp"></i></a>

  <!-- JavaScript Libraries -->
  <script src="<?php echo $assets; ?>lib/jquery/jquery.min.js"></script>
  <script src="<?php echo $assets; ?>lib/jquery/jquery-migrate.min.js"></script>
  <script src="<?php echo $assets; ?>lib/jquery/jquery.validate.min.js"></script>
  <script src="<?php echo $assets; ?>lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo $assets; ?>lib/easing/easing.min.js"></script>
  <script src="<?php echo $assets; ?>lib/mobile-nav/mobile-nav.js"></script>
  <script src="<?php echo $assets; ?>lib/wow/wow.min.js"></script>
  <script src="<?php echo $assets; ?>lib/waypoints/waypoints.min.js"></script>
  <script src="<?php echo $assets; ?>lib/counterup/counterup.min.js"></script>
  <script src="<?php echo $assets; ?>lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="<?php echo $assets; ?>lib/isotope/isotope.pkgd.min.js"></script>
  <script src="<?php echo $assets; ?>lib/lightbox/js/lightbox.min.js"></script>
<!-- Template Main Javascript File -->
  <script src="<?php echo $js_path; ?>main.js"></script>
  

    
  <script>
    var base_url = '<?php echo base_url(); ?>';
  </script>
  <script src="<?php echo $js_path; ?>main.js"></script>

  <?php
  if(isset($view_controller))
  {
  	if( ! is_array($view_controller))
  	{
  		?>
  		<script type="text/javascript" src="<?php echo $js_path.'view_controllers/'.$view_controller; ?>"></script>
  		<?php
  	}
  	else
  	{
  		foreach($view_controller as $vc)
  		{
  			?>
  			<script type="text/javascript" src="<?php echo $js_path.'view_controllers/'.$vc; ?>"></script>
  			<?php
  		}
  	}
  }
  ?>
    
    <?php 
    
    if(isset($view)){
        ?>
  		<script type="text/javascript" src="<?php echo $js_path.''.$view; ?>"></script>
  		<?php
    }

    ?>


</body>
</html>