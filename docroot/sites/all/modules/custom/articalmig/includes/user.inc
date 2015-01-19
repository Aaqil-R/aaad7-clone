<?php
/**
*@file
*migration of user details
*/

class usermigration extends articalmigMigration {
	public function __construct ($arguments)
	{	parent::__construct($arguments);
		$this->description = t('Import user data from AAA');
		
		//create a source migration		
		
		$query = $this->getConnection()->select ('migtbluser', 'tu');
		$query->fields('tu',array('fUserId','fEmail','fUsername','fPassword','fDate'));

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