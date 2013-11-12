<div class="page-wrap">
  <?php include(path_to_theme() . '/templates/partials/menu.tpl.php'); ?>

  <div class="container page-content">
    <?php include(path_to_theme() . '/templates/partials/messages.tpl.php'); ?>
    <?php hide($page['content']['title']); ?>
    <?php print render($page['content']); ?>
  </div><!-- .page-content -->

  <?php // kpr($variables['node']); ?>

</div><!-- .page-wrap -->
<?php include(path_to_theme() . '/templates/partials/footer.tpl.php'); ?>
