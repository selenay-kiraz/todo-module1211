<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class PyroModuleTodosCreateTodosStream extends Migration
{

    /**
     * This migration creates the stream.
     * It should be deleted on rollback.
     *
     * @var bool
     */
    protected $delete = true;

    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug' => 'todos',
        'title_column' => 'name',
        'translatable' => false,
        'versionable' => false,
        'trashable' => true,
        'searchable' => false,
        'sortable' => true,
    ];

    /**
     * The stream assignments.
     *
     * @var array
     */
    protected $assignments = [
        'name' => [
            'translatable' => true,
            'required' => true,
        ],
        'user_id' => [
            'required' => true,
        ],
        'new_todo',
    ];

    public function up()
        {
            todos::create('todos', function (Blueprint $table) {
                $table->increments('id');
                $table->increments('user_id_id');
                $table->string('name');
                $table->datetime('datetime');
                $table->string('api_token', 60)->unique()->nullable();
                $table->rememberToken();
                $table->timestamps();
            });
        }



}
