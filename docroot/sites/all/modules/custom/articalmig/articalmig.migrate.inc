<?php

/**
* Implements hook_migrate_api
*/

function articalmig_migrate_api()
{	return array(
		'api' => 2,
		'groups'=>array(
			'users'=>array(
				'title'=>t('AAA Migration'),
			),
		),

		'migrations'=>array(
			'users'=>array(
				'class_name'=>'usermigration',
				'group_name'=>'users',
			),
			
			'comments'=>array(
				'class_name'=>'commentmigration',
				'group_name'=>'users',
			),
			
			'articles'=>array(
				'class_name'=>'articalmigration',
				'group_name'=>'users',
			),
			
			'topics'=>array(
				'class_name'=>'topicmigration',
				'group_name'=>'users',
			),
			
			'userupdate'=>array(
				'class_name'=>'userupdatemigration',
				'group_name'=>'users',
			),
		),
	);
}