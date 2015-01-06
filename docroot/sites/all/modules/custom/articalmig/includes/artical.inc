<?php
/**
* @file
* migration of artical details
*/

class articalmigration extends articalmigMigration {
	public function __construct ($arguments)
	{	parent::__construct($arguments);
		$this->description = t('Import Ariticals data from AAA');
		
		//create a source migration		
		$query = $this->getConnection()->select('migtblarticle','tba')
		->fields('tba',array('fArticleId','fObjectId','fTitle','fSummary'));
	
		$this->source = new MigrateSourceSQL($query);
		
		//destination codes
		
		$this->destination = new MigrateDestinationNode('article');
		
		//mapping objects
		
		$this->map = new MigrateSQLMap($this->machineName,
        array(
          'fArticleId' => array(
			'type' => 'int',
			'length'=>11,
			//'not null'=>TRUE,
			'description'=>'composite identifier in article table',
            ),
		  'fObjectId' => array(
			'type' => 'int',
			'length'=>8,
			//'not null'=>TRUE,
			'description'=>'composite identifier in article table',
            ),
        ),
        MigrateDestinationNode::getKeySchema()		
      );
	  
	  //mapping the columns
		
		$this->addFieldMapping('title','fTitle');
		$this->addFieldMapping('body','fSummary');	  
	}
}