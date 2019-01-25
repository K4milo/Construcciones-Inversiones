<footer class="site-footer container-fluid">
	<div class="row pre-footer">
    <!--background video-->

    <video poster="/wp-content/themes/dep_construcciones/images/bg/bg-prefooter.jpg" id="bgvid" playsinline autoplay muted loop>
      <source src="<?php bloginfo('template_url')?>/videos/footer.mp4" type="video/mp4">
    </video>
    <div class="container">
      <?php dynamic_sidebar('footer-widget-area'); ?>
    </div>
  </div>
  
  <div class="row copyright">
    <div class="container-fluid footer navbar-fixed-bottom foot-fijo" style="background-color:white; ">
      <div class="row">
	  <div class="col-md-2 text-center"><a href="<?php echo get_site_url(); ?>">	<img src="<?php bloginfo('template_url');?>/images/logos/logo-header.png" alt="Construcciones e Inversiones" width="150px" height="auto"></a>
	</div>	
        <div class="col-md-3 text-center align-bottom"><p style="margin-top:10px">312 3747097 - 320 4101684		</p></div>
		  <div class="col-md-4 text-center"><a href="mailto:informacion@construyeinversiones.com"><p style="margin-top:10px">informacion@construyeinversiones.com</p></a></div>
		  <div class="col-md-3 text-center"><a href="#" class="contact-lk"><p style="margin-top:10px">Contáctenos</p></a></div>
		
      </div>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
