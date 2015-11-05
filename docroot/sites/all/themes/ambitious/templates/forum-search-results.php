<li class="<?php print $classes; ?> post views-row <?php print $attributes; ?>"> 
   <div class="forum-text">						
    <div class="forum-left"> 
     <div class="image-holder">
        <?php if($user->picture != '') { ?>
	   <img src = "<?php print $img;?>">
        <?php }else {?>
	   <img src="<?php print $themeurl;?>/images/profile-picture-1.jpg" alt="image description" />
        <?php } ?>
     </div>
     
     <cite>by </br></br><strong><a href="/user<?php print url($user->uid)?>" title="View user profile." class="username"><?php print $name?></a></strong></cite>
    <time pubdate="<?php print format_date($result['node']->created); ?>"><?php print format_date($result['node']->created); ?></time>  
   </div>
   <div class="info add forum-right">
    <h3 class="title"<?php print $title_attributes; ?>>
     <a href="<?php print $url; ?>"><?php print $title; ?></a>
    </h3>
    <?php if ($snippet): ?>
      <p class="search-snippet"<?php print $content_attributes; ?><?php print $snippet; ?></p>
    <?php endif; ?>
   </div>
  </div>
  <div class="footer" style="margin-top:15px;">
  <?php
    global $user;
if ( 
$user->uid ) { ?>
<ul class="links inline"><li class="comment-add first last"><a href="<?php print $url; ?>#comment-form" title="Share your thoughts and opinions related to this posting." class="btn btn-right">Reply</a></li>
<?php }
else { ?>

   <ul class="links inline"><li class="comment-add first last"><a href="/user/login?destination=<?php print $url; ?>" title="Share your thoughts and opinions related to this posting." class="btn btn-right">Reply</a></li>
   </ul>
   <?php 
}
  ?>
 </div>  
</li>