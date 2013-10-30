<div class="page-wrap">
    <div class="contain-to-grid sticky">
      <nav class="top-bar">
        <ul class="title-area">
          <!-- Title Area -->
          <li class="name">
            <h1><a href="/">Uddannelsesuge.dk</a></h1>
          </li>

          <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
        </ul>

        <section class="top-bar-section">
          <!-- Right Nav Section -->
          <ul class="right">
            <li class="active"><a href="/">Forside</a></li>
            <li><a href="/#program">Program</a></li>
            <li><a href="/#activities">Aktiviteter</a></li>
            <li><a href="/quiz">Uge 4 Quiz</a></li>
            <li><a href="/about">Om uddannelsesugen</a></li>
          </ul>
        </section>
      </nav>
    </div>
    <!-- .contain-to-grid -->

<div class="container page-content">

  <div class="row one-space-before">
    <div class="columns">
      <?php if ($messages): print $messages; endif; ?>

      <?php if (!empty($tabs)): ?>
        <?php print render($tabs); ?>
        <?php if (!empty($tabs2)): print render($tabs2); endif; ?>
      <?php endif; ?>

      <?php if ($action_links): ?>
        <ul class="action-links">
          <?php print render($action_links); ?>
        </ul>
      <?php endif; ?>
    </div>
  </div>


  <?php print render($page['content']); ?>

</div><!-- .page-content -->

<?php // kpr($variables['node']); ?>

  </div>
  <!-- .page-wrap -->
  <footer class="site-footer container">
    <div class="row">
      <div class="column">
        <p class="show-for-medium-up">
          &copy; <a href="http://uu-aalborg.com">Ungdommens&nbsp;Uddannelsesvejledning&nbsp;Aalborg</a> &nbsp; &middot; &nbsp; Designet af <a href="http://cfdp.dk">Center for Digital Pædagogik</a>
        </p>
        <p class="show-for-small">
          &copy; <a href="http://uu-aalborg.com">UU&nbsp;Aalborg</a> &nbsp; &middot; &nbsp; Designet af <a href="http://cfdp.dk">CfDP</a>
        </p>
      </div>
    </div>

  </footer>