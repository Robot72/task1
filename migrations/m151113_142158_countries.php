<?php

use yii\db\Schema;
use app\components\MigrationHelper;

class m151113_142158_countries extends MigrationHelper
{
    public $tableName = '{{%countries}}';
    public function up()
    {
        $this->setTableOptions();
        
        $this->createTable($this->tableName, [
            'id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_STRING,
        ], $this->tableOptions);
        
        $this->createIndex('idx_countries_name', $this->_tableName, 'name');
        
        $this->insert($this->tableName, [
            'name' => 'Albania'
        ]);
        $this->insert($this->tableName, [
            'name' => 'Amsterdam'
        ]);
        $this->insert($this->tableName, [
            'name' => 'Australia'
        ]);
        $this->insert($this->tableName, [
            'name' => 'Belgia'
        ]);
        $this->insert($this->tableName, [
            'name' => 'Belarus'
        ]);
        $this->insert($this->tableName, [
            'name' => 'China'
        ]);
        $this->insert($this->tableName, [
            'name' => 'Ruminya'
        ]);
        $this->insert($this->tableName, [
            'name' => 'Russia'
        ]);
        $this->insert($this->tableName, [
            'name' => 'Canada'
        ]);
        $this->insert($this->tableName, [
            'name' => 'Usa'
        ]);
        $this->insert($this->tableName, [
            'name' => 'India'
        ]);
        $this->insert($this->tableName, [
            'name' => 'German'
        ]);
        $this->insert($this->tableName, [
            'name' => 'Francis'
        ]);
        $this->insert($this->tableName, [
            'name' => 'Italiya'
        ]);
    }

    public function down()
    {
        parent::drop();
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
