<?php

use Illuminate\Support\Facades\Route;

Route::get('/admin', function(){
    session()->flash('swal', [
            'type' => 'success',
            'title' => '¡Welcome!',
            'text' => '¡You are logged in!'
    ]);
    return view('admin.dashboard');
})->name('admin.dashboard');