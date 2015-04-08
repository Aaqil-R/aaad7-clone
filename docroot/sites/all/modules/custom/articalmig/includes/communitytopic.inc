<?php
/**
* @file
* migration of topic details
*/

class communitytopicmigration extends articalmigMigration {
	public function __construct ($arguments)
	{	parent::__construct($arguments);
	
		$options = array('track_changes' => 1);
		$this->description = t('Import Topic data from AAA');
		
		//create a source migration			 
		$query = $this->getConnection()->select('migtblthread2','tbt');
		$query ->fields('tbt',array('fThreadId'
								,'fTitle'
								,'fText'
								,'fMemberId'
								,'fParentId'
								,'fPosted'
								,'fForumid'));
		$query->join('mappingthread','m','tbt.fForumid = m.oldid AND tbt.fParentId = 00000000000 AND tbt.fForumid = 948');
		$query->addField('m','newid');
		$this->source = new MigrateSourceSQL($query);
		
		//destination codes
		
		$this->destination = new MigrateDestinationNode('forum');

		//mapping objects
		
		$this->map = new MigrateSQLMap($this->machineName,
        array(
          'fThreadId' => array(
			'type' => 'int',
			'length'=>11,
			'not null'=>TRUE,
			'description'=>'unique identifier in thread table',
			'alias'=>'tbt',
            )
        ),
        MigrateDestinationNode::getKeySchema()	
      );
	  
	  //mapping the columns
		$this->addFieldMapping('title','fTitle')->callbacks(array($this,'manipulateString'));
		$this->addFieldMapping('nid','fThreadId')->callbacks(array($this,'changenodeid'));							//for the thread ID adding 100 to crate unique ids
		$this->addFieldMapping('is_new')->defaultValue(TRUE);
		$this->addFieldMapping('uid','fMemberId')->callbacks(array($this,'changeuserid'));
		$this->addFieldMapping('body','fText');
		$this->addFieldMapping('body:format')->defaultValue('full_html');
		//$this->addFieldMapping('field_topic','fForumId')->callbacks(array($this,'changeforumid'));

		$this->addFieldMapping('created','fPosted')->callbacks(array($this,'timestampchange'));

		$this->addFieldMapping('taxonomy_forums')->defaultValue(26);
		$this->addFieldMapping('taxonomy_forums:source_type')->defaultValue('tid');
	}
	
	 protected function manipulateString($value){
		if(strlen($value)>255)
		{
			$value=substr($value,0,250);
		}
		return $value;		
	 }
	 
	 protected function changeuserid($value){
		
			$value=$value+100;
			return $value;
	 }
	 
	 protected function changenodeid($value){
		
			$value=$value+600000;
			return $value;
	 }
	 
	 
	 protected function timestampchange($value){
		
			$value=strtotime($value);
			return $value;
	 }
}