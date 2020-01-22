<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

/**
 * Class ProfilMigration_104
 */
class ProfilMigration_104 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     */
    public function morph()
    {
        $this->morphTable('profil', [
                'columns' => [
                    new Column(
                        'id',
                        [
                            'type' => Column::TYPE_INTEGER,
                            'unsigned' => true,
                            'notNull' => true,
                            'autoIncrement' => true,
                            'size' => 10,
                            'first' => true
                        ]
                    ),
                    new Column(
                        'nom',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 128,
                            'after' => 'id'
                        ]
                    ),
                    new Column(
                        'prenom',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 128,
                            'after' => 'nom'
                        ]
                    ),
                    new Column(
                        'adress',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'size' => 128,
                            'after' => 'prenom'
                        ]
                    ),
                    new Column(
                        'image_lien',
                        [
                            'type' => Column::TYPE_LONGBLOB,
                            'size' => 1,
                            'after' => 'adress'
                        ]
                    ),
                    new Column(
                        'cv_lien',
                        [
                            'type' => Column::TYPE_LONGBLOB,
                            'size' => 1,
                            'after' => 'image_lien'
                        ]
                    ),
                    new Column(
                        'description',
                        [
                            'type' => Column::TYPE_TEXT,
                            'size' => 1,
                            'after' => 'cv_lien'
                        ]
                    ),
                    new Column(
                        'id_user',
                        [
                            'type' => Column::TYPE_INTEGER,
                            'notNull' => true,
                            'size' => 50,
                            'after' => 'description'
                        ]
                    )
                ],
                'indexes' => [
                    new Index('PRIMARY', ['id'], 'PRIMARY'),
                    new Index('Index', ['id_user'], null)
                ],
                'references' => [
                    new Reference(
                        'Index',
                        [
                            'referencedTable' => 'users',
                            'columns' => ['id_user'],
                            'referencedColumns' => ['ID'],
                            'onUpdate' => 'RESTRICT',
                            'onDelete' => 'RESTRICT'
                        ]
                    )
                ],
                'options' => [
                    'TABLE_TYPE' => 'BASE TABLE',
                    'AUTO_INCREMENT' => '17',
                    'ENGINE' => 'InnoDB',
                    'TABLE_COLLATION' => 'utf8_general_ci'
                ],
            ]
        );
    }

    /**
     * Run the migrations
     *
     * @return void
     */
    public function up()
    {

    }

    /**
     * Reverse the migrations
     *
     * @return void
     */
    public function down()
    {

    }

}
