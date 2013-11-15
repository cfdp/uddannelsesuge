<div class="page-wrap">
  <?php include(path_to_theme() . '/templates/partials/menu.tpl.php'); ?>

  <div class="container page-content">

    <?php include(path_to_theme() . '/templates/partials/messages.tpl.php'); ?>
    <?php hide($page['content']['title']); ?>
    <?php print render($page['content']); ?>
  </div><!-- .page-content -->


  <div class="row">
    <div class="column sharing-btns-wrapper">
      <p>Del Uddannnelsesuge.dk</p>
      <?php
        $sharing_url = "http://uddannelsesuge.dk". $node_url;
        $sharing_text = $title;
      ?>
      <?php include(path_to_theme() . '/templates/partials/sharing-btns.tpl.php'); ?>
    </div>
  </div>

</div><!-- .page-wrap -->
<?php include(path_to_theme() . '/templates/partials/footer.tpl.php'); ?>
