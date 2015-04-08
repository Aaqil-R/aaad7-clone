<?php
/**
* @file
* migration of comments details
*/

class communitycommentmigration extends articalmigMigration {
	public function __construct ($arguments)
	{	parent::__construct($arguments);
		$options = array('track_changes' => 1);
		$this->description = t('Import comments of threads data from AAA');
		
		//create a source migration		
		
		$query = $this->getConnection()->select('migtblthread2','tbt');
		$query ->fields('tbt',array('fThreadId'
								,'fTitle'
								,'fAuthor'
								,'fMemberId'
								,'fText'
								,'fParentId'
								,'fPosted'
								,'fForumid'));

		$query->join('mappingthread','m','tbt.fForumid = m.oldid AND tbt.fParentId != 00000000000 AND tbt.fForumid = 948');

		//only getting the comment topic nodes 
		$query->groupBy('tbt.fThreadId');	
		//$query ->orderBy('tbt.fThreadId');
		
		$this->source = new MigrateSourceSQL($query);
		
		//destination codes
		
		$this->destination = new MigrateDestinationComment('comment_node_forum');
		
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
        MigrateDestinationComment::getKeySchema()	
      );
  
	  //mapping the columns
		//$this->addFieldMapping('cid','fThreadId');//->callbacks(array($this,'changenodeid'));			//not needed as comments can have new node numbers
		$this->addFieldMapping('subject','fTitle')->callbacks(array($this,'manipulateString'));			//comment Subject
		$this->addFieldMapping('comment_body','fText');													//comment 
		$this->addFieldMapping('comment_body:format')->defaultValue('full_html');
		$this->addFieldMapping('name','fAuthor');														//commenting person
		$this->addFieldMapping('uid','fMemberId')->callbacks(array($this,'changeuserid'));				//Person ID
		$this->addFieldMapping('nid','fParentId')->callbacks(array($this,'changeparentid'));			//connecting to the thread using this
		$this->addFieldMapping('created','fPosted')->callbacks(array($this,'timestampchange'));
		//$this->removeFieldMapping('path');
		//$this->removeFieldMapping('pathauto');
	}
	
	protected function manipulateString($value){
		/* if(strlen($value)<1)
		{
			$value='';
			return $value;
		}
		else */
		if(strlen($value)>=63)
		{
			$value=substr($value,0,62);
		}
		return $value;
	 }
	 
	 protected function changeuserid($value){
		
			$value=$value+100;
			return $value;
	 }
	 
	 
	 protected function changeparentid($value){
		
			$value=$value+600000;
			return $value;
	 }
	 
	 protected function timestampchange($value){
		
			$value=strtotime($value);
			return $value;
	 }
}