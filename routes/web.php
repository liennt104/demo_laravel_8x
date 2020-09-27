<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

$publicStudent = DB::table('students')->where('id', 15)->first();

Route::get('/', function () {
    dd(123123);
    return view('welcome');
});

Route::get('/students', function () {
    $students = DB::table('students')->where('id', '<', 5)->get();

    return $students;
});

Route::view(
    '/students-view',
    'welcome',
    ['name' => $publicStudent->name]);


Route::get('/students/{id}', function ($param) {
    $students = DB::table('students')->where('id', $param)->get();

    return $students;
});
