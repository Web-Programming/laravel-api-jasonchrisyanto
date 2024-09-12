<?php

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