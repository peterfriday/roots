<?php get_header(); ?>
  <?php roots_content_before(); ?>
    <div id="content" class="<?php echo CONTAINER_CLASSES; ?>">
    <?php roots_main_before(); ?>
      <div id="main" class="<?php echo FULLWIDTH_CLASSES; ?>" role="main">
        <div class="page-header">
          <h1><?php _e('File Not Found', 'roots'); ?></h1>
        </div>
        <div class="alert alert-block fade in">
          <a class="close" data-dismiss="alert">&times;</a>
          <p><?php _e('Are you trying to hack my site? Nah, it is probably because of my hacking I broke an old link.  Sorry about that' , 'roots'); ?></p>
        </div>
        <p><?php _e('Try the following:', 'roots'); ?></p>
        <ul>
          <li><?php _e('Check your spelling', 'roots'); ?></li>
          <li><?php printf(__('Return to the <a href="%s">home page</a>', 'roots'), home_url()); ?></li>
          <li><?php _e('Click the <a href="javascript:history.back()">Back</a> button', 'roots'); ?></li>
        </ul>
        <?php get_search_form(); ?>
      </div><!-- /#main -->
    <?php roots_main_after(); ?>
    </div><!-- /#content -->
  <?php roots_content_after(); ?>
<?php get_footer(); ?>