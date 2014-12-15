<?php

use Phinx\Migration\AbstractMigration;

class Shopping extends AbstractMigration
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
        CREATE TABLE IF NOT EXISTS `shopping` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `col_tick` INT NOT NULL,
  `sum` INT NOT NULL,
  `sum_with_bonus` INT NOT NULL,
  `user_buyer_id` INT NOT NULL,
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