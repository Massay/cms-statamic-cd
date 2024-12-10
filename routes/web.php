<?php

use Illuminate\Support\Facades\Route;

// Route::statamic('example', 'example-view', [
//    'title' => 'Example'
// ]);




Route::get('masay', function(){
    return "My name is MAssay";
});


// Route::get('blogs/{slug}', function ($slug) {
//     return view('blogs', ['slug' => $slug]);
// });