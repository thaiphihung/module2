<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\StaffController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group([
    'prefix' => 'staff'
],function(){
    Route::get('/',[StaffController::class,'index'])->name('staff.index');
    Route::get('/create',[StaffController::class,'create'])->name('staff.create');
    Route::post('/store',[StaffController::class,'store'])->name('staff.store');
    Route::get('/{id}',[StaffController::class,'show'])->name('staff.show');
    Route::get('/{id}/edit',[StaffController::class,'edit'])->name('staff.edit');
    Route::put('/{id}',[StaffController::class,'update'])->name('staff.update');
    Route::delete('/{id}',[StaffController::class,'destroy'])->name('staff.destroy');
});
// Route::get('/odd_number',function(){
//     return 'truy cập thành công';
// })->middleware('check_number');
// Route::get('/back_number',function(){
//     return 'truy cập không thành công';
// })->name('back_number');
// Route::get('/',function(){
//     return view('layouts.master');
// })->name('restricted-page');