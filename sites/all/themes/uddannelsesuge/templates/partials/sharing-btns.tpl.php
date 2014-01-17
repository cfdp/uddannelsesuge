<?php $theme_path = base_path() . path_to_theme(); ?>
<div id="share-buttons">
  <!-- Facebook -->
  <a href="http://www.facebook.com/sharer.php?u=<?php print $sharing_url; ?>" target="_blank"><img src="<?php print $theme_path; ?>/images/social/facebook.png" alt="Facebook" /></a>
  <!-- Twitter -->
  <a href="http://twitter.com/share?url=<?php print $sharing_url; ?>&text=<?php print $sharing_text; ?>" target="_blank"><img src="<?php print $theme_path; ?>/images/social/twitter.png" alt="Twitter" /></a>
  <!-- Google+ -->
  <a href="https://plus.google.com/share?url=<?php print $sharing_url; ?>" target="_blank"><img src="<?php print $theme_path; ?>/images/social/google.png" alt="Google" /></a>
  <!-- Email -->
  <a href="mailto:?Subject=<?php print $sharing_text; ?>&Body=%20<?php print $sharing_url; ?>"><img src="<?php print $theme_path; ?>/images/social/email.png" alt="Email" /></a>
</div>