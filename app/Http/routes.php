<?php
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

Route::get('/', function(){
    $tasks =  Task::orderBy('created_at', 'asc')->get();
    return view('tasks',compact('tasks'));
});

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