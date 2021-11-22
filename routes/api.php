<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('tool-by-division/{division}', 'ReportController@getBarangByDivision');
Route::get('inspector-by-id/{inspector}', 'ReportController@getInspectorById');
Route::get('division-by-id/{id}', 'APIController@getDivisiById');

// get oas
Route::get('get-oas', 'APIController@OAS');

Route::get('get-zone', 'APIController@zone');
Route::get('get-zone/{code}', 'APIController@getZone');

Route::get('get-sercom', 'APIController@sercom');
Route::get('get-sercom/{code}', 'APIController@getSercom');

Route::get('get-division', 'APIController@getDivision');
Route::get('get-division/{code}', 'APIController@getDivisionByCode');

Route::get('get-barang-by-division/{id}', 'APIController@getBarangByDivisi');
Route::get('get-barang/{division}/{code}', 'APIController@getToolByCode');

Route::get('get-inspector', 'APIController@getInspector');
Route::get('get-inspector/{code}', 'APIController@getInspectorByCode');

Route::post('submit-report', 'APIController@submitReport');
