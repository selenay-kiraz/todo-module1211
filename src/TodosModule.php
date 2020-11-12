<?php namespace Pyro\TodosModule;

use Anomaly\Streams\Platform\Addon\Module\Module;
use Visiosoft\AdvsModule\Adv\Table\Filter\NameDescFilterQuery;


class TodosModule extends Module
{

    /**
     * The navigation display flag.
     *
     * @var bool
     */
    protected $navigation = true;

    /**
     * The addon icon.
     *
     * @var string
     */
    /* to-do icon puzzle olarak ayarlandı */
    protected $icon = 'fa fa-puzzle-piece';

    /**
     * The module sections.
     *
     * @var array
     */
/* Module Section dediği şey aslında puzzle simgesine tıklandığında çıkan ek sectionlar */
    protected $sections = [
        'todos' => [
            'buttons' => [
                'new_todo',
            ],
        ],
    ];


}
