<?php namespace Pyro\TodosModule;

use Anomaly\Streams\Platform\Addon\AddonServiceProvider;
use Anomaly\Streams\Platform\Model\Todos\TodosLocationEntryModel;
use Pyro\TodosModule\Test\Contract\TestRepositoryInterface;
use Pyro\TodosModule\Test\TestRepository;
use Anomaly\Streams\Platform\Model\Todos\TodosTestEntryModel;
use Pyro\TodosModule\Test\TestModel;
use Pyro\TodosModule\Todo\Contract\TodoRepositoryInterface;
use Pyro\TodosModule\Todo\Form\TodoFormBuilder;
use Pyro\TodosModule\Todo\TodoRepository;
use Anomaly\Streams\Platform\Model\Todos\TodosTodosEntryModel;
use Pyro\TodosModule\Todo\TodoModel;
use Illuminate\Routing\Router;
use Visiosoft\ProfileModule\Profile\Profile\ProfileFormBuilder;

class TodosModuleServiceProvider extends AddonServiceProvider
{

    /**
     * Additional addon plugins.
     *
     * @type array|null
     */
    protected $plugins = [];

    /**
     * The addon Artisan commands.
     *
     * @type array|null
     */
    protected $commands = [];

    /**
     * The addon's scheduled commands.
     *
     * @type array|null
     */
    protected $schedules = [];

    /**
     * The addon API routes.
     *
     * @type array|null
     */
    protected $api = [];

    /**
     * The addon routes.
     *
     * @type array|null
     */
    protected $routes = [
        'admin/todos'           => 'Pyro\TodosModule\Http\Controller\Admin\TodosController@index',
        'admin/todos/create'    => 'Pyro\TodosModule\Http\Controller\Admin\TodosController@create',
        'admin/todos/edit/{id}' => 'Pyro\TodosModule\Http\Controller\Admin\TodosController@edit',
        'todos'                 => 'Pyro\TodosModule\Http\Controller\TodosController@index',
        'todos/edit/{id}' => 'Pyro\TodosModule\Http\Controller\TodosController@edit_todo',
        'todos/create' => 'Pyro\TodosModule\Http\Controller\TodosController@create',
        'todos/delete' => 'Pyro\TodosModule\Http\Controller\TodosController@delete',
        'todos/save_exit' =>  'Pyro\TodosModule\Http\Controller\TodosController@save_exit',
        'api/todos' => 'Pyro\TodosModule\Http\Controller\ApiController@index',
        'todos/add' => 'Pyro\TodosModule\Http\Controller\TodosController@add',
        'todos/ekle' => 'Pyro\TodosModule\Http\Controller\TodosController@ekle',
        'api/ekle' => [
            'as' => 'api::todo.ekle',
            'uses' => 'Pyro\TodosModule\Http\Controller\ApiController@ekle'
        ],

    ];

    /**
     * The addon middleware.
     *
     * @type array|null
     */
    protected $middleware = [
        //Pyro\TodosModule\Http\Middleware\ExampleMiddleware::class
    ];

    /**
     * Addon group middleware.
     *
     * @var array
     */
    protected $groupMiddleware = [];

    /**
     * Addon route middleware.
     *
     * @type array|null
     */
    protected $routeMiddleware = [];

    /**
     * The addon event listeners.
     *
     * @type array|null
     */
    protected $listeners = [];

    /**
     * The addon alias bindings.
     *
     * @type array|null
     */
    protected $aliases = [];

    /**
     * The addon class bindings.
     *
     * @type array|null
     */
    protected $bindings = [
        TodosTodosEntryModel::class => TodoModel::class,
        'todos' => TodoFormBuilder::class
    ];
    /**
     * The addon singleton bindings.
     *
     * @type array|null
     */

    protected $singletons = [
        TodoRepositoryInterface::class => TodoRepository::class,
    ];

    /**
     * Additional service providers.
     *
     * @type array|null
     */
    protected $providers = [
        //\ExamplePackage\Provider\ExampleProvider::class
    ];

    /**
     * The addon view overrides.
     *
     * @type array|null
     */
    protected $overrides = [
        'streams::form/standard' => 'streams::form/form',
        'streams::table/standard' => 'streams::table/table',
    ];

    /**
     * The addon mobile-only view overrides.
     *
     * @type array|null
     */
    protected $mobile = [
        //'streams::errors/404' => 'module::mobile/errors/404',
        //'streams::errors/500' => 'module::mobile/errors/500',
    ];



    /**
     * Register the addon.
     */
    public function register()
    {
        // Run extra pre-boot registration logic here.
        // Use method injection or commands to bring in services.
    }

    /**
     * Boot the addon.
     */
    public function boot()
    {
        // Run extra post-boot registration logic here.
        // Use method injection or commands to bring in services.
        // Örnek:     Schema::defaultStringLength(191);
    }

    /**
     * Map additional addon routes.
     *
     * @param Router $router
     */
    public function map(Router $router)
    {
        // Register dynamic routes here for example.
        // Use method injection or commands to bring in services.
    }

}
