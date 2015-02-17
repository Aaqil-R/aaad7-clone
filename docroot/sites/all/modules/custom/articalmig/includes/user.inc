<?php
/**
*@file
*migration of user details
*/

class usermigration extends articalmigMigration {
	public function __construct ($arguments)
	{	parent::__construct($arguments);
		$options = array('track_changes' => 1);
		$this->description = t('Import initial user data from AAA');
		
		//create a source migration		
		
		$query = $this->getConnection()->select ('migtbluser', 'tu');
//		$query->fields('tu',array('fUserId','fEmail','fUsername','fPassword','fDate'));
		
		$query->fields('tu',array('fUserId',
								'fEmail',
								'fUsername',
								'fPassword',
								'fDate',
								'fForename',
								'fSurname'));
								
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
	  
		//mapping the columns
		$this->addFieldMapping('uid','fUserId')->callbacks(array($this,'changeuserid'));
		$this->addFieldMapping('name','fUsername');
		$this->addFieldMapping('mail','fEmail');
		$this->addFieldMapping('pass','fPassword');
		$this->addFieldMapping('is_new',NULL)->defaultValue(TRUE);
		$this->addFieldMapping('created','fDate')->callbacks(array($this,'timestampchange'));
		$this->addFieldMapping('field_first_name','fForename');
		$this->addFieldMapping('field_last_name','fSurname');		
	}
	
	protected function changeuserid($value){
		
			$value=$value+100;
			return $value;
	 }
	 
	 protected function timestampchange($value){
		
			$value=strtotime($value);
			return $value;
	 }
}