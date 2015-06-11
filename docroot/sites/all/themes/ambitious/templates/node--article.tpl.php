<?php
/**
* @file
* Returns the HTML for a node.
*
* Complete documentation for this file is available online.
* @see https://drupal.org/node/1728164
*/

/* variables */ 

$node = node_load(arg(1)); 
$links = sharethis_node_view($node, 'full', 'en');
$base_path = '/';

global $user;
$user_fields = user_load($user->uid);
$first_name = field_get_items('user', user_load($node->uid), 'field_first_name');

?> 
<!-- contain main informative part of the site -->
<section class="article node-<?php print $node->nid; ?> <?php print $classes; ?> clearfix"<?php print $attributes; ?>>
	<div class="article-left">
		<section class="article-left-holder">
			<!-- article -->
			<article>
				<header>
					<h1><?php print $title; ?></h1>
					<?php if (!empty($content['field_standfirst'])) : ?> 
					<h2 class="subheading"><?php print $content['field_standfirst']['#items'][0]['value']; ?></h2>
				<?php endif; ?> 
				<div class="article-info">
					<?php if (!empty($content['field_featured_author'])): ?>
					<?php print render($content['field_featured_author']); ?>
				<?php endif; ?>	                 		
				<?php print flag_create_link('bookmarks', $node->nid); ?>
				<div class="topic-share"><?php print $node->content['sharethis']['#value']; ?></div>
			</div>
		</header>
		<?php if (!empty($content['field_featured_image'])): ?>
		<section class="visual">
			<div class="img-holder">
				 <?php if($node->field_infographic_as_lightbox['und'][0]['value'] == 1){
			          print render($content['field_featured_image']); 
			        }else{ 
			          $url = image_style_url('width-684',$node->field_featured_image['und'][0]['uri']);
			          print "<img src='".$url."' />";
			        }
			  ?>
			</div>
			<div class="holder">
				<?php if (!empty($content['field_image_caption'])): ?>
				<span class="pic-caption"><?php print $content['field_image_caption']['#items'][0]['value']; ?></span>
			<?php endif; ?>
			<?php if (!empty($content['field_image_credit'])): ?>
			<span class="pic-by"><?php print t('&copy; Photo by');?> <?php print $content['field_image_credit']['#items'][0]['value']; ?></span>
		<?php endif; ?>
	</div> 
</section>
<?php endif; ?>
<?php print render($content['body']); ?>
<footer>
	<div class="article-info">
		<div class="topic-share"><?php print $node->content['sharethis']['#value']; ?></div>
		<div class="article-updated">

			<strong><?php print t('Last updated:') ?> <time pubdate="pubdate"><?php print date('j F Y', $node->changed);?></time></strong>
			<div class="article-tags">
				<span>Related topics: </span>
				<div class="field-items"><?php print ambitious_gettopics($node); ?></div>
				<span>Tags:</span>
				<div class="field-items"><?php print ambitious_gettags($node); ?></div>
			</div>
		</div>
	</footer>
	<!-- comment columns -->
	<?php //dpr($node) ?>		
	<?php if ($user->uid) :?>
	<?php print render($content['comments']); ?>
	<?php else : ?>
		<?php if ($node->comment == 2) : ?>
			<section class="comment-block">
				<h4><a href="/user/login?destination=node/<?php print $node->nid ; ?>#comment-form" title="<?php print t('Add a new comment'); ?>"><?php print t('Add a new comment'); ?></a></h4>
			</section>
		<?php endif; ?>
	<?php endif; ?>
	</article>	              
	</section>		      
	</div>
	<div class="article-right">
		<?php print render($region['sidebar_second']); ?>
	</div>
</section>
