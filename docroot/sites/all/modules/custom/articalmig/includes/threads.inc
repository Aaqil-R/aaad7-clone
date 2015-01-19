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
		
		$query = $this->getConnection()->select('migtblthread','tbt');
		$query ->fields('tbt',array('fThreadId'
								,'fTitle'
								,'fText'
								,'fMemberId'
								,'fParentId'
								,'fPosted'));
		$query ->condition('tbt.fParentId', 00000000000, '='); //only getting the thread topic nodes 
		$query->groupBy('tbt.fThreadId');
		$this->source = new MigrateSourceSQL($query);
		
		//destination codes
		
		$this->destination = new MigrateDestinationNode('forum_discussion');

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
		$this->addFieldMapping('nid','fThreadId');
		//->callbacks(array($this,'changenodeid'));							//for the thread ID adding 100 to crate unique ids
		$this->addFieldMapping('is_new')->defaultValue(TRUE);
		//$this->addFieldMapping('title','fTitle');
		$this->addFieldMapping('uid','fMemberId')->callbacks(array($this,'changeuserid'));
		$this->addFieldMapping('body','fText');
		$this->addFieldMapping('body:format')->defaultValue('full_html');
		$this->addFieldMapping('created','fPosted')->callbacks(array($this,'timestampchange'));
	}
	
	 protected function manipulateString($value){
		if(strlen($value)>255)
		{
			$value=substr($value,0,250);
			return $value;
		}
	 }
	 
	 protected function changeuserid($value){
		
			$value=$value+100;
			return $value;
	 }
	 
	 protected function changenodeid($value){
		
			$value=$value+150;
			return $value;
	 }
	 
	  protected function timestampchange($value){
		
			$value=strtotime($value);
			return $value;
	 }
}