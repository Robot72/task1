<?php

use yii\db\Schema;
use app\components\MigrationHelper;

class m151113_145017_brands extends MigrationHelper
{
    protected $tableName = '{{%brands}}';
    public function up()
    {
        $this->setTableOptions();
        
        $this->createTable($this->tableName, [
            'id' => Schema::TYPE_PK,
            'id_country' => Schema::TYPE_INTEGER,
            'name' => Schema::TYPE_STRING,
        ], $this->tableOptions);        
        
        $this->addForeignKey('country', $this->tableName, 'id_country', 'countries', 'id');
        
        $this->createIndex('idx_brands_name', $this->tableName, 'name');
        
        $this->insert($this->tableName, [
            'name' => 'Mersedes',
            'id_country' => 12,
        ]);
        
        $this->insert($this->tableName, [
            'name' => 'BMW',
            'id_country' => 12,
        ]);
        
        $this->insert($this->tableName, [
            'name' => 'Audi',
            'id_country' => 12,
        ]);
        
        $this->insert($this->tableName, [
            'name' => 'VW',
            'id_country' => 12,
        ]);
        
        $this->insert($this->tableName, [
            'name' => 'Opel',
            'id_country' => 12,
        ]);
        
        $this->insert($this->tableName, [
            'name' => 'Citroen',
            'id_country' => 13,
        ]);
        
        $this->insert($this->tableName, [
            'name' => 'Reno',
            'id_country' => 13,
        ]);
        
        $this->insert($this->tableName, [
            'name' => 'Pegoout',
            'id_country' => 13,
        ]);
    }

    public function down()
    {
        $this->dropTable($this->tableName);
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
