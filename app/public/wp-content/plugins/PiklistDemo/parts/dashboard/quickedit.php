<?php 

/*
Title: Quick Edit Post/Page
Capability: edit_dashboard
*/

$pld_list = array(
	array(
		'title' => 'Sample Page',
		'link' => 'http://wpplugindev.local/wp-admin/post.php?post=2&action=edit'
	),
	array(
		'title' => 'Aut suscipit numquam aperiam asperiores',
		'link' => 'http://wpplugindev.local/wp-admin/post.php?post=143&action=edit'
	),
	array(
		'title' => 'Test Post',
		'link' => 'http://wpplugindev.local/wp-admin/post.php?post=10&action=edit'
	),
);
?>


<ul>
	<?php
	foreach ($pld_list as $pld_item) {
		printf("<li><a href='%s'>%s</a></li>",$pld_item['link'],$pld_item['title']);
	}
	?>
</ul>