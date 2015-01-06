<?php
/**
* @file
* migration of artical details
*/

class threadmigration extends articalmigMigration {
	public function __construct ($arguments)
	{	parent::__construct($arguments);
		$this->description = t('Import Threads data from AAA');
		
		//create a source migration		
		
		$query = $this->getConnection()->select('migtblthread','tbt')
			->fields('tbt',array('fThreadId'
								,'fTitle'
								,'fAuthor'
								,'fText'
								,'fPosted'));
								
		//$query = $this->getConnection()->select('migtblthread','tbt')
		//->fields('tbt',array('fThreadId','fTitle','fAuthor','fText','fPosted'));
		
		$this->source = new MigrateSourceSQL($query);
		
		//destination codes
		
		$this->destination = new MigrateDestinationNode('forum_discussion');
		
		//mapping objects
		
		$this->map = new MigrateSQLMap($this->machineName,
        array(
          'fThreadId' => array(
			'type' => 'int',
			'length'=>11,
			//'not null'=>TRUE,
			'description'=>'unique identifier in thread table',
			//'alias'=>'tbt', 
            ),
        ),
        MigrateDestinationNode::getKeySchema()	
      );
	  //testing codes
	  //$timestamp = strtotime('fPosted');
	  
	  //mapping the columns
		
		$this->addFieldMapping('title','fTitle');
		$this->addFieldMapping('body','fText');
		$this->addFieldMapping('body:format')->defaultValue('full_html');
		$this->addFieldMapping('field_published_by_discussion','fAuthor');
		
		//$this->addFieldMapping('field_published_on_discussion','fPosted');
		
		//$this->addFieldMapping('created','fPosted');	
		//$this->addFieldMapping('field_published_on_discussion',$timestamp);	
		
		//$this->addFieldMapping('created')->defaultValue(time());	
	}
}