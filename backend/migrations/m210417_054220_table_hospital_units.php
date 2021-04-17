<?php

use yii\db\Migration;

/**
 * Class m210417_054220_table_hospital_units
 */
class m210417_054220_table_hospital_units extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('unit', array(
            'id'=>'integer not null',
            'name'=>'varchar(100)',
            'description'=>'text',
            'enable'=>'boolean',
        ));
        $this->addPrimaryKey('unitpk','unit','id');
        $this->alterColumn('unit','id','INTEGER AUTO_INCREMENT');

        $this->insert('unit',array(
           'name'=>'Neonatal intensive care',
            'description'=>'provide care for newborn infants',
            'enable'=>true
        ));
        $this->insert('unit',array(
            'name'=>'Pediatric intensive care',
            'description'=>'provide care for children',
            'enable'=>true
        ));
        $this->insert('unit',array(
            'name'=>'Surgical intensive care',
            'description'=>'provide care for heart attack or heart surgery patients',
            'enable'=>true
        ));
        $this->insert('unit',array(
            'name'=>'Medical intensive care',
            'description'=>'provide care for other surgical patients',
            'enable'=>true
        ));
        $this->insert('unit',array(
            'name'=>'Neonatal intensive care',
            'description'=>'provide care for patients with medical conditions who do not require surgery',
            'enable'=>true
        ));
        $this->insert('unit',array(
            'name'=>'Long term intensive care ',
            'description'=>' provide care for prolonged critical care needs patients',
            'enable'=>true
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210417_054220_table_hospital_units cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210417_054220_table_hospital_units cannot be reverted.\n";

        return false;
    }
    */
}
