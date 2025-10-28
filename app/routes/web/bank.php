<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::middleware(['auth', 'verified'])->prefix('bank')->group(
    function () {

        Route::get('/', function () {
            return Inertia::render('Bank/Index');
        })->name('bank.index');

        // Route::get('/create', function () {
        //     return Inertia::render('Bank/Create');
        // })->name('bank.create');
        //
        // Route::get('/{id}/edit', function ($id) {
        //     return Inertia::render('Bank/Edit', ['id' => $id]);
        // })->name('bank.edit');
        //
        // Route::get('/{id}', function ($id) {
        //     return Inertia::render('Bank/Show', ['id' => $id]);
        // })->name('bank.show');

    }
);
