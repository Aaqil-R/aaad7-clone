<?php
$i = 1;
$ourfields = array('title', 'last_updated', 'name', 'comment_count', 'counter');
?>
<ul class="table-row">
		<li class="col01">
		<?php if ($fields['comment_count']->raw > 5): ?>
		   <span class="icon-Hottopic"></span>
		<?php endif; ?>
		<?php if ($fields['counter']->raw <= 3 && $fields['comment_count']->raw <= 5): ?>
		   <span class="icon-Featured"></span>
		<?php endif; ?>
		<?php print $fields['title']->content; ?>
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
			<dd><time datetime="<?php print date('Y-m-d H:i:s',$fields['last_updated']->raw);?>" class="date"><?php print $fields['last_updated']->content; ?></time></dd>
		</dl>
		</li>
<?php foreach ($fields as $id => $field): ?>
<?php if (!in_array($id, $ourfields)): ?>
	  <?php if (!empty($field->separator)): ?>
	    <?php print $field->separator; ?>
	  <?php endif; ?>
	<?php  dpm($id);?>
	  <?php print $field->wrapper_prefix; ?>
	    <?php print $field->label_html; ?>
	    <?php print $field->content; ?>
	  <?php print $field->wrapper_suffix; ?>
  <?php endif;?>
<?php endforeach; ?>
</ul>
