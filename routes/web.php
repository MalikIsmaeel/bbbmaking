<?php

use Illuminate\Support\Facades\Route;
use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;

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

Route::get('/', function () {
    return view('welcome');
});



Route::get('/test', function () {
     
          $pdf = file_get_contents('https://visitvisaportal.burujinsurance.com/documents/download/531975b8-8674-48ec-bd60-8b5c5ebb7f31');
        Storage::disk('local')->put('samplepdf.pdf', $pdf);
        return response()->download(storage_path().'/app/samplepdf.pdf')->deleteFileAfterSend(true);
        
});
