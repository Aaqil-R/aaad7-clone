<?php 
  //each file loads it's own styles because we cant predict which file will be loaded 
  drupal_add_css(drupal_get_path('module', 'privatemsg').'/styles/privatemsg-recipients.css');
?>
<div class="privatemsg-message-participants">
<div class="only-mobile"><a href="/user">Back to profile</a></div>
  <?php print $participants; ?>
</div>