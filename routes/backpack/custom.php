<?php

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
        (array) config('backpack.base.middleware_key', 'admin')
    ),
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    Route::crud('radcheck', 'RadcheckCrudController');
    Route::crud('nas', 'NasCrudController');
    Route::crud('radreply', 'RadreplyCrudController');
    Route::crud('radacct', 'RadacctCrudController');
    Route::crud('radpostauth', 'RadpostauthCrudController');
    Route::get('charts/monthly-radacct', 'Charts\MonthlyRadacctChartController@response')->name('charts.monthly-radacct.index');
    Route::get('charts/monthly-radpostauth', 'Charts\MonthlyRadpostauthChartController@response')->name('charts.monthly-radpostauth.index');
}); // this should be the absolute last line of this file