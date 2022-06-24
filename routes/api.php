<?php

use App\Http\Controllers\Person\PersonController;
use Illuminate\Support\Facades\Route;

Route::name('api.')->group(function () {
    #region People
    Route::apiResource('people', PersonController::class);
    #endregion
});
