<?php

use yii\db\Migration;

/**
 * Class m210410_045734_tabla_patient_admission
 */
class m210410_045734_tabla_patient_admission extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('patient_admission', array(
            'id'=>'integer not null',
            'admission_date'=>'date',
            'admission_hour'=>'time',
            'id_patient'=>'integer',
            'anamnesis'=>'text',
            'diagnostic'=>'text',
            'reason_for_admission'=>'text',
            'internment'=>'boolean',
            'internment_sector'=>'integer'
        ));
        $this->addPrimaryKey('patientadmissionpk', 'patient_admission', 'id');
        $this->addForeignKey('patient_fk', 'patient_admission', 'id_patient', 'patient', 'id');
        $this->alterColumn('patient_admission', 'id','integer auto_increment not null');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210410_045734_tabla_patient_admission cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210410_045734_tabla_patient_admission cannot be reverted.\n";

        return false;
    }
    */
}
