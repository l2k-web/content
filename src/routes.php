<?php
Route::group(['middleware' => ['web']], function () {
    Route::resource('contents', 'L2k\Content\ContentController');
});
