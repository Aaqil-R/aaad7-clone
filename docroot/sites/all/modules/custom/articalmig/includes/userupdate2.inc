<?php
/**
*@file
*migration of user details
*/

class userupdatemigration2 extends articalmigMigration {
	public function __construct ($arguments)
	{	parent::__construct($arguments);
		$this->description = t('Update user data 2 from AAA');
		
	
		
		$query = $this->getConnection()->select ('migtbluser', 'tu');
		
		$query->fields('tu',array('fUserId',
								'fSignature',
								'fAvatarGender',
								'fAvatar',
								'fThumbnail'));

		$this->source = new MigrateSourceSQL($query);
		
		//destination codes
		$this->destination = new MigrateDestinationUser();
		
		//mapping objects
		$this->map = new MigrateSQLMap(
			$this->machineName,
			array(
				'fUserId' => array(
					'type' => 'int',
					'length'=>11,
					'not null'=>TRUE,
					'description'=>'unique identifier in user table',
					'alias'=>'tu', 
				)
			),
        MigrateDestinationNode::getKeySchema()			
		);
		$this->systemOfRecord = Migration::DESTINATION;
		//mapping the columns
		$this->addFieldMapping('uid','fUserId')->callbacks(array($this,'changeuserid'));
		
		$this->addFieldMapping('field_signature','fSignature');
		$this->addFieldMapping('field_avatar_gender','fAvatarGender');
		$this->addFieldMapping('field_avatar_ref','fAvatar');
		$this->addFieldMapping('field_thumbnail_ref','fThumbnail');		
	}
	
	protected function changeuserid($value){
		
			$value=$value+100;
			return $value;
	 }
	 
}