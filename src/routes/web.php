<?php

use Illuminate\Support\Facades\Route;
use Afilgueira\Zkteco\Http\Controllers\ZktecoController;

Route::get('zkteco', [ZktecoController::class, 'index']);

Route::get('test', function () {
   return "ok";
});
