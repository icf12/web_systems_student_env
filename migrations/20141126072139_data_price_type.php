<?php

use Phinx\Migration\AbstractMigration;

class DataPriceType extends AbstractMigration
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
         $file = file_get_contents('/vagrant/migrations/datapricetype.txt');
        
      $this->execute($file);  
    }

    /**
     * Migrate Down.
     */
    public function down()
    {

    }
}