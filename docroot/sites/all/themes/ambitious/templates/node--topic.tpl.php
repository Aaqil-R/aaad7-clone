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
?>  
<?php if($view_mode == 'posts_columns'): ?>
<!-- Teaser View of the topic -->
  <section class="text-block">
    <h1><?php print $title; ?></h1>
    <?php print render($content['body']);?>
    <div class="btn-holder clearfix">
      <a href="#" class="btn btn-gray btn-left" title="Filter by">Filter by</a>
      <div class="topic-share"><?php print $node->content['sharethis']['#value']; ?></div>
    </div>
  </section>	 
    <!-- Teaser ends here -->				
<?php else: ?>

<?php
  // Get the previous node id
  $prev_nid = prev_next_nid($nid, 'prev');
  // Get the previous node id
  $next_nid = prev_next_nid($nid, 'next');  
  if(0 < $prev_nid){
    // Get the previous node title
    $prev_title = node_load($prev_nid);
    $prev_title = $prev_title->title;
    $prev_title = truncate_utf8($prev_title,15, FALSE, TRUE, 3);  
  }
  if(0 < $next_nid){
    // Get the previous node title
    $next_title = node_load($next_nid);    
    $next_title = $next_title->title;    
  $next_title = truncate_utf8($next_title,15, FALSE, TRUE, 3);
  } 
?>
  <section class="header_banner">
     <div class="banner_text_main">
      <div class="banner_nav visual">
          <?php 
            if (0 < $prev_nid){
              print l('<span class="icon-Leftarrow"></span><div class="text-area"><span class="title">Previous topic:</span>          <span class="topic">'.$prev_title.'</span></div>','node/'.$prev_nid.'', array('html' => TRUE, 'attributes' => array('class' => 'btn-perv')));
       }
        ?>  
        
        <?php
        if (0 < $next_nid){
         print l('<div class="text-area"><span class="title">Next topic:</span><span class="topic">'.$next_title.'</span></div>        <span class="icon-Rightarrow"></span>','node/'.$next_nid.'', array('html' => TRUE, 'attributes' => array('class' => 'btn-next'))); 
        }
        ?>
        </div>
        <div class="banner_text_inner" >
          <?php if(isset($content['field_main_caption'])):?>
            <h2 class="banner_text"><?php print render($content['field_main_caption']['#items'][0]['value']); ?></h2>
          <?php endif; ?>
          <br>
          <?php if(isset($content['field_sub_caption'])):?>
            <h3 class="banner_sub_text"><?php print render($content['field_sub_caption']['#items'][0]['value']); ?></h3>
          <?php endif; ?> 
        </div>  
      </div> 
    <div class="header_image">
      <div class="banner_desktop">
        <img src="<?php print image_style_url('banner_1080',$content['field_featured_image']['#items'][0]['uri']); ?>" />
      </div>
      <div class="banner_mobile">
        <img src="<?php print image_style_url('banner-mobile',$content['field_featured_image_mobile']['#items'][0]['uri']); ?>" />
      </div> 
    </div>
    <?php if(isset($content['field_featured_image_by'])):?>
     <div class="pic-by"><?php print t('© Photo by'); ?> <?php print render($content['field_featured_image_by']['#items'][0]['value']); ?></div>
   <?php endif; ?> 
  </section>
  
<?php endif; ?>  
  
 
 
 
 
 
 
 

 

 
 
 
 
 
 
 
 
 
 
 
 
