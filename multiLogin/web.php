<?php

/*
|--------------------------------------------------------------------------
| Creted By Maryadi071
| Contoh routing
*/

Route::get('/', function () {
    return view('form');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



#------------ admin
Route::middleware(['auth', 'checkRole:admin'])->group(function () {
    Route::get('/adm', function () { return view('admin.main'); });
});
#------------ Petugas Echannel
Route::middleware(['auth', 'checkRole:petugasech'])->group(function () {
    Route::get('/pet-ech', function () { return view('petechannel.main'); });
    Route::get('/pet-ech/create', 'PetEchController@create');
});
#------------ Petugas IT
Route::middleware(['auth', 'checkRole:petit'])->group(function () {
    Route::get('/pet-it', function () { return view('petit.main'); });
    Route::get('/pet-it/create', 'PetITController@create');
});
#------------ Petugas Kebersihan
Route::middleware(['auth', 'checkRole:petugaskeb'])->group(function () {
    Route::get('/pet-keb', function () { return view('petkebersihan.main'); });
    Route::get('/pet-keb/create', 'PetKebController@create');
});
#------------ Petugas Security
Route::middleware(['auth', 'checkRole:satpam'])->group(function () {
    Route::get('/pet-security', function () { return view('satpam.main'); });
    Route::get('/pet-security/create', 'PetSatController@create');
});
#------------ super admin
Route::middleware(['auth', 'checkRole:superadmin'])->group(function () {
    Route::get('/sp-admin', function () { return view('superadmin.main'); });
});