<?php

Route::group([
        'prefix'     => 'btest',
        'middleware' => ['web', 'theme', 'locale', 'currency']
    ], function () {

        Route::get('/', 'sefasungur\btest\Http\Controllers\Shop\btestController@index')->defaults('_config', [
            'view' => 'btest::shop.index',
        ])->name('shop.btest.index');

});