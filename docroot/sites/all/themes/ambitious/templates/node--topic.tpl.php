<?php
/**
 * @file
 * Returns the HTML for a node.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728164
 */

/* variables */ 
  
?>
<?php if($view_mode == 'posts_columns'): ?>
<!-- Teaser View of the topic -->
  <section class="text-block">
    <h1><?php print $title; ?></h1>
    <?php print render($content['body']); ?>
    <div class="btn-holder clearfix">
      <a href="#" class="btn btn-gray btn-left" title="Filter by">Filter by</a>
      <a href="#" class="btn btn-green btn-left bt-left" title="Share"><span>Share <em class="icon-Share"></em></span></a>
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
<!-- FULL View of the topic -->
  <section class="visual">
    <div class="img-holder">
      <div class="caption-frame caption-frame-arrows"> 
        <div class="caption">
          <?php if(isset($content['field_main_caption'])):?>
            <h1 class="title"><span><?php print render($content['field_main_caption']['#items'][0]['value']); ?></span></h1>
          <?php endif; ?>
          <?php if(isset($content['field_sub_caption'])):?>
            <span class="text"><?php print render($content['field_sub_caption']['#items'][0]['value']); ?></span>
          <?php endif; ?>
        </div>
      </div>
      <?php if(isset($content['field_featured_image'])):?>
	    <img src="<?php print file_create_url($content['field_featured_image']['#items'][0]['uri']); ?>" alt="<?php print $title; ?>">
	  <?php endif; ?>
    </div>	 
    <?php if(isset($content['field_featured_image_by'])):?>
    <div class="holder">
      <span class="pic-by">© Photo by <a href="#" title="<?php print render($content['field_featured_image_by']['#items'][0]['value']); ?>"><?php print render($content['field_featured_image_by']['#items'][0]['value']); ?></a>.</span>
    </div>
     <?php endif; ?>  
    <?php 
       if (0 < $prev_nid){
    print l('
     <span class="icon-Leftarrow"></span>
        <div class="text-area">
          <span class="title">Previous topic:</span>
          <span class="topic">'.$prev_title.'</span>
        </div>
       ','node/'.$prev_nid.'', array('html' => TRUE, 'attributes' => array('class' => 'btn-perv')));
       }
        ?>  
        
        <?php
        if (0 < $next_nid){
         print l('
        <div class="text-area">
          <span class="title">Next topic:</span>
          <span class="topic">'.$next_title.'</span>
        </div>
        <span class="icon-Rightarrow"></span>','node/'.$next_nid.'', array('html' => TRUE, 'attributes' => array('class' => 'btn-next'))); 
        }
        ?>
         
     
  </section> 
  <!-- Full view ends here -->
<?php endif; ?> 
 
 
 
 
 
 
 
 
 
 
 

 

 
 
 
 
 
 
 
 
 
 
 
 
