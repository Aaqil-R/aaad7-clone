<?php 
abstract class articalmigMigration extends Migration {
public function __construct($arguments) {
    parent::__construct($arguments);

    $this->team = array(
      new MigrateTeamMember('SmallAxe', 'SmallAxe@example.com',
                            t('Product Owner')),
      new MigrateTeamMember('Amalan', 'amalan@example.com',
                            t('Implementor')),
    );
  }
  
  //define the database connection
  public function getConnection($connection = 'default'){
	return Database::getConnection('default',$connection);
  }
}