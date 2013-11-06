<div class="page-wrap">
  <?php include(path_to_theme() . '/templates/partials/menu.tpl.php'); ?>

  <div class="container page-content">
    <?php include(path_to_theme() . '/templates/partials/messages.tpl.php'); ?>

    <section class="hero one-space-after one-space-before">
      <div class="row">
        <div class="columns">
          <h1>Ungdomsuddannelses inspiration Aalborg</h1>
        </div>
      </div>
      <img src="http://placekitten.com/1245/650" alt="Young people">
    </section>
    <?php include(path_to_theme() . '/templates/partials/front/activities.tpl.php'); ?>
    <?php include(path_to_theme() . '/templates/partials/ad-quiz.tpl.php'); ?>
    <?php include(path_to_theme() . '/templates/partials/front/program.tpl.php'); ?>

  </div><!-- .page-content -->

  <?php // kpr($variables['node']); ?>

</div><!-- .page-wrap -->
<?php include(path_to_theme() . '/templates/partials/footer.tpl.php'); ?>
