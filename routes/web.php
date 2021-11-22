<?php

// use Illuminate\Routing\Route;
use App\Report;
use App\Sercom;


Route::middleware(['auth'])->group(function () {

    Route::get('/', function(){
        $masuk = Report::where('tipe_in_out', 1)->sum('jumlah_input');
        $keluar = Report::where('tipe_in_out', 2)->sum('jumlah_input');
        $sercom = count(Sercom::all());
        return view('homepage', compact('masuk', 'keluar', 'sercom'));
    });
    // Sercom Menu
    Route::get('/sercom', 'SercomController@index');
    Route::get('/sercom/create', 'SercomController@create');
    Route::post('/sercom', 'SercomController@store');
    Route::get('/sercom/{sercom}', 'SercomController@show');
    Route::get('/sercom/{sercom}/edit', 'SercomController@edit');
    Route::post('/sercom/{sercom}/update', 'SercomController@update');
    Route::get('/sercom/{sercom}/delete', 'SercomController@destroy');

    Route::get('/zone', 'ZoneController@index');
    Route::get('/zone/create', 'ZoneController@create');
    Route::post('/zone', 'ZoneController@store');
    Route::get('/zone/{zone}', 'ZoneController@show');
    Route::get('/zone/{zone}/edit', 'ZoneController@edit');
    Route::post('/zone/{zone}/update', 'ZoneController@update');
    Route::get('/zone/{zone}/delete', 'ZoneController@destroy');

    Route::get('/regional', 'RegionalController@index');
    Route::get('/regional/create', 'RegionalController@create');
    Route::post('/regional', 'RegionalController@store');
    Route::get('/regional/{regional}', 'RegionalController@show');
    Route::get('/regional/{regional}/edit', 'RegionalController@edit');
    Route::post('/regional/{regional}/update', 'RegionalController@update');
    Route::get('/regional/{regional}/delete', 'RegionalController@destroy');

    // Division Menu
    Route::get('/division', 'DivisionController@index');
    Route::get('/division/create', 'DivisionController@create');
    Route::post('/division', 'DivisionController@store');
    Route::get('/division/{division}', 'DivisionController@show');
    Route::get('/division/{division}/edit', 'DivisionController@edit');
    Route::post('/division/{division}/update', 'DivisionController@update');
    Route::get('/division/{division}/delete', 'DivisionController@destroy');

    // part tool
    // Division Menu
    Route::get('/part-tool', 'PartToolController@index');
    Route::get('/part-tool/create', 'PartToolController@create');
    Route::post('/part-tool', 'PartToolController@store');
    Route::get('/part-tool/{partTool}', 'PartToolController@show');
    Route::get('/part-tool/{partTool}/edit', 'PartToolController@edit');
    Route::post('/part-tool/{partTool}/update', 'PartToolController@update');
    Route::get('/part-tool/{partTool}/delete', 'PartToolController@destroy');

    // OAS Menu
    Route::get('/oas', 'OASController@index');
    Route::get('/oas/create', 'OASController@create');
    Route::post('/oas', 'OASController@store');
    Route::get('/oas/{oas}', 'OASController@show');
    Route::get('/oas/{oas}/edit', 'OASController@edit');
    Route::post('/oas/{oas}/update', 'OASController@update');
    Route::get('/oas/{oas}/delete', 'OASController@destroy');

    // Barang Menu / Divisi
    Route::get('/divisi_tool/{id}', 'ToolController@index');
    Route::get('/divisi_tool/{id}/create', 'ToolController@create');
    Route::post('/tool', 'ToolController@store');
    Route::get('/divisi_tool/{id}/{tool}', 'ToolController@show');
    Route::get('/divisi_tool/{id}/{tool}/edit', 'ToolController@edit');
    Route::post('/tool/{tool}/update', 'ToolController@update');
    Route::get('/divisi_tool/{id}/{tool}/delete', 'ToolController@destroy');

    Route::get('/document_equipment', 'DocumentController@documentEquipment');
    Route::get('/document_equipment/create', 'DocumentController@documentEquipmentCreate');
    Route::get('/document_material', 'DocumentController@documentMaterial');
    // Laporan
    Route::get('/summary_all', 'ReportController@summary');
    Route::get('/summary/excel', 'ReportController@exportExcel');
    Route::get('/summary/pdf', 'ReportController@exportPdf');
    Route::get('/summary/{type}', 'ReportController@index');
    Route::get('/summary/{id}/delete', 'ReportController@destroy')->where('id', '[0-9]+');
    // Ubah Min Stock
    Route::post('/summary_all/min_stock', 'ReportController@updateMinStock');


    // Route::get('/equipment_in/{report}', 'ReportController@equipmentInShow');
    // Route::get('/equipment_in_add', 'ReportController@toolInView');
    // Route::post('/equipment_in_store', 'ReportController@storeIn');
    // Route::get('/equipment_in/{report}/delete', 'ReportController@equipmentInDestroy');

    // Route::get('/equipment_out', fn () => view('report.equipment_out'));
    // Route::get('/equipment_out/show', fn () => view('report.detail_equipment_out'));

    // Crud User
    Route::get('/user', 'UserController@index');
    Route::post('/user', 'UserController@store');
    Route::get('/user/{user}/detail', 'UserController@show');
    Route::post('/user/{user}/update', 'UserController@update');
    Route::get('/user/{user}/delete', 'UserController@destroy');
    Route::get('/user/create', function(){
        return view('user.create');
    });

});


Auth::routes();
