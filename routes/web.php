<?php


use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\ProviderController;
use App\Http\Controllers\DashboardLeaderController;
use App\Http\Controllers\DataListController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TaskController;

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

Route::get('/auth/{provider}/redirect', [ProviderController::class, 'redirect']);
Route::get('/auth/{provider}/callback', [ProviderController::class, 'callback']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth', 'verified')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('project', ProjectController::class)->name('*','project');

    Route::resource('task', TaskController::class)->name('*','task');

    Route::resource('my-data', DataListController::class)->name('*','my-data');


    Route::group([
        'prefix' => 'role',
        'middleware' => 'role',
        'as' => 'role.'
    ], function () {

        Route::resource('dashboard_leader', DashboardLeaderController::class)->name('*','dashboard_leader');

        
    });

    
});

require __DIR__.'/auth.php';
