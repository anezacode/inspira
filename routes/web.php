<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\AppController;
use App\Http\Controllers\AwardsController;
use App\Http\Controllers\CompetitionController;
use App\Http\Controllers\FeeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ParticipantController;
use App\Http\Controllers\TopicsController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AppController::class, 'index'])->name('main');

Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/auth', [UserController::class, 'auth'])->name('auth');
Route::post('/logout', [UserController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/e/app', [AppController::class, 'edit']);
    Route::post('/u/app', [AppController::class, 'update']);
    
    Route::get('/e/home', [HomeController::class, 'edit']);
    Route::post('/u/home', [HomeController::class, 'update']);
    
    Route::get('/e/about', [AboutController::class, 'edit']);
    Route::post('/u/about', [AboutController::class, 'update']);
    
    Route::get('/e/agenda', [AgendaController::class, 'edit']);
    Route::post('/u/agenda', [AgendaController::class, 'update']);
    
    Route::get('/e/topics', [TopicsController::class, 'edit']);
    Route::post('/u/topics', [TopicsController::class, 'update']);
    
    Route::get('/e/participant', [ParticipantController::class, 'edit']);
    Route::post('/u/participant', [ParticipantController::class, 'update']);
    
    Route::get('/e/competition', [CompetitionController::class, 'edit']);
    Route::post('/u/competition', [CompetitionController::class, 'update']);
    
    Route::get('/e/awards', [AwardsController::class, 'edit']);
    Route::post('/u/awards', [AwardsController::class, 'update']);
    
    Route::get('/e/fee', [FeeController::class, 'edit']);
    Route::post('/u/fee', [FeeController::class, 'update']);
        
    Route::get('/e/user', [UserController::class, 'edit'])->name('edit.user');
    Route::post('/u/user', [UserController::class, 'updateUser'])->name('update.user');
});