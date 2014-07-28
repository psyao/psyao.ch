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

Route::group(
    [
        'prefix' => 'admin'
    ],
    function ()
    {
        /**
         * Skills
         */
        Route::resource('skills', 'SkillsController');
    }
);
