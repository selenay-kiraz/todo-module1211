<?php namespace Pyro\TodosModule\Todo;

use Pyro\TodosModule\Todo\Contract\TodoInterface;
use Anomaly\Streams\Platform\Model\Todos\TodosTodosEntryModel;

class TodoModel extends TodosTodosEntryModel implements TodoInterface
{
    /**
     * @var \Anomaly\Streams\Platform\Entry\EntryPresenter|mixed
     */
    private $name;

    public static function find($user_id)
    {
    }

    public function getTodos() {
        return TodoModel::all();
    }

    public function getSubTodos($todo) {
        return $this->query()->where('user_id', $todo)->get();
    }

}
