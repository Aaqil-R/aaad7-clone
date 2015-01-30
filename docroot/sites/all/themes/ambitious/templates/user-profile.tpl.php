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


 
  
?> 
		               		<section class="profile-info">
		               			<?php print render($user_profile['user_picture']); ?>
		               			<?php if(isset($elements['#account']->name)):?>
  				               	  <h3><?php print $elements['#account']->name; ?></h3>
				               	<?php endif; ?>
				               	<dl> 
				               		<?php if(isset($elements['#account']->field_name['und'])):?>
				               		<dt>Name:</dt>
				               		<dd><?php print $elements['#account']->field_name['und'][0]['safe_value']; ?></dd>
									<?php endif; ?>
                                             <?php if(!empty($elements['#account']->mail)):?>
				               		<dt>Email:</dt>
				               		<dd><?php print $elements['#account']->mail['und'];?></dd>
									<?php endif; ?>
									<?php if(isset($elements['#account']->field_location['und'])):?>
				               		<dt>Location:</dt>
				               		<dd><?php print $elements['#account']->field_location['und'][0]['safe_value'];?></dd>
									<?php endif; ?> 

				               		<dt>No. of posts:</dt>
				               		<dd>92</dd>
                                             <?php if(isset($elements['#account']->field_blog['und'] || $elements['#account']->field_twitter['und'])): ?>
				               		<dt>Links:</dt>
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
				               		<?php endif; ?>
 									<?php if(isset($elementsp['#account']->signature)) :?>
  				               		  <dt>Signature:</dt>
				               		  <dd><?php print $elementsp['#account']->signature; ?></dd>
									<?php endif; ?>
				               	</dl>
			               	</section>
			               	<section class="about-me">
			               	<?php if(isset($elementsp['#account']->field_about_me['und'])) :?>
			               		<h2>About me</h2>
			               		<p>
			               		   <?php print $elementsp['#account']->field_about_me['und'][0]['safe_value']; ?>
			               		</p>
			               		<?php endif; ?>
			               		<a href="<?php print url('user/'.$elements['#account']->uid.'/edit'); ?>" class="btn btn-red" title="Edit your profile">
			               			<span>
			               				Edit your profile <em class="icon-Rightarrow"></em>
			               			</span>
			               		</a>
		               		</section>
		               		<section class="connect">
			               		<h3>Connect for faster login</h3>
			               		<a href="#" class="btn btn-facebook" title="Facebook">
			               			<span>
			               				Facebook <em class="icon-Facebook"></em>
			               			</span>
			               		</a>
			               		<a href="#" class="btn btn-twitter" title="Twitter">
			               			<span>
			               				Twitter <em class="icon-Twitter"></em>
			               			</span>
			               		</a>
			               		<a href="#" class="btn btn-google" title="Google">
			               			<span>
			               				Google <em class="icon-google"></em>
			               			</span>
			               		</a>
		               		</section>
     			               	  
<div class="profile"<?php print $attributes; ?>>
  <?php  print render($user_profile); ?>
</div>
