<?php

use yii\db\Schema;
use app\components\MigrationHelper;

class m151113_145017_brands extends MigrationHelper
{
    public $tableName = '{{%brands}}';
    public function up()
    {
        $this->setTableOptions();
        
        $this->createTable($this->_tableName, [
            
        ], $this->tableOptions);        
    }

    public function down()
    {
        parent::down();
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
