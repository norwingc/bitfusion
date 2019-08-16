<?php

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

Route::get('/getVideos', function () {
    $videos = [];

    for ($i=0; $i <= 4; $i++) {
       $video = new App\Video();
       $video->url = 'fasdfasdf';
       $video->title = 'fadsfasdf';
       $video->description = "fasdfasdf";
       array_push($videos, $video);
    }

    return response()->json($videos);
});
