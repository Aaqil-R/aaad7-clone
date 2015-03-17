<?php
$i = 1;
$ourfields = array('title', 'body', 'last_comment_timestamp', 'name', 'comment_count', 'counter');
$counter = strip_tags($fields['counter']->content); 
$ccount = getcommentcount_past2week($row->nid);
dpm($row); 
?>
 
<ul class="table-row">
		<li class="col01">
		<?php if ($ccount > 5): ?>
		   <span class="icon-Hottopic"></span>
		<?php endif; ?>
		<?php if (intval($counter) <= 3): ?>
		   <span class="icon-Featured"></span>
		<?php endif; ?>
		<h6><?php print $fields['title']->content;?></h6>
		</li>
		<li class="col02"> 
			<span class="num"><?php print $fields['comment_count']->content; ?></span>
			<span class="text">replies</span>
		</li>
		<li class="col03">
		<dl>
     		<dt>Created by</dt>
			<dd><?php print $fields['name']->content; ?></dd>
			<dt>Last reply</dt>
			<dd><time datetime="<?php print date('Y-m-d H:i:s',$fields['last_comment_timestamp']->raw);?>" class="date"><?php print $fields['last_comment_timestamp']->content; ?></time></dd>
		</dl>
		</li>
<?php foreach ($fields as $id => $field): ?>
<?php if (!in_array($id, $ourfields)): ?>
	  <?php if (!empty($field->separator)): ?>
	    <?php print $field->separator; ?>
	  <?php endif; ?>
	  <?php print $field->wrapper_prefix; ?>
	    <?php print $field->label_html; ?>
	    <?php print $field->content; ?>
	  <?php print $field->wrapper_suffix; ?>
  <?php endif;?>
<?php endforeach; ?>
</ul>
