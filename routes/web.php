<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/task1', function () {
    return view('task1');
});

Route::get('/task2', function () {
    return view('task2');
});

Route::any('/task3', function () {
    return view('task3', [
        'articles' => [
        ['image'=>"https://mdbcdn.b-cdn.net/img/new/standard/nature/051.jpg",'description'=>"I Miss The Sun", 'name'=>"by Mark Equel", 'date'=>"12.01.2022"],

        ['image'=>"https://mdbcdn.b-cdn.net/img/new/standard/nature/044.jpg", 'description'=>"Adventure In The desert", 'name'=>"by Mark Equel", 'date'=> "12.01.2022"],

        ['image'=>"https://mdbcdn.b-cdn.net/img/new/standard/nature/045.jpg", 'description'=>"Lonely Mountain", 'name'=>"by Builbo Baggins", 'date'=>"10.01.2022"],

        ['image'=>"https://mdbcdn.b-cdn.net/img/new/standard/nature/047.jpg", 'description'=>"Let's Go!", 'name'=>"by Halley Frank", 'date'=>"09.01.2022"],

        ['image'=>"https://mdbcdn.b-cdn.net/img/new/standard/nature/028.jpg", 'description'=>"A Hut In The Mountains", 'name'=>"by David Beak", 'date'=>"07.01.2022"],

        ['image'=>"https://mdbcdn.b-cdn.net/img/new/standard/nature/049.jpg", 'description'=>"Beautiful Waterfall", 'name'=>"by Joe Svan", 'date'=>"04.01.2022"],
        ], 
        'stafff' => [
            ['image'=>"https://mdbcdn.b-cdn.net/img/new/avatars/2.jpg" , 'name'=>"Joe Doe" , "job"=>"Co-Founder"],
            ['image'=>"https://mdbcdn.b-cdn.net/img/new/avatars/5.jpg" , 'name'=>"Lisa Ferrol" , "job"=>"Web Designer"],
            ['image'=>"https://mdbcdn.b-cdn.net/img/new/avatars/6.jpg" , 'name'=>"Maria Smith" , "job"=>"Senior Consultant"],
            ['image'=>"https://mdbcdn.b-cdn.net/img/new/avatars/7.jpg" , 'name'=>"Agatha Bevos" , "job"=>"Co-Founder"],
            ['image'=>"https://mdbcdn.b-cdn.net/img/new/avatars/8.jpg" , 'name'=>"Darren Randolph" , "job"=>"Marketing Expert"],
            ['image'=>"https://mdbcdn.b-cdn.net/img/new/avatars/9.jpg" , 'name'=>"Soraya Letto" , "job"=>"SEO Expert"          ],
            ['image'=>"https://mdbcdn.b-cdn.net/img/new/avatars/11.jpg", 'name'=>"Zeynep Dudley" , "job"=>"Web Developer"],
            ['image'=>"https://mdbcdn.b-cdn.net/img/new/avatars/10.jpg", 'name'=>"Maliha Welch" , "job"=>"Web designer"],
            ['image'=>"https://mdbcdn.b-cdn.net/img/new/avatars/12.jpg", 'name'=>"Avaya Hills" , "job"=>"Copywriter"],
            ['image'=>"https://mdbcdn.b-cdn.net/img/new/avatars/13.jpg", 'name'=>"Thierry Fishcher" , "job"=>"senior consultant"],
            ['image'=>"https://mdbcdn.b-cdn.net/img/new/avatars/14.jpg", 'name'=>"Aisling Sheldon" , "job"=>"Senior Developer"],
            ['image'=>"https://mdbcdn.b-cdn.net/img/new/avatars/15.jpg", 'name'=>"Ayat Black" , "job"=>"Web designer"],
        ]
    ]);
});


Route::get('/task4', function () {
    return view('task4');
});

Route::post('/task4', function () {
    $regex = "/( )/";
    preg_match_all($regex, $_REQUEST['inputText'], $matches);
    $words = sizeof($matches[0]) + 1;

    $regex = "/([aeiou])/";
    preg_match_all($regex, $_REQUEST['inputText'], $matches);
    $vowels = sizeof($matches[0]);

    $regex = "/([£]{3,})/";
    preg_match_all($regex, $_REQUEST['inputText'], $matches);
    $spam = sizeof($matches[0]);

    return ['input' =>  $_REQUEST['inputText'], 'words' => $words, 'vowels' => $vowels, 'spam' => $spam];

});

Route::get('/task4b', function () {
    return view('task4b');
});

