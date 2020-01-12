<?php

use Illuminate\Http\Request;
use App\Http\Resources\ResourceData;
use App\Data;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::prefix('/new')->group(function (){
   Route::get('/',['name'=>'testController@getName']);
   Route::post('/',['name'=>'testController@createName']);
});
*/
Route::get('codes','DataController@index');

Route::get('/codes', function() {
    return ResourceData::collection(Data::all());
});

