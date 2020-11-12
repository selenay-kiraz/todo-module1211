<?php namespace Pyro\TodosModule\Http\Controller;

use Anomaly\Streams\Platform\Http\Controller\PublicController;
use http\Env\Request;
use Pyro\TodosModule\Todo\Form\TodoFormBuilder;
use Pyro\TodosModule\Todo\Table\TodoTableBuilder;
use Pyro\TodosModule\Todo\TodoModel;
use function foo\func;

class TodosController extends PublicController
{
    /**
     * Display an index of existing entries.
     *
     * @param TodoTableBuilder $table
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(TodoTableBuilder $table)
    {

//       Rest API Kullanımı (Deneme) Todos
//        $todos = new TodoModel();
//        if(!isset($request->todo) || $request->todo=="")
//        {
//            return $table->render();
//        }
//        $table->setTableEntries($todos);

        $table->setViews([
            'create' => [
                'text' => 'module::field.new_todo.name',
            'href' => '/todos/create',
            'setAttributes' => [
                'class' => 'btn btn-success'
            ]
            ],
            'add' => [
                'text' => 'module::field.add_todo.name',
                'href' => '/todos/add',
                'setAttributes' => [
                    'class' => 'btn btn-success'
                ]
            ],
            ]);

        /** Edit butonunu tabloda kullanabilmek için; */
        $table->setButtons([
            'edit' => [
                'href' => 'todos/edit/' . '{entry.id}',
                ]
            ,]);

        /** Delete butonunu tabloda kullanabilmek için; */
        $table->setActions([
            'delete' => [
                'href' => 'todos/delete/',
                ],
            ]);

        $table->setOption('sortable', false);

        return $table->render();
    }


    /**
     * Create a new entry.
     *
     * @param TodoFormBuilder $form
     * @return \Symfony\Component\HttpFoundation\Response
     */

    //http://oc.test/todos 'ta New Kısmı için
    public function create(TodoFormBuilder $form)
    {
        $form->setActions([
            'save_exit' => [
                'redirect' => '/todos'
            ],
            'cancel' => [
                'redirect' => '/todos'
            ],
        ]);

        return $form->render();
    }

    /** Add an existing entry.
     *
     * @param TodoFormBuilder $form
     * @param        $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function add()
    {
        //return $form->render();
        return $this->view->make('pyro.module.todos::index');
    }

    public function ekle()
    {
        return $this->view->make('pyro.module.todos::index');
    }


     /** Edit an existing entry.
     *
     * @param TodoFormBuilder $form
     * @param        $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit_todo(TodoFormBuilder $form, $id)
    {
        //http://oc.test/todos/edit/{id} kısmı için
        $form->setActions([
            'save_exit' => [
                'redirect' => '/todos'
            ],
            'cancel' => [
                'redirect' => '/todos'
            ],
        ]);

        return $form->render($id);
    }

//    public function listApi()
//    {
//        return $this->response->json(['test'=> 'asassa','asd']);
//    }

}