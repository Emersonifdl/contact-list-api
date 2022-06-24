<?php

use App\Http\Controllers\Person\{PersonController, PersonEmailController, PersonPhoneController};
use Illuminate\Support\Facades\Route;

Route::name('api.')->group(function () {
    #region People
    Route::apiResource('people', PersonController::class);

    Route::apiResource('people.phones', PersonPhoneController::class);
    Route::apiResource('people.emails', PersonEmailController::class);
    #endregion
});
