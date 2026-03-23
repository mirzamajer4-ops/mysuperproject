<?php

use App\Http\Controllers\LabController;

Route::get('/user-info', [LabController::class, 'showUserInfo']);
