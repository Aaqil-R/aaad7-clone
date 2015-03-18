<?php
/**
* @file
* migration of topic details
*/

class forumtopicmigration extends articalmigMigration {
	public function __construct ($arguments)
	{	parent::__construct($arguments);
	
		$options = array('track_changes' => 1);
		$this->description = t('Import Topic data from AAA');
		
		//create a source migration		
		
		/* $query = $this->getConnection()->select('migtblthread','tbt');
		$query ->fields('tbt',array('fThreadId'
								,'fTitle'
								,'fText'
								,'fMemberId'
								,'fParentId'
								,'fForumId'
								,'fPosted'));
		$query ->condition('tbt.fParentId', 00000000000, '='); //only getting the thread topic nodes 
		$query->groupBy('tbt.fThreadId');
		$this->source = new MigrateSourceSQL($query);
		 */
		 
		$query = $this->getConnection()->select('migtblthread','tbt');
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

		//$this->addFieldMapping('taxonomy_forums', 'Community Champions' );
		//$this->addFieldMapping('taxonomy_forums:ignore_case')->defaultValue(TRUE);
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
		
			$value=$value+150000;
			return $value;
	 }
	 
/* 	 protected function changeforumid($value){
		
			switch ($value) {
            case 923:		
                $value=98;	//Other issues
                break;
            case 924:
                $value=41;	//Education
                break;
            case 925:
                $value=99;	//Health
                break;
			case 932:
                $value=66;	//Introductions
                break;
			case 933:		
                $value=97;	//Off topic
                break;
			case 934:
                $value=100;	//Events and campaigns
                break;
			case 948:
                $value=103;	//Wherever the private Community Champions area will be
                break;
			case 983:
                $value=101;	//Surveys, studies and research
                break;
			case 986:
                $value=102;	//These posts don’t need to be transferred to new site
                break;
			case 992:
                $value=61;	//Diagnosis
                break;
			case 993:
                $value=81;	//Independence
                break;
			default:
                $value=null;   
            }
            return $value;
	 } */
	 
	 protected function timestampchange($value){
		
			$value=strtotime($value);
			return $value;
	 }
}