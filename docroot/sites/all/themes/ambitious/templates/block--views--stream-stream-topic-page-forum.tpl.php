<?php
/**
 * @file
 * Returns the HTML for a block.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728246
 */
?>


<div id="<?php print $block_html_id; ?>" class="<?php print $classes; ?>"<?php print $attributes; ?>>
  <!-- fourm block -->
    <section class="forum-block">
      <div class="holder">
        <?php print render($title_prefix); ?>
        <?php if ($title): ?>
          <h1<?php print $title_attributes; ?>><?php print $title; ?></h1>
        <?php endif; ?>
        <?php print render($title_suffix); ?>
       <div class="block">
         <?php print $content; ?>
       </div>
     </div>
     <div class="bg-stretch">
       <img src="<?php print base_path().drupal_get_path('theme', 'ambitious') ?>/images/top_bg.jpg" alt="image description">
     </div>
   </section>
</div>
