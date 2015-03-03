<?php

/**
 * @file
 * Default theme implementation to present all user profile data.
 *
 * This template is used when viewing a registered member's profile page,
 * e.g., example.com/user/123. 123 being the users ID.
 *
 * Use render($user_profile) to print all profile items, or print a subset
 * such as render($user_profile['user_picture']). Always call
 * render($user_profile) at the end in order to print all remaining items. If
 * the item is a category, it will contain all its profile items. By default,
 * $user_profile['summary'] is provided, which contains data on the user's
 * history. Other data can be included by modules. $user_profile['user_picture']
 * is available for showing the account picture.
 *
 * Available variables:
 *   - $user_profile: An array of profile items. Use render() to print them.
 *   - Field variables: for each field instance attached to the user a
 *     corresponding variable is defined; e.g., $account->field_example has a
 *     variable $field_example defined. When needing to access a field's raw
 *     values, developers/themers are strongly encouraged to use these
 *     variables. Otherwise they will have to explicitly specify the desired
 *     field language, e.g. $account->field_example['en'], thus overriding any
 *     language negotiation rule that was previously applied.
 *
 * @see user-profile-category.tpl.php
 *   Where the html is handled for the group.
 * @see user-profile-item.tpl.php
 *   Where the html is handled for each item in the group.
 * @see template_preprocess_user_profile()
 *
 * @ingroup themeable
 */

$userid = $elements['#account']->uid;
 hide($user_profile['summary']);
 hide($user_profile['hybridauth_identities']);
 
 hide($user_profile['field_name']);
 hide($user_profile['mail']);
 hide($user_profile['field_location']);
 hide($user_profile['field_first_name']);
 hide($user_profile['field_last_name']);
 hide($user_profile['migrate_example_gender']);
 hide($user_profile['field_migrate_example_gender']);
 hide($user_profile['field_location_reference']);
 hide($user_profile['field_website']);
 hide($user_profile['field_signature']);
 hide($user_profile['field_avatar_gender']);
 hide($user_profile['field_avatar_ref']);
 hide($user_profile['field_thumbnail_ref']);
  
  dpm($current_user);
 
?> 
		               		<section class="profile-info">
		               			<?php print render($user_profile['user_picture']); ?>
		               			<?php if(!empty($elements['#account']->name)):?>
  				               	  <h3><?php print $elements['#account']->name; ?></h3>
				               	<?php endif; ?>
				               	<dl>  
				               	  <?php if(isset($elements['#account']->field_location['und'])):?>
				               	    <dt>Location:</dt>
				               	    <dd><?php print $elements['#account']->field_location['und'][0]['safe_value'];?></dd>
								  <?php endif; ?> 
				               	    <dt>No. of posts:</dt>
				               	    <dd><?php print ambitious_get_user_post_count($userid); ?></dd>
				               	    <?php if(isset($elements['#account']->field_website['und'])):?>
				               		<dt>Website:</dt>
				               		<dd><?php print $elements['#account']->field_website['und'][0]['safe_value'];?></dd>
									<?php endif; ?>
				               	  </dl>
			               	</section>
			               	<section class="about-me">
			               	<?php if(isset($elements['#account']->field_about_me['und'])) :?>
			               		<h2>About me</h2>
			               		<p>
			               		   <?php print $elements['#account']->field_about_me['und'][0]['safe_value']; ?>
			               		</p>
			               		<?php endif; ?>
                       <?php if ($edit_url) print $edit_url;  ?>
		               		</section>
		               		<?php if (!empty($hybridauth_user)):?>
		               		<section class="connect">  
			               		<h3>Connect for faster login</h3>
			               		<?php print $hybridauth_user;	?>
		               		</section>
		               		<?php endif; ?>
     			               	  
<div class="profile"<?php print $attributes; ?>>
  <?php  print render($user_profile); ?>
</div>
