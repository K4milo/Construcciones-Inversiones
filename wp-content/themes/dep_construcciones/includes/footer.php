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
    <div class="container">
      <ul>
        <li>312 3747097 - 320 4101684</li>
        <li><a href="mailto:informacion@construyeinversiones.com">informacion@construyeinversiones.com</a></li>
        <li><a href="#" class="contact-lk">Contáctenos</a></li>
      </ul>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
