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

Route::get('/', function () {

    $data = config('paste');

    $cortissima = [];
    $corta = [];
    $lunga = [];

    foreach($data as $key => $pasta){

        $pasta['id'] = $key;

        if($pasta['tipo'] == 'cortissima') {
            $cortissima[] = $pasta;
        } elseif ($pasta['tipo'] == 'corta') {
            $corta[] = $pasta;
        } elseif ($pasta['tipo'] == 'lunga') {
            $lunga[] = $pasta;
        }
    }

    return view('home', [
        'cortissime' => $cortissima,
        'corte' => $corta, 
        'lunghe' => $lunga, 
    ]);
})->name('homepage');

Route::get('/last-news', function () {
   return view('news');
})->name('news');

Route::get('prodotto/{id}', function ($id) {

    $data = config('paste');  

    if($id > count($data)){
        abort(404);
    }

    if($id == count($data) -1){
        $next = 0;
        $prev = $id - 1;
    } elseif($id == 0){
        $prev = count($data) -1;
        $next = $id + 1;
    } else{
        $prev = $id - 1;
        $next = $id + 1;
    }

    $pasta = $data[$id];

   return view('prodotto', [
       'pasta' => $pasta,
       'prevProdottoId' => $prev,
       'nextProdottoId' => $next
   ]);

})->where('id', '[0-9]+')->name('prodotto');