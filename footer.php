<div class="footer">
      <p class="footer-text"><?php echo get_option('jolili_footer_text') ?></p>
      <?php echo get_option('jolili_footer_address'); ?>
    </div>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js" type="text/javascript"></script>
  <script src="<?php echo get_template_directory_uri() ?>/js/webflow.js" type="text/javascript"></script>
  <!--[if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif]-->
<?php wp_footer(); ?>
</body>
</html>