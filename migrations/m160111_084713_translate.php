<?php

use yii\db\Schema;
use yii\db\Migration;

class m160111_084713_translate extends Migration
{
    public function safeUp()
    {
        $this->alterColumn('{{language_source}}', 'message', 'longtext NULL');
        $this->alterColumn('{{language_translate}}', 'message', 'longtext NULL');
    }

    public function safeDown()
    {
        $this->alterColumn('{{language_source}}', 'message', Schema::TYPE_TEXT . ' NULL');
        $this->alterColumn('{{language_translate}}', 'message', Schema::TYPE_TEXT . ' NULL');
    }
}
