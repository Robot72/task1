<?php

use yii\db\Schema;
use app\components\MigrationHelper;

class m151113_173542_products extends MigrationHelper
{
    public $tableName = '{{%products}}';
    public function up()
    {
        $this->setTableOptions();
        
        $this->createTable($this->tableName, [
            'id' => Schema::TYPE_PK,
            'id_brand' => Schema::TYPE_INTEGER,
            'model' => Schema::TYPE_STRING,
            'made_year' => Schema::TYPE_DATE,
            'power' => Schema::TYPE_INTEGER,
            'price' => Schema::TYPE_FLOAT,            
        ], $this->tableOptions);
        
        $this->addForeignKey('brand', $this->tableName, 'id_brand', 'brands', 'id');
        
        $this->createIndex('idx_products_model', $this->tableName, 'model');
        $this->createIndex('idx_products_made_year', $this->tableName, 'made_year');
        $this->createIndex('idx_products_price', $this->tableName, 'price');
        
        for($i = 0; $i < 300; $i++) {
            $power = $i+100;
            $price = $i+20000;
            $model = "E3$i";
            $this->insert($this->tableName, [
                'id_brand' => 1,
                'model' => $model,
                'made_year' => '2014-12-12',
                'power' => $power,
                'price' => $price,
            ]);
        }
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
