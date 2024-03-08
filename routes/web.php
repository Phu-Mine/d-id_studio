<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\WebRenderController;

// Auth::routes();
Route::get('{path?}', [WebRenderController::class, '__invoke'])->where('path', '[a-zA-Z0-9-/]+');

Route::get('/', function () {
    return view('index');
});


// Route for handling callback after authentication with social provider
Route::get('/auth/redirect/{provider}', [SocialController::class, 'redirect']);
Route::get('/auth/{provider}/callback', [SocialController::class, 'callback']);
