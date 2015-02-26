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
 
  
?> 
		               		<section class="profile-info">
		               			<?php print render($user_profile['user_picture']); ?>
		               			<?php if(!empty($elements['#account']->name)):?>
  				               	  <h3><?php print $elements['#account']->name; ?></h3>
				               	<?php endif; ?>
				               	<dl> 
				               		<?php if(isset($elements['#account']->field_name['und'])):?>
				               		<dt>Name:</dt>
				               		<dd><?php print $elements['#account']->field_name['und'][0]['safe_value']; ?></dd>
									<?php endif; ?>
                                             <?php if(!empty($elements['#account']->mail)):?>
				               		<dt>Email:</dt>
				               		<dd><?php print $elements['#account']->mail;?></dd>
									<?php endif; ?>
									<?php if(isset($elements['#account']->field_location['und'])):?>
				               		<dt>Location:</dt>
				               		<dd><?php print $elements['#account']->field_location['und'][0]['safe_value'];?></dd>
									<?php endif; ?> 
									
									<?php if(isset($elements['#account']->field_first_name['und'])):?>
				               		<dt>First name:</dt>
				               		<dd><?php print $elements['#account']->field_first_name['und'][0]['safe_value'];?></dd>
									<?php endif; ?> 
									<?php if(isset($elements['#account']->field_last_name['und'])):?>
				               		<dt>Last name:</dt>
				               		<dd><?php print $elements['#account']->field_last_name['und'][0]['safe_value'];?></dd>
									<?php endif; ?> 
									<?php if(isset($elements['#account']->field_migrate_example_gender['und'])):?>
				               		<dt>Gender:</dt>
				               		<dd><?php print $elements['#account']->field_migrate_example_gender['und'][0]['safe_value'];?></dd>
									<?php endif; ?>  
									<?php if(isset($elements['#account']->field_location_reference['und'])):?>
				               		<dt>Location Reference:</dt>
				               		<dd><?php print $elements['#account']->field_location_reference['und'][0]['safe_value'];?></dd>
									<?php endif; ?> 
									<?php if(isset($elements['#account']->field_signature['und'])):?>
				               		<dt>Signature:</dt>
				               		<dd><?php print $elements['#account']->field_signature['und'][0]['safe_value'];?></dd>
									<?php endif; ?> 
									<?php if(isset($elements['#account']->field_avatar_gender['und'])):?>
				               		<dt>Avatar gender:</dt>
				               		<dd><?php print $elements['#account']->field_avatar_gender['und'][0]['safe_value'];?></dd>
									<?php endif; ?> 
									<?php if(isset($elements['#account']->field_avatar_ref['und'])):?>
				               		<dt>Avatar ref:</dt>
				               		<dd><?php print $elements['#account']->field_avatar_ref['und'][0]['safe_value'];?></dd>
									<?php endif; ?> 
									<?php if(isset($elements['#account']->field_thumbnail_ref['und'])):?>
				               		<dt>Thumbnail Ref:</dt>
				               		<dd><?php print $elements['#account']->field_thumbnail_ref['und'][0]['safe_value'];?></dd>
									<?php endif; ?> 

				               		<dt>No. of posts:</dt>
				               		<dd>92</dd>
                                             <?php if(isset($elements['#account']->field_blog['und']) || isset($elements['#account']->field_twitter['und'])): ?>
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
 									<?php if(!empty($elements['#account']->signature)) :?>
  				               		  <dt>Signature:</dt>
				               		  <dd><?php print $elements['#account']->signature; ?></dd>
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
			               		<a href="<?php print url('user/'.$elements['#account']->uid.'/edit'); ?>" class="btn btn-red" title="Edit your profile">
			               			<span>
			               				Edit your profile <em class="icon-Rightarrow"></em>
			               			</span>
			               		</a>
		               		</section>
		               		<section class="connect">  
			               		<h3>Connect for faster login</h3>
			               		<?php 
			               		$data="<span>Facebook<em class='icon-Facebook'></em></span>";
								$url="/hybridauth/window/Facebook?destination=user/".$userid."&destination_error=user/".$userid;
								print l($data, $url, array( 'attributes' => (array('class' => array('btn btn-facebook'))),'html' => TRUE,'external' => TRUE) );
			               		$data="<span>Twitter<em class='icon-Twitter'></em></span>";
								$url='/hybridauth/window/Twitter?destination=user/'.$userid.'&destination_error=user/'.$userid;
								print l($data, $url, array( 'attributes' => (array('class' => array('btn btn-twitter'))),'html' => TRUE,'external' => TRUE) );
								$data="<span>Google<em class='icon-google'></em></span>";
								$url="/hybridauth/window/Google?destination=user/".$userid."&destination_error=user/".$userid;
								print l($data, $url, array( 'attributes' => (array('class' => array('btn btn-google'))),'html' => TRUE,'external' => TRUE) );
			               		?>
			             
		               		</section>
     			               	  
<div class="profile"<?php print $attributes; ?>>
  <?php  print render($user_profile); ?>
</div>
