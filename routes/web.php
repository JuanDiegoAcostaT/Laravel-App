<?php

use Illuminate\Support\Facades\Route;


Route::get("about", function () {
    return route("about");
})->name('about');

Route::match(["get", "post"])("/", function () {
    return "hola";
});
    // Route::any("/", function () {
    //     return "hola";
    // });

    // Route::get("/about/{id?}", function ($id = 'Default') {
    //     return "Hola Mundo ${id} ";
    // })->where(['id' => '[0-9]+', 'id' => '[1]']);


    // Route::get("/about/{id?}", function ($id = 'Default') {
    //     return "Hola Mundo ${id} ";
    // });
;
