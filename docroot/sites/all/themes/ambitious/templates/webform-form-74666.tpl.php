<?php
  // Print out the progress bar at the top of the page
  print drupal_render($form['progressbar']);

  // Print out the preview message if on the preview page.
  if (isset($form['preview_message'])) {
    print '<div class="messages warning">';
    print drupal_render($form['preview_message']);
    print '</div>';
  }

  ?>
  <div class="signup-columns">
            <div class="2-col col">
              <?php print drupal_render($form['submitted']['left_text']);?>
            </div>
            <div class="2-col col">
               <div class="signup-form">
                <?php print drupal_render($form['submitted']['title']);?>
                <?php print drupal_render($form['submitted']['are_you_with_us']['first_name']);?>
                <?php print drupal_render($form['submitted']['are_you_with_us']['email']);?>
                <?php print drupal_render($form['submitted']['yes-i-am']);?>
                <?php print drupal_render($form['submitted']['not_right_now']);?>
                <span class="icon-Rightarrow"></span>
                </div>
            </div>
          </div>
<?php
  // Always print out the entire $form. This renders the remaining pieces of the
  // form that haven't yet been rendered above (buttons, hidden elements, etc).
  print drupal_render_children($form);
