<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\MajorController;

Route::get('majors/add',[MajorController::class,"create"]);
Route::post('majors',[MajorController::class,"store"]);

?>
