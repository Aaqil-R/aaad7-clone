<?php
/**
* @file
* migration of article details
*/

class articalimagemigration extends articalmigMigration {
	public function __construct ($arguments)
	{	parent::__construct($arguments);
		$options = array('track_changes' => 1);
		$this->description = t('Import Ariticals data from AAA');
		
		//create a source migration		
		$query = $this->getConnection()->select('migtblarticleaux_coarticlenews2','tba')
		->fields('tba',array('fArticleId'
						,'finalimage'));
		$query ->condition('tba.finalimage', ' ', '!=');

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
		
		$sour = file_default_scheme() . '://' . 'articleoldimages';
		$dest = file_default_scheme() . '://' . 'articleimages';
		

	  $this->systemOfRecord = Migration::DESTINATION;
		$this->addFieldMapping('nid','fArticleId')->callbacks(array($this,'changearticleid'));
		$this->addFieldMapping('field_featured_image','finalimage');
		$this->addFieldMapping('field_featured_image:source_dir')->defaultValue($sour);
		$this->addFieldMapping('field_featured_image:destination_dir')->defaultValue($dest);
		$this->addFieldMapping('field_featured_image:destination_file','finalimage');
		$this->addFieldMapping('field_featured_image:title','finalimage');
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