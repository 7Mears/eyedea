<?php /** * @package eyedea */ ?>

<?php if ( is_active_sidebar( 'footer' ) ) : ?>
<footer class="site-footer">
  <div class="container">
  <?php dynamic_sidebar( 'footer' ); ?>
  </div>
  <div class="clear"></div>
</footer>
<?php endif; ?>
<!-- /page -->

<?php wp_footer(); ?>

</body>

</html>
