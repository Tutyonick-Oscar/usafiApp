<?php

use App\Http\Controllers\admin\Login;
use App\Http\Controllers\UsafiDemand;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\wasteHandler;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\viewController as view;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
//require __DIR__ . '/vendor/autoload.php';
//laravel_Breeze_logic

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//others_routes

Route::get('/sendsms',[UsafiDemand::class,'create'])->name('sms');
Route::get('/',[view::class,'index'])->name('home');
//Route::get('/signin',[view::class,'signIn'])->name('signin');
Route::get('login', [AuthenticatedSessionController::class, 'create'])
->name('login');
//Route::get('/resetpassword',[view::class,'resetpassword'])->name('resetpassword');
Route::middleware('auth')->group(function () {
    Route::get('/collect',[view::class,'collect'])->name('collect');
    Route::get('/connection',[view::class,'connection'])->name('connection');
    Route::get('/education',[view::class,'education'])->name('education');
    //Route::get('/newpassword',[view::class,'newPassword'])->name('newpassword');
    Route::get('/setting',[view::class,'setting'])->name('setting');
    Route::get('/membership',[view::class,'membership'])->name('membership');
    Route::get('/profil',[view::class,'profil'])->name('profil');
});

// dashboard

Route::get('/adminpanel/login',[Login::class,'login'])->name('admin.login');
Route::post('/adminpanel/login',[Login::class,'accessDash'])->name('admin.access');
Route::middleware('admin')->group( function (){
    Route::get('/adminpanel/admin',[view::class,'dashboard'])->name('adminpanel');
    Route::get('/adminpanel/eduPosts',[view::class,'eduPosts'])->name('eduPosts');
    Route::get('/adminpanel/notifications',[view::class,'notifications'])->name('notifications');
    Route::get('/adminpanel/recyclage',[view::class,'recyclage'])->name('recyclage');
    Route::get('/adminpanel/recyclage/{id}',[view::class,'recyclageUpdate'])->name('recyclage.update');
    Route::get('/adminpanel/users',[view::class,'users'])->name('users');
    Route::get('/adminpanel/eduPosts/{id}',[view::class,'eduPostupdate'])->name('eduPosts.update');
    /**
     * post routes
     */
    Route::post('/adminpanel/recyclage',[wasteHandler::class,'recycler'])->name('recyclage.post');
    Route::put('/adminpanel/recyclage/{id}',[wasteHandler::class,'updateCollecte'])->name('collecte.updated');
    Route::delete('/adminpanel/recyclage/{action}/{id}',[wasteHandler::class,'deleteCollecte'])->name('collecte.delete');
    Route::post('/adminpanel/eduPosts',[wasteHandler::class,'posts'])->name('eduPosts.post');
    Route::put('/adminpanel/eduPosts/{id}',[wasteHandler::class,'eduPostupdated'])->name('eduPosts.updated');
    Route::delete('/adminpanel/eduPosts/{action}/{id}',[wasteHandler::class,'deletePost'])->name('eduPosts.delete');
});
