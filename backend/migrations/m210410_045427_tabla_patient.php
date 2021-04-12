<?php

use yii\db\Migration;

/**
 * Class m210410_045427_tabla_patient
 */
class m210410_045427_tabla_patient extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('patient', array(
            'id'=>'int not null',
            'name'=>'varchar(80) not null',
            'last_name'=>'varchar(50) not null',
            'id_number'=>'bigint not null',
            'gender'=>'varchar(10) not null',
            'phone'=>'bigint',
            'address'=>'text',
            'state'=>'varchar(50)',
            'age'=>'integer not null'
        ));
        $this->addPrimaryKey('patientpk','patient','id');
        $this->alterColumn('patient', 'id','integer not null auto_increment');
        
        $this->createTable('social_segurity',array(
            'id'=>'integer not null',
            'number'=>'bigint',
            'id_patient'=>'integer',
            'active'=>'boolean'
        ));
        $this->addPrimaryKey('socialpk','social_segurity', 'id');
        $this->alterColumn('social_segurity', 'id', 'integer not null auto_increment');
        $this->addForeignKey('patientfk', 'social_segurity', 'id_patient','patient', 'id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210410_045427_tabla_patient cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210410_045427_tabla_patient cannot be reverted.\n";

        return false;
    }
    */
}
