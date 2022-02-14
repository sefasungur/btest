<?php

Route::group([
        'prefix'        => 'admin/btest',
        'middleware'    => ['web', 'admin']
    ], function () {

        Route::get('', 'sefasungur\btest\Http\Controllers\Admin\btestController@index')->defaults('_config', [
            'view' => 'btest::admin.index',
        ])->name('admin.btest.index');

});