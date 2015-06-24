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
global $user;
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
 hide($user_profile['field_tell_us_about_yourself']); 
 hide($user_profile['field_user_notes']);
?> 
		               		<section class="profile-info">
		               			<?php print render($user_profile['user_picture']); ?>
		               			<?php if(isset($elements['#account']->field_name['und'])):?>
  				               	  <h3><?php print $elements['#account']->field_name['und'][0]['safe_value']; ?></h3>
  				               	<?php else: ?>
  				               	  <h3><?php print $elements['#account']->name; ?></h3>
				               	<?php endif; ?>

				               	<dl> 
				               	  <?php if(isset($current_user)):?> 

				               	    <?php if(isset($elements['#account']->field_first_name['und'])):?>
				               		<dt>First name:</dt>
				               		<dd><?php print $elements['#account']->field_first_name['und'][0]['safe_value'];?></dd>
									<?php endif; ?>

									<?php if(isset($elements['#account']->field_last_name['und'])):?>
				               		<dt>Last name:</dt>
				               		<dd><?php print $elements['#account']->field_last_name['und'][0]['safe_value'];?></dd>
									<?php endif; ?>

									<?php if(!empty($elements['#account']->mail)):?>
				               		<dt>Email:</dt>
				               		<dd><?php print $elements['#account']->mail;?></dd>
									<?php endif; ?>

									<?php if(isset($elements['#account']->field_signature['und'])):?>
				               		<dt>Signature:</dt>
				               		<dd><?php print $elements['#account']->field_signature['und'][0]['safe_value'];?></dd>
									<?php endif; ?>

									<?php if(isset($elements['#account']->field_location['und'])):?>
				               	    <dt>Location:</dt>
				               	    <dd><?php print $elements['#account']->field_location['und'][0]['safe_value'];?></dd>
								  	<?php endif; ?>

				               	  <?php else: ?>

					               	  <?php if(isset($elements['#account']->field_location['und'])):?>
					               	    <dt>Location:</dt>
					               	    <dd><?php print $elements['#account']->field_location['und'][0]['safe_value'];?></dd>
									  <?php endif; ?>

					               	    <dt>No. of posts:</dt>
					               	    <dd><?php print ambitious_get_user_post_count($userid); ?></dd>


                                	<?php endif; ?>

                                    <?php if(isset($elements['#account']->field_website['und'][0]['safe_value'])):?>
					               		<dt>Website:</dt>
					               		<dd><a href="<?php print $elements['#account']->field_website['und'][0]['safe_value'];?>" target="_blank"><?php print $elements['#account']->field_website['und'][0]['safe_value'];?></a></dd>
									<?php endif; ?>

                                    <?php if(isset($elements['#account']->field_blog['und']) || isset($elements['#account']->field_twitter['und'])): ?> 
									<dt>Links:</dt>
									<?php endif; ?>

				               		<dd>
				               			<strong>
				               			 <?php if(isset($elements['#account']->field_blog['und'])): ?>
				               			  <?php print l('Blog', $elements['#account']->field_blog['und'][0]['url'], array('absolute' => TRUE,'attributes' => array('target'=>'_blank'))); ?> 
				               			  <?php endif; ?>
				               			  <?php if(isset($elements['#account']->field_blog['und']) && isset($elements['#account']->field_twitter['und'])): ?> / <?php endif; ?>
				               			  <?php if(isset($elements['#account']->field_twitter['und'])): ?>
				               			  <?php print l('Twitter', $elements['#account']->field_twitter['und'][0]['url'], array('absolute' => TRUE,'attributes' => array('target'=>'_blank'))); ?> 
				               			  <?php endif; ?>
				               			</strong>
				               		</dd>						
				               	  </dl>
			               	</section> 
			               	<section class="about-me">
			               	<?php if(isset($elements['#account']->field_about_me['und'])) :?>
			               		<h2>About me</h2>
			               		<p><?php print render($user_profile['field_tell_us_about_yourself']); ?></p>
			               		<p>
			               		   <?php print $elements['#account']->field_about_me['und'][0]['safe_value']; ?>
			               		</p>
			               		<?php endif; ?>
			               		<?php if(!empty($user_profile['field_user_notes']) && aviluser_roles($user) != 0):?>
					                <h4><?php print t('Editor notes:');?></h4>
					               	<?php print render($user_profile['field_user_notes']) ;?>
									      <?php endif; ?>
                         <?php if ($edit_url) print $edit_url;  ?>
		               		</section> 
		               		<?php if (!empty($hybridauth_user)):?>
		               		<section class="connect">  
			               		<h3>Connect for faster login</h3>
			               		<?php print $hybridauth_user['Facebook'];	?>
			               		<?php print $hybridauth_user['Twitter'];	?>
			               		<?php print $hybridauth_user['Google'];	?>
		               		</section>
		               		<?php endif; ?>
     			               	  
<div class="profile"<?php print $attributes; ?>>
  <?php  print render($user_profile); ?>
    <br>
  <a href="/talk-to-others">Back to Talk to Others</a>
</div>

<div>
</div>
