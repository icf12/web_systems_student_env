<?php

use Phinx\Migration\AbstractMigration;

class Price extends AbstractMigration
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
        CREATE TABLE IF NOT EXISTS `price` (
  `id` INT NOT NULL,
  `id_price_type` INT NOT NULL,
  `tour_id` INT UNSIGNED NOT NULL,
  `sum` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_price_price_type1_idx` (`id_price_type` ASC),
  INDEX `fk_price_tour1_idx` (`tour_id` ASC),
  CONSTRAINT `fk_price_price_type1`
    FOREIGN KEY (`id_price_type`)
    REFERENCES `price_type` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_price_tour1`
    FOREIGN KEY (`tour_id`)
    REFERENCES `tour` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
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