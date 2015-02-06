<?php
/**
*@file
*migration of user details
*/

class userupdatemigration extends articalmigMigration {
	public function __construct ($arguments)
	{	parent::__construct($arguments);
		$this->description = t('Update user data from AAA');
		
	
		
		$query = $this->getConnection()->select ('migtbluser', 'tu');
		
		$query->fields('tu',array('fUserId',
								'fNickname',
								'fArea',
								'fBlog',
								'fTwitter',
								'fAdditional'));
		$query->leftjoin('mappinglocation','ma','tu.fArea = ma.OldID');
		$query->addField('ma','NewID');
		
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
		
		$this->addFieldMapping('field_name','fNickname');		
		$this->addFieldMapping('field_location_reference','NewID');
		$this->addFieldMapping('field_location_reference:source_type')->defaultValue('tid');
		$this->addFieldMapping('field_blog','fBlog');
		$this->addFieldMapping('field_twitter','fTwitter');
		$this->addFieldMapping('field_about_me','fAdditional');		
	}
	
	protected function changeuserid($value){
		
			$value=$value+100;
			return $value;
	 }
	 
}