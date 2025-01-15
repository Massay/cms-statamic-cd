<?php

use Illuminate\Support\Facades\Route;
use Statamic\Facades\Entry;

// Route::statamic('example', 'example-view', [
//    'title' => 'Example'
// ]);




Route::get('masay', function(){
    return "My name is MAssay";
});


// Route::get('academy/{slug}', function ($slug) {
//     return view(view: 'academy/show');
//     return Roue::statamic('uri', 'academy/show', ['foo' => 'bar']);

// });

Route::statamic('academy/{slug}', 'academy/show', function($slug){


    $category = Entry::query()
    ->where('collection', 'course_category')
    ->where('slug', $slug)
    ->first();

    $courses = Entry::query()
    ->where('collection', 'our_courses')
    ->where('course_category', $category->id)
    ->get();

    return ['courses' => $courses];
});



Route::statamic('courses/details/{slug}', 'courses/details', function($slug){

    $course = Entry::query()
    ->where('collection', 'our_courses')
    ->where('slug', $slug)
    ->first();

    return ['course' => $course];
});




Route::statamic('all/courses', 'academy/all-courses', function(){


    // $category = Entry::query()
    // ->where('collection', 'course_category')
    // ->first();

    $courses = Entry::query()
    ->where('collection', 'our_courses')
    ->get();



   return ['courses' => $courses];
});

