<?php

namespace noIT\blog\migrations;

use yii\db\Migration;

/**
 * Handles the creation of table `{{%blog_category_has_blog_post}}`.
 */
class m200211_163537_create_category_has_post_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%blog_category_has_blog_post}}', [
            'category_id' => $this->integer()->notNull(),
            'post_id' => $this->integer()->notNull(),
        ]);

        $this->createIndex(
            'idx--blog_category_has_blog_post--category_id-and-post_id',
            'blog_category_has_blog_post',
            ['category_id', 'post_id'],
            true
        );

        $this->addForeignKey(
            'fk--blog_category_has_blog_post--category_id',
            'blog_category_has_blog_post',
            'category_id',
            'category',
            'id',
            'CASCADE',
            'CASCADE'
        );

        $this->addForeignKey(
            'fk--blog_category_has_blog_post--post_id',
            'blog_category_has_blog_post',
            'post_id',
            'post',
            'id',
            'CASCADE',
            'CASCADE'
        );

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%blog_category_has_blog_post}}');

        $this->dropForeignKey('fk--blog_category_has_blog_post--post_id', 'blog_category_has_blog_post');
        $this->dropForeignKey('fk--blog_category_has_blog_post--category_id', 'blog_category_has_blog_post');

        $this->dropIndex('idx--blog_category_has_blog_post--category_id-and-post_id', 'blog_category_has_blog_post');

        return true;
    }
}
