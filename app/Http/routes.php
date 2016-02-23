<?php
use Carbon\Carbon;
use App\User;
use App\Task;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('welcome', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});


Route::get('lista', ['uses' => 'TesteController@lista', 'as' =>'lista']);



Route::get('/',  ['middleware' =>'douglas', function(){
    //dd(Carbon::today()->format('Y-m-d'));
     // dd(Carbon\Carbon::today()->format('Y-m-d'));
    $tasks =  Task::orderBy('created_at', 'asc')->get();
    return view('tasks',compact('tasks'));
}]);

Route::post('/task', function (Request $request) {
    $validator = Validator::make($request->all(), [
        'nome'  => 'required|max:255',
    ]);
    if($validator->fails()){
        return redirect('/')
            ->withInput()
            ->withErrors($validator);
    }
    // dd($request->nome);
    $task = new \App\Task();
    $task->nome = $request->nome;
    $task->save();

    return redirect('/');

});

Route::delete('task/{id}', function($id){
    Task::findOrFail($id)->delete();
    return redirect('/');

});

/**
 *  ROTA QUE UTILIZA CONTROLES RESTFUL (CONTROLLER DE RECURSOS)
 *
 * Para criar esta tipo de rota,  pode-se usar o artisan make:controller nomedocontroller --resource
 */

/**
 * Esta rota, cria automaticamente  roas para todos os verbos que podem ser chamdo  da seguinte forma:
 *      VERBO       | CAMINHO               |   AÇÃO      | NOME DA ROTA
 * ======================================================================
 *      GET	        /recursos	                index	    recursos.index
        GET	        /recursos/create	        create	    recursos.create
        POST	    /recursos	                store	    recursos.store
        GET	        /recursos/{photo}	        show	    recursos.show
        GET	        /recursos/{photo}/edit	    edit	    recursos.edit
        PUT/PATCH	/recursos/{photo}	        update	    recursos.update
        DELETE	    /recursos/{photo}	        destroy	    recursos.destroy
 */
Route::resource('recursos', 'RestfulController');


Route::get('requisicao', 'RestfulController@teste');
