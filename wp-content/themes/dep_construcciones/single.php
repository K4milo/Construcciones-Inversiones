<?php get_template_part('includes/header'); ?>
<?php 
  // Hero Banner
  get_template_part('includes/commons/block','title-hero');
?>
<div class="container">
  <div class="row">
    
    <div class="single-wrapper">
      <div id="content" role="main">
        <?php get_template_part('includes/loops/content', 'single'); ?>
      </div><!-- /#content -->
    </div>
    
  </div><!-- /.row -->
</div><!-- /.container -->

<?php get_template_part('includes/footer'); ?>
