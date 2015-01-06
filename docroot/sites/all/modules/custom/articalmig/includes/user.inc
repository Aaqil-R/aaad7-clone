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
		
		$query = $this->getConnection()->select ('migtbluser', 'tu')
		->fields('tu',array('fUserId','fEmail','fUsername','fPassword'));
		
					//->fields('tu',array('fNickname','fUserId'))
					//->fields('th',array('fMemberId'))
					//$query->joins('tblthread','th','tu.fUserId=th.fMemberId');
		
		$this->source = new MigrateSourceSQL($query);
		
		//destination codes
		
		//$this->destination = new MigrateDestinationNode('People');
		$this->destination = new MigrateDestinationTable('users');
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
                    ),
        ),
        MigrateDestinationNode::getKeySchema()			
      );
	  
	  //mapping the columns
	  $this->addFieldMapping('uid','fUserId');
	  $this->addFieldMapping('name','fUsername');
	  $this->addFieldMapping('mail','fEmail');
	  $this->addFieldMapping('pass','fPassword');
	  
	}
}