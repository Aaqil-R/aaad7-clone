<?php
/**
* @file
* migration of article details
*/

class articalmigration extends articalmigMigration {
	public function __construct ($arguments)
	{	parent::__construct($arguments);
		$this->description = t('Import Ariticals data from AAA');
		
		//create a source migration		
		$query = $this->getConnection()->select('migtblarticle','tba')
		->fields('tba',array('fArticleId'
						,'fObjectId'
						,'fTitle'
						,'fSummary'
						,'fCreated'));
		
		$query->join('migtblarticleaux_coarticlenews','n','tba.fObjectId=1004 and tba.fArticleId=n.newfArticleId');

		$query->addField('n','ArticleBody');

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
        ),
        MigrateDestinationNode::getKeySchema()		
      );
	  
	  //mapping the columns
		
		$this->addFieldMapping('title','fTitle');
		$this->addFieldMapping('body','ArticleBody');
		$this->addFieldMapping('body:format')->defaultValue('full_html');	  
		$this->addFieldMapping('created','fCreated')->callbacks(array($this,'timestampchange'));
	}
	
	protected function timestampchange($value){
		
			$value=strtotime($value);
			return $value;
	 }
}