<?php

/**
 * Home
 */
Route::get('/', [
    'as' => 'home',
    'uses' => 'PagesController@home'
]);

/**
 * Contact
 */
Route::post('contact', [
    'as' => 'contact_path',
    'uses' => 'ContactController@store'
]);

/**
 * Admin
 */
Route::group(
    [
        'prefix' => 'admin'
    ],
    function ()
    {
        /**
         * Administration
         */
        Route::get('/', [
                'as' => 'admin_path',
                'uses' => 'AdminController@index'
            ]);

        /**
         * Skills
         */
        Route::resource('skills', 'SkillsController');
        Route::get('skills/{id}/delete', [
                'as' => 'admin.skills.delete',
                'uses' => 'SkillsController@delete'
            ]);
    }
);
