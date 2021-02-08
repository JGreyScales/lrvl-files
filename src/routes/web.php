<?php


Route::middleware(['web'])->group(function () {
    Route::get('/apps/template', function() {
        return view('template::index');
    })->name("apps.files");
});