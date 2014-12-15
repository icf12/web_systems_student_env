<?php

use Phinx\Migration\AbstractMigration;

class SaleHistory extends AbstractMigration
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
        CREATE TABLE IF NOT EXISTS `sale_history` (
  `user_id` INT NOT NULL,
  `shopping_id` INT NOT NULL,
  `id_price` INT NOT NULL,
  `id_user_in_ticket` INT NOT NULL,
  INDEX `fk_sale_histor_user1_idx` (`user_id` ASC),
  INDEX `fk_sale_history_price1_idx` (`id_price` ASC),
  CONSTRAINT `fk_sale_histor_user1`
    FOREIGN KEY (`user_id`)
    REFERENCES `user` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_sale_histor_shopping1`
    FOREIGN KEY (`shopping_id`)
    REFERENCES `shopping` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_sale_history_price1`
    FOREIGN KEY (`id_price`)
    REFERENCES `price` (`id`)
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