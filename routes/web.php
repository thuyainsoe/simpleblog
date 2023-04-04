<?php

use App\Models\Blog;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\UserAccountController;

Route::get('/',function() {
    return inertia(
        'Blog/Index'
    );
});
Route::get('/blogs',function() {
    return inertia(
        'Blog/Show',
        [
            'blogs' => Blog::orderBy('created_at', 'desc')->paginate(15)
        ]
    );
});
Route::get('/latest-blogs',function() {
    return inertia(
        'Blog/Latest',
        [
            'blogs' => Blog::whereDate('created_at', '=', now()->format('Y-m-d'))->orderBy('created_at', 'desc')->paginate(15)
        ]
    );
});
Route::resource('blog', BlogController::class);

Route::resource('user-account', UserAccountController::class)
    ->middleware('guest');
    
Route::get('/login', [AuthController::class, 'create'])
    ->middleware('guest');
Route::post('login', [AuthController::class, 'store'])->name('login.store');
Route::delete('logout', [AuthController::class, 'destroy'])->name('logout');
    