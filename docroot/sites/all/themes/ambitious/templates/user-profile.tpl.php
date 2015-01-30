 
		               		<section class="profile-info">
		               			<?php print render($user_profile['user_picture']); ?>
		               			<?php if(!empty($elements['#account']->name)):?>
  				               	  <h3><?php print $elements['#account']->name; ?></h3>
				               	<?php endif; ?>
				               	<dl> 
				               		<?php if(!empty($elements['#account']->field_name)):?>
				               		<dt>Name:</dt>
				               		<dd><?php print $elements['#account']->field_name['und'][0]['safe_value']; ?></dd>
									<?php endif; ?>
                                             <?php if(!empty($elements['#account']->mail)):?>
				               		<dt>Email:</dt>
				               		<dd><?php print $elements['#account']->mail;?></dd>
									<?php endif; ?>
									<?php if(!empty($elements['#account']->field_location)):?>
				               		<dt>Location:</dt>
				               		<dd><?php print $elements['#account']->field_location['und'][0]['safe_value'];?></dd>
									<?php endif; ?> 

				               		<dt>No. of posts:</dt>
				               		<dd>92</dd>
                                             <?php if(!empty($elements['#account']->field_blog || $elements['#account']->field_twitter)): ?>
				               		<dt>Links:</dt>
				               		<dd>
				               			<strong>
				               			 <?php if(!empty($elements['#account']->field_blog)): ?>
				               			  <?php print l('Blog', $elements['#account']->field_blog['und'][0]['url'], array('absolute' => TRUE,'attributes' => array('target'=>'_blank'))); ?> 
				               			  <?php endif; ?>
				               			  <?php if(!empty($elements['#account']->field_blog && $elements['#account']->field_twitter)): ?> / <?php endif; ?>
				               			  <?php if(!empty($elements['#account']->field_twitter)): ?>
				               			  <?php print l('Twitter', $elements['#account']->field_twitter['und'][0]['url'], array('absolute' => TRUE,'attributes' => array('target'=>'_blank'))); ?> 
				               			  <?php endif; ?>
				               			</strong>
				               		</dd>
				               		<?php endif; ?>
 									<?php if(!empty($elementsp['#account']->signature)) :?>
  				               		  <dt>Signature:</dt>
				               		  <dd><?php print $elementsp['#account']->signature; ?></dd>
									<?php endif; ?>
				               	</dl>
			               	</section>
			               	<section class="about-me">
			               	<?php if(!empty($elementsp['#account']->field_about_me)) :?>
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
     			               	  
<div class="element-invisible profile"<?php print $attributes; ?>>
  <?php print render($user_profile); ?>
</div>
