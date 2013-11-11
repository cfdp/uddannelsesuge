<div class="page-wrap">
  <?php include(path_to_theme() . '/templates/partials/menu.tpl.php'); ?>

  <div class="container page-content">
    <?php include(path_to_theme() . '/templates/partials/messages.tpl.php'); ?>
    <?php hide($page['content']['title']); ?>
    <?php print render($page['content']); ?>
    <section class="hero one-space-after one-space-before">
      <div class="row">
        <div class="columns">
          <h1>Her kommer Uddannelseuges website.</h1>
          <h2 class="subheader">under opbygning...</h2>
        </div>
      </div>
      <img src="/<?php print path_to_theme(); ?>/images/hero_1245x650.jpg" alt="Young people">
    </section>
    <?php //include(path_to_theme() . '/templates/partials/front/activities.tpl.php'); ?>
    <?php //include(path_to_theme() . '/templates/partials/ad-quiz.tpl.php'); ?>
    <?php //include(path_to_theme() . '/templates/partials/front/program.tpl.php'); ?>

  </div><!-- .page-content -->

  <?php // kpr($variables['node']); ?>

</div><!-- .page-wrap -->
<?php include(path_to_theme() . '/templates/partials/footer.tpl.php'); ?>
