<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BrandController;

/*Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');*/

Route::group(['prefix' => 'v1'], function () {
    Route::controller(BrandController::class)->group(function() {
        Route::group(['prefix' => 'portal/brands'], function() { // For portal related endpoints
            Route::get('/', 'indexPortal');
            Route::get('/{id}/fetch-by-id', 'fetchById');
            Route::post('/store', 'store');
            Route::put('/{id}/update', 'update');
            Route::delete('/{id}/delete', 'destroy');
            Route::delete('/delete-many', 'destroyMany');
        });

        Route::group(['prefix' => 'web/brands'], function() { // For website related endpoints
            Route::get('/', 'indexWeb');
            Route::get('/{id}/fetch-by-slug', 'fetchBySlug');
        });
    });
});
