<?php
/**
*@file
*migration of user details
*/

class userupdatemigration3 extends articalmigMigration {
	public function __construct ($arguments)
	{	parent::__construct($arguments);
		$this->description = t('Update user datas with signature, gender, avatar ref, thumbnail ref from AAA');
		
	
		
		$query = $this->getConnection()->select ('migtbluser', 'tu');
		
		$query->fields('tu',array('fUserId',
								'fTypeOfPerson'));
		//$query->leftjoin('migtblrole','mt','tu.fTypeOfPerson = mt.fId');
		//$query->addField('mt','fName');
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
		//$this->addFieldMapping('field_type_of_user','fName');
		$this->addFieldMapping('field_type_of_user','fTypeOfPerson');
	}
	
	protected function changeuserid($value){
		
			$value=$value+100;
			return $value;
	 }
	 
}