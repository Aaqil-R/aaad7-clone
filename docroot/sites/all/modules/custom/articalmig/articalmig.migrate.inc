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
			
			'threads'=>array(
				'class_name'=>'threadmigration',
				'group_name'=>'users',
			),
			
			'articles'=>array(
				'class_name'=>'articalmigration',
				'group_name'=>'users',
			),
		),
	);
}