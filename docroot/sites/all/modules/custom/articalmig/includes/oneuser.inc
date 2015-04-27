<?php
/**
*@file
*migration of new user details from the new dumb
*/

class onenewusermigration extends articalmigMigration {
	public function __construct ($arguments)
	{	parent::__construct($arguments);
		$options = array('track_changes' => 1);
		$this->description = t('Import initial user data from AAA');

		$query = $this->getConnection()->select('migtbluser2','tu');
		$query ->fields('tu',array('fUserId'
								,'fEmail'
								,'fUsername'
								,'fPassword'
								,'fDate'
								,'fForename'
								,'fSurname'
								,'fSignature'
								,'fAvatarGender'
								,'fAvatar'
								,'fThumbnail'
								,'fTypeOfPerson'
								,'fNickname'
								,'fBlog'
								,'fTwitter'
								,'fAdditional'));
		$query ->condition('tu.fUserId', 16340, '='); //only getting the comment topic nodes 
		//$query->groupBy('tbt.fThreadId');

//		$query = db_select('migtbluser2', 'tu');
//		$query->addField('tu','fUserId');
//		$query->addField('tu','fEmail');
//		$query->addField('tu','fUsername');
//		$query->addField('tu','fPassword');
//		$query->addField('tu','fDate');
//		$query->addField('tu','fForename');
//		$query->addField('tu','fSurname');
//		$query->addField('tu','fSignature');
//		$query->addField('tu','fAvatarGender');
//		$query->addField('tu','fAvatar');
//		$query->addField('tu','fThumbnail');
//		$query->addField('tu','fTypeOfPerson');		
//		$query->addField('tu','fNickname');
//		$query->addField('tu','fBlog');
//		$query->addField('tu','fTwitter');
//		$query->addField('tu','fAdditional');
						
		$this->source = new MigrateSourceSQL($query);
		
		//destination codes
		$this->destination = new MigrateDestinationUser();
		
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
				)
			),
        MigrateDestinationNode::getKeySchema()			
		);
	  
		//mapping the columns
		$this->addFieldMapping('uid','fUserId')->callbacks(array($this,'changeuserid'));
		$this->addFieldMapping('name','fUsername');
		$this->addFieldMapping('mail','fEmail');
		$this->addFieldMapping('pass','fPassword');
		$this->addFieldMapping('is_new',NULL)->defaultValue(TRUE);
		$this->addFieldMapping('created','fDate')->callbacks(array($this,'timestampchange'));
		$this->addFieldMapping('field_first_name','fForename');
		$this->addFieldMapping('field_last_name','fSurname');
		$this->addFieldMapping('field_signature','fSignature');
		$this->addFieldMapping('field_avatar_gender','fAvatarGender');
		$this->addFieldMapping('field_avatar_ref','fAvatar');
		$this->addFieldMapping('field_thumbnail_ref','fThumbnail');		
		$this->addFieldMapping('field_type_of_user','fTypeOfPerson');
		$this->addFieldMapping('field_name','fNickname');
		$this->addFieldMapping('field_blog','fBlog');
		$this->addFieldMapping('field_twitter','fTwitter');
		$this->addFieldMapping('field_about_me','fAdditional');
	}
	
	protected function changeuserid($value){
		
			$value=$value+10000;
			return $value;
	 }
	 
	 protected function timestampchange($value){
		
			$value=strtotime($value);
			return $value;
	 }
}