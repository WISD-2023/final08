<?php

use App\Http\Controllers\AdminHomeController;
use App\Http\Controllers\AdminMembersController;
use App\Http\Controllers\AdminPostsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MemberCollectsController;
use App\Http\Controllers\MemberHomeController;
use App\Http\Controllers\MemberPostsController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ProfileController;
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



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('posts', [PostsController::class, 'index'])->name('posts.index');
Route::get('posts/{post}', [PostsController::class, 'show'])->name('posts.show');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminHomeController::class, 'index'])->name("home.index");
    Route::get('posts', [AdminPostsController::class, 'index'])->name("posts.index");
    Route::get('posts/create', [AdminPostsController::class, 'create'])->name("posts.create");
    Route::post('posts', [AdminPostsController::class, 'store'])->name("posts.store");
    Route::get('posts/{post}/edit', [AdminPostsController::class, 'edit'])->name("posts.edit");
    Route::patch('posts/{post}', [AdminPostsController::class, 'update'])->name("posts.update");
    Route::delete('posts/{post}', [AdminPostsController::class, 'destroy'])->name("posts.destroy");
    Route::get('members', [AdminMembersController::class, 'index'])->name("members.index");
    Route::get('members/create', [AdminMembersController::class, 'create'])->name("members.create");
    Route::post('members', [AdminMembersController::class, 'store'])->name("members.store");
    Route::get('members/{member}/edit', [AdminMembersController::class, 'edit'])->name("members.edit");
    Route::patch('members/{member}', [AdminMembersController::class, 'update'])->name("members.update");
    Route::delete('members/{member}', [AdminMembersController::class, 'destroy'])->name("members.destroy");
});
Route::prefix('member')->name('member.')->group(function () {
    Route::get('/', [MemberHomeController::class, 'index'])->name("home.index");
    Route::get('posts', [MemberPostsController::class, 'index'])->name("posts.index");
    Route::get('posts/create', [MemberPostsController::class, 'create'])->name("posts.create");
    Route::post('posts', [MemberPostsController::class, 'store'])->name("posts.store");
    Route::get('posts/{post}/edit', [MemberPostsController::class, 'edit'])->name("posts.edit");
    Route::patch('posts/{post}', [MemberPostsController::class, 'update'])->name("posts.update");
    Route::delete('posts/{post}', [MemberPostsController::class, 'destroy'])->name("posts.destroy");
    Route::get('/', [MemberHomeController::class, 'index'])->name("home.index");
    Route::get('collects', [MemberCollectsController::class, 'index'])->name("collects.index");
    Route::get('collects/{collects}/create', [MemberCollectsController::class, 'create'])->name("collects.create");
    Route::post('collects', [MemberCollectsController::class, 'store'])->name("collects.store");
    Route::get('collects/{collects}/edit', [MemberCollectsController::class, 'edit'])->name("collects.edit");
    Route::patch('collects/{collects}', [MemberCollectsController::class, 'update'])->name("collects.update");
    Route::delete('collects/{collects}', [MemberCollectsController::class, 'destroy'])->name("collects.destroy");
});
require __DIR__.'/auth.php';
