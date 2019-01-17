<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

    //rudimentary way of registering services
//app()->singleton('App\Services\Twitter', function(){
//   return new \App\Services\Twitter('api-key');
//});

    //rudimentary way of registering services
//app()->bind('App\Example', function(){
//    return new \App\Example;
//});
//app()->singleton('singletonExample', function(){
//    return new \App\Example\SingletonExample();
//});

    //dump registered services on homepage
//Route::get('/', function() {
//    dd(
//        //Laravel automatically resolves the dependency
//        resolve('App\Example\Example'),
//        resolve('singletonExample'),
//        resolve('singletonExample')
//    );
//
//    return view('welcome');
//});

    //dump service that is registered to resolve Interfaces
//Route::get('/', function(\App\Repositories\DbUserRepository $repository){
//   dd($repository);
//});

Route::get('/', function(\App\Services\Twitter $twitter){
    return view('welcome');
});

Route::resource('projects', 'ProjectsController');
Route::post('/projects/{project}/tasks', 'ProjectTasksController@store');
Route::post('/completed-tasks/{task}', 'CompletedTasksController@store');
Route::delete('/completed-tasks/{task}', 'CompletedTasksController@destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
