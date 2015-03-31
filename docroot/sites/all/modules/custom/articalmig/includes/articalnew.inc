<?php
/**
* @file
* migration of article details
*/

class articalnewmigration extends articalmigMigration {
	public function __construct ($arguments)
	{	parent::__construct($arguments);
		$options = array('track_changes' => 1);
		$this->description = t('Import Ariticals data from AAA');
		
		//create a source migration		
		$query = $this->getConnection()->select('miggtblarticle','tba')
		->fields('tba',array('fArticleId'
						,'fObjectId'
						,'fTitle'
						,'fSummary'
						,'fCreated'
						,'category'));
		
		$query->join('miggtblarticleaux_coarticlenews','n','tba.fObjectId=1004 and tba.fArticleId=n.newfArticleId');

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
		//mapping the id
		$this->addFieldMapping('nid','fArticleId')->callbacks(array($this,'changearticleid'));
		$this->addFieldMapping('title','fTitle');
		$this->addFieldMapping('body','ArticleBody');
		$this->addFieldMapping('body:format')->defaultValue('full_html');	
		$this->addFieldMapping('field_tags','category');
		$this->addFieldMapping('field_tags:source_type')->defaultValue('tid');  
		$this->addFieldMapping('created','fCreated')->callbacks(array($this,'timestampchange'));
		$this->addFieldMapping('field_standfirst','fSummary');
		$this->addFieldMapping('status')->defaultValue(1);
		$this->addFieldMapping('is_new')->defaultValue(TRUE);
		$this->addFieldMapping('promote')->defaultValue(1);
	}
	
	protected function timestampchange($value){
		
			$value=strtotime($value);
			return $value;
	 }


	protected function changearticleid($value){
		
			$value=$value+300000;
			return $value;
	}
	 
}