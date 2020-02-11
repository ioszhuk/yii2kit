<?php

namespace noIT\blog\migrations;

use yii\db\Migration;

/**
 * Handles the creation of table `{{%blog_post}}`.
 */
class m200211_162923_create_post_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%blog_post}}', [
            'id' => $this->primaryKey(),

            'name' => $this->string()->notNull(),
            'slug' => $this->string()->null(),

            'teaser' => $this->text()->null(),
            'body' => $this->text()->null(),

            'status' => $this->tinyInteger(2)->unsigned()->notNull()->defaultValue(10),

            'seo_title' => $this->string(255)->null(),
            'seo_description' => $this->string(255)->null(),

            'publish_date' => $this->integer()->null(),

            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%blog_post}}');

        return true;
    }
}
