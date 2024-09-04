<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PollController;
use App\Http\Controllers\VoteController;



Route::get('/', [HomeController::class, 'home'])->name('home');
Route::post('/{poll}/vote', [VoteController::class,'storeVote'])->name('vote.store');
// Route For showing the poll results in homepage
// Route::get('{poll}/results', [VoteController::class, 'pollResults'])->name('poll.results');
Route::get('/polls/{id}', [PollController::class, 'filterByCategory'])->name('poll.filter');



Auth::routes();

/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:user'])->group(function () {

    Route::get('/home', [HomeController::class, 'index'])->name('user.home');
});

/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {

    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
    Route::get('/admin/poll/create', [PollController::class,'create'])->name('poll.create');
    Route::post('/admin/poll/store', [PollController::class, 'store'])->name('poll.store');
    Route::get('/poll/{id}/edit', [PollController::class, 'edit'])->name('poll.edit');
    Route::post('/poll/{id}/update', [PollController::class, 'update'])->name('poll.update');
    Route::delete('/poll/{id}', [PollController::class, 'destroy'])->name('poll.destroy');
    Route::get('/poll', [PollController::class,'list'])->name('poll.list');
    Route::get('{poll}/result', [VoteController::class, 'showResults'])->name('vote.results');


    Route::resource('/categories',CategoryController::class);
});

/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:manager'])->group(function () {

    Route::get('/manager/home', [HomeController::class, 'managerHome'])->name('manager.home');
});


