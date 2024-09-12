<?php

use App\Http\Controllers\DonationController;
use App\Http\Controllers\FundingController;
use App\Models\Donation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/menu', function(Request $request){
    return response()->json(['Home', 'Profile', 'About', 'Contact Us']);
});

//buat route menuju url /donatur
//buat response berupa data json seperti berikut
/*
[
    {
        'id':1,
        'nama': 'Jason'
    },
    {
        'id':2,
        'nama': 'Beyond'
    },
    {
        'id':3,
        'nama': 'Nelson'
    },
]
*/

/*
Route::get('/donatur', function(Request $request){
    return response()->json([
    [
        'id'=>1,
        'nama'=> 'Jason'
    ],
    [
        'id'=>2,
        'nama'=> 'Beyond'
    ],
    [
        'id'=>3,
        'nama'=> 'Nelson'
    ],
]);
});
*/

//API CRUD Funding
Route::get('/funding', [FundingController::class, 'index']); //get all data
route::post('/funding', [FundingController::class, 'store']); //create new data
Route::get('/funding/{id}', [FundingController::class, 'show']); //get data by id
Route::put('/funding/{id}', [FundingController::class, 'update']); //update data by id
Route::delete('/funding/{id}', [FundingController::class, 'destory']); //delete data by id

//API CRUD Donation
// Route::get('/donation', 'App\Http\Controllers\DonationController@index');
Route::apiResource('donation', DonationController::class);