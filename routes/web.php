<?php

use Illuminate\Support\Facades\Route;
use App\Models;
use App\Models\User;
use App\Models\yuna;

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

Route::prefix('admin')->group(function()
{
    Route::get('test/{slug}-{id}', function($slug = null, $id = null)
    {
        $content = 'test: <br/>';
        $content .= 'id = '.$id;
        $content .= 'slug = '.$slug;
        return $content;
    })->where
    (
        [
            'id' => '[0-9]+'
        ]
    );

    Route::get('/', function(){
        return view('admin.adminmain');
    });

    Route::get('/create', function(){
        return view('admin.test');
    });


});

Route::prefix('/')->group(function()
{
    Route::get('/', function()
    {
        return view('index');
    });
});
