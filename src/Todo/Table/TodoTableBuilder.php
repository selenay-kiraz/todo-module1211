<?php namespace Pyro\TodosModule\Todo\Table;

use Anomaly\Streams\Platform\Ui\Table\TableBuilder;
use Visiosoft\AdvsModule\Adv\Table\Filter\NameDescFilterQuery;
use Visiosoft\CatsModule\Category\Table\Handler\Delete;

class TodoTableBuilder extends TableBuilder
{

    /**
     * The table views.
     *
     * @var array|string
     */
    protected $views = [];

    /**
     * The table filters.
     *
     * @var array|string
     */
    protected $filters = [
        'name',
        'user_id',
    ];

    /**
     * The table columns.
     *
     * @var array|string
     */
    protected $columns = [
        'name',
        'user_id',
    ];

    /**
     * The table buttons.
     *
     * @var array|string
     */

    /** Düzenleme için; */
    protected $buttons = [
        'edit'
    ];

    /**
     * The table actions.
     *
     * @var array|string
     */

     /** Yeni buton (AADMİN'de) eklemek için; */
    protected  $actions = [
        'delete'
    ];

    /**
     * The table options.
     *
     * @var array
     */
    protected $options = [];

    /**
     * The table assets.
     *
     * @var array
     */
    protected $assets = [];

}
