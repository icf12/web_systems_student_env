<?php

use Phinx\Migration\AbstractMigration;

class Tour extends AbstractMigration
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
     CREATE TABLE IF NOT EXISTS `tour` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `staff_exposition_id` INT UNSIGNED NOT NULL,
  `exposition_id` INT UNSIGNED NOT NULL,
  `date_exposition` DATETIME NOT NULL,
  `time_exposition` DATETIME NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_tour_staff_exposition1_idx` (`staff_exposition_id` ASC),
  INDEX `fk_tour_exposition1_idx` (`exposition_id` ASC),
  CONSTRAINT `fk_tour_staff_exposition1`
    FOREIGN KEY (`staff_exposition_id`)
    REFERENCES `staff_exposition` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tour_exposition1`
    FOREIGN KEY (`exposition_id`)
    REFERENCES `exposition` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
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