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

Route::get('/', function () {
    return view('home');
});

Route::get('/blog', function () {
    return view('/blog/blog');
});

Route::get('/blog/tutorials', function () {
    return view('/blog/tutorials');
});

Route::get('/blog/javascript', function () {
    return view('/blog/javascript');
});

Route::get('/blog/css', function () {
    return view('/blog/css');
});

Route::get('/blog/design', function () {
    return view('/blog/design');
});

Route::get('/blog/data', function () {
    return view('/blog/data');
});

Route::get('/blog/motion', function () {
    return view('/blog/motion');
});

Route::get('/speaking', function () {
    return view('speaking');
});

Route::get('/moving-letters', function () {
    return view('moving-letters');
});

Route::get('/typesource', function () {
    return view('/typesource/typesource');
});

Route::get('/typesource/20-pursuit-of-purpose', function () {
    return view('/typesource/20pp');
});

Route::get('/typesource/19-keep-it-real', function () {
    return view('/typesource/19kir');
});

Route::get('/typesource/18-saturday-morning-times', function () {
    return view('/typesource/18smt');
});

Route::get('/typesource/17-nils-frahm', function () {
    return view('/typesource/17nf');
});

Route::get('/typesource/16-happiness-design', function () {
    return view('/typesource/16hd');
});

Route::get('/typesource/15-live-travel-adventure', function () {
    return view('/typesource/15-lta');
});

Route::get('/typesource/14-please-of-finding-things-out', function () {
    return view('/typesource/14-pof');
});

Route::get('/typesource/13-get-things-done', function () {
    return view('/typesource/13-gtd');
});

Route::get('/typesource/12-edward-bear', function () {
    return view('/typesource/12-eb');
});

Route::get('/typesource/11-sense-of-style', function () {
    return view('/typesource/11-sos');
});

Route::get('/typesource/10-wait-until-monday', function () {
    return view('/typesource/10-wum');
});

Route::get('/typesource/09-history-of-swedish-meatballs', function () {
    return view('/typesource/9-hos');
});

Route::get('/typesource/08-fall-collection', function () {
    return view('/typesource/8-fc');
});

Route::get('/typesource/07-shut-up-beard', function () {
    return view('/typesource/7-sub');
});

Route::get('/typesource/06-a-search', function () {
    return view('/typesource/6-as');
});

Route::get('/typesource/05-perfection', function () {
    return view('/typesource/5-perfection');
});

Route::get('/typesource/04-how-climate-change-will-affect-you', function () {
    return view('/typesource/4-hcc');
});

Route::get('/typesource/03-everything-you-need-to-know-about-iphone6s', function () {
    return view('/typesource/3-eyn');
});

Route::get('/typesource/02-seven-days-in-tokyo', function () {
    return view('/typesource/2-sd');
});

Route::get('/typesource/01-elements-of-html-and-css', function () {
    return view('/typesource/1-html&css');
});

Route::get('/spinkit', function () {
    return view('spinkit');
});







