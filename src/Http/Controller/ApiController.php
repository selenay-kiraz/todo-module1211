<?php namespace Pyro\TodosModule\Http\Controller;

use Anomaly\Streams\Platform\Http\Controller\PublicController;
use Illuminate\Http\Request;
use Pyro\TodosModule\Todo\Contract\TodoRepositoryInterface;
use Pyro\TodosModule\Todo\TodoModel;

class ApiController extends PublicController
{
    public $repository;

    public function __construct(TodoRepositoryInterface $repository)
    {
        $this->repository = $repository;
        parent::__construct();
    }

    public function index()
    {
        $todos = $this->repository->newQuery()->get();
        return $this->response->json($todos);
    }

    public function ekle (Request $request){
//      return auth()->user()->getAuthIdentifier();
        $todo = new TodoModel();
        $todo->name = $request->name;
        $todo->user_id_id = auth()->user()->getAuthIdentifier();
        $todo->save();
        return response()->json('Todo başarıyla eklendi.');

    }
}
//
//$.ajax({
//  url: "http://oc.test/api/todos",
//  success: function(r){
//    console.log(r)
//  }
//});
//

//class ApiController extends PublicController
//{
//    /**
//     * Display an index of existing entries.
//     *
//     * @param TodoTableBuilder $table
//     * @return \Symfony\Component\HttpFoundation\Response
//     */
//    public function index(TodoTableBuilder $table)
//    {
//        $todos = TodoModel::all();
//        return response()->json($todos);
//    }
//
//    public function create(Request $request)
//    {
//        $todo = new TodoModel();
//        $todo->name = $request->name;
//        $todo->save();
//        return response()->json('Todo başarıyla eklendi.');
//    }
//
//    public function show($user_id)
//    {
//        $todo = TodoModel::find($user_id);
//        return response()->json($todo);
//    }
//
//    public function update(Request $request, $user_id)
//    {
//        $todo = TodoModel::find($user_id);
//        $todo->name = $request->name;
//        $todo->user_id = $request->user_id;
//        $todo->update();
//        return response()->json('Todo başarıyla düzenlendi.');
//    }
//
//    public function destroy($user_id)
//    {
//        TodoModel::destroy($user_id);
//        return response()->json('Todo başarıyla silindi.');
//    }
//}
