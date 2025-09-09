<?php




use Laradevsbd\Zkteco\Http\Controllers\ZktecoController;


\Route::get('zkteco', [ZktecoController::class, 'index']);

\Route::get('test', function () {
   return "ok";
});
