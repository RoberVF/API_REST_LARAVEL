<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\InvoiceController;

Route::middleware('auth:sanctum') -> get('/user', function (Request $request){
    return $request -> user();
});

// Lo muevo a web.php porque esta dando problemas :(
// Route::group(['prefix' => 'v1', 'namespace' => 'App\Http\Controllers'], function (){
//     Route::apiResource('customers', CustomerController::class);
//     Route::apiResource('invoices', InvoiceController::class);
// });