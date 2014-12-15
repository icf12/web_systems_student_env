<?php

use Phinx\Migration\AbstractMigration;

class Exposition extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     *
     * Uncomment this method if you would like to use it.
     *
    public function change()
    {
    }
    */
    
    /**
     * Migrate Up.
     */
 public function up()
    {
      $sql = <<<SQL
      CREATE TABLE IF NOT EXISTS `exposition` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  `description` TEXT NOT NULL,
  `begin_date` DATETIME NOT NULL,
  `off_date` DATETIME NOT NULL,
  `location` VARCHAR(155) NOT NULL,
  `room_number` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;
SQL;
      $this->execute($sql);      
    }

    /**
     * Migrate Down.
     */
    public function down()
    {

    }
}