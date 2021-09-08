<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Client\AboutController;
use App\Http\Controllers\Client\ContactsController;
use App\Http\Controllers\Client\ServicesController;
use App\Http\Controllers\Client\SearchController;
use App\Http\Controllers\Client\PricesController;
use App\Http\Controllers\Client\PoliticsController;
use App\Http\Controllers\Client\BlogController;
use App\Http\Controllers\Client\PortfolioController;
use App\Http\Controllers\Client\RequestController;

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\AboutPageController;
use App\Http\Controllers\Admin\HomePageController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ValuesController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\ProjectCategoriesController;
use App\Http\Controllers\Admin\BlogAdminController;
use App\Http\Controllers\Admin\ServicesAdminController;
use App\Http\Controllers\Admin\ContactAdminController;

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


Route::get('/', [HomeController::class, 'index'])->name('client.home');

Route::get('/about', [AboutController::class, 'index'])->name('client.about');
Route::get('/contacts', [ContactsController::class, 'index'])->name('client.contacts');
Route::get('/services', [ServicesController::class, 'index'])->name('client.services');
Route::get('/search', [SearchController::class, 'index'])->name('client.search');
Route::get('/politics', [PoliticsController::class, 'index'])->name('politics.index');
Route::get('/services/interior', [ServicesController::class, 'interior'])->name('client.services.interior');
Route::get('/services/design', [ServicesController::class, 'design'])->name('client.services.design');
Route::get('/services/oversight', [ServicesController::class, 'oversight'])->name('client.services.oversight');
Route::get('/services/landscape', [ServicesController::class, 'landscape'])->name('client.services.landscape');
Route::get('/services/decor', [ServicesController::class, 'decor'])->name('client.services.decor');
Route::get('/services/package', [ServicesController::class, 'package'])->name('client.services.package');
Route::get('/prices', [PricesController::class, 'index'])->name('client.prices.index');
Route::get('/portfolio', [PortfolioController::class, 'index'])->name('client.portfolio');
Route::get('/portfolio/interior', [PortfolioController::class, 'interior'])->name('client.portfolio.interior');
Route::get('/portfolio/decor', [PortfolioController::class, 'decor'])->name('client.portfolio.decor');
Route::get('/portfolio/interior-painting', [PortfolioController::class, 'painting'])->name('client.portfolio.painting');
Route::get('/portfolio/landscape-design', [PortfolioController::class, 'landscape'])->name('client.portfolio.landscape');
Route::get('/portfolio/{category}', [PortfolioController::class, 'category'])->name('client.portfolio.category');
Route::get('/portfolio/{category}/{id}', [PortfolioController::class, 'single'])->name('client.portfolio.single');
Route::get('/blog', [BlogController::class, 'index'])->name('client.blog');
Route::get('/blog/{id}', [BlogController::class, 'single'])->name('client.blog.single');
Route::post('/request/add', [RequestController::class, 'add'])->name('client.request.add');
Route::get('/search', [SearchController::class, 'search'])->name('client.search');
Route::post('/search/request', [SearchController::class, 'search'])->name('client.search.request');



Route::prefix('admin')->name('admin.')->group(
    function () {
        Route::get('logout',  [AuthController::class, 'logout'])->name('logout')->middleware('auth');
        Route::get('home',  [DashboardController::class, 'index'])->name('home')->middleware('auth');
        Route::post('portfolio/{portfolio}/project', [ProjectController::class, 'store'])->name('project.store')->middleware('auth');

        Route::get('homepage', [HomePageController::class, 'index'])->name('homepage.index')->middleware('auth');
        Route::post('homepage/update', [HomePageController::class, 'update'])->name('homepage.update')->middleware('auth');
        Route::get('aboutpage', [AboutPageController::class, 'index'])->name('aboutpage.index')->middleware('auth');
        Route::post('aboutpage/update', [AboutPageController::class, 'update'])->name('aboutpage.update')->middleware('auth');
        Route::resource('values', ValuesController::class);
        Route::resource('blog', BlogAdminController::class);
        Route::post('blog/upload-image', [BlogAdminController::class, 'uploadImage'])->name('blog.upload');
        Route::get('requests', [ContactAdminController::class, 'index'])->name('contact.index')->middleware('auth');
        Route::resource('portfolio', ProjectCategoriesController::class);
        Route::get('portfolio/{portfolio}/project/create', [ProjectController::class, 'create'])->name('project.create')->middleware('auth');
        Route::get('portfolio/{portfolio}/project/{project}/edit', [ProjectController::class, 'edit'])->name('project.edit')->middleware('auth');
        Route::patch('portfolio/{portfolio}/project/{project}', [ProjectController::class, 'update'])->name('project.update')->middleware('auth');
        Route::post('portfolio/{portfolio}/project', [ProjectController::class, 'store'])->name('project.store')->middleware('auth');
        Route::delete('portfolio/{portfolio}/project', [ProjectController::class, 'destroy'])->name('project.destroy')->middleware('auth');
        Route::post('portfolio/project/upload-image', [ProjectController::class, 'uploadImage'])->name('project.upload');
        Route::get('services', [ServicesAdminController::class, 'index'])->name('services.index')->middleware('auth');
        Route::get('services/interior', [ServicesAdminController::class, 'interior'])->name('services.interior')->middleware('auth');
        Route::post('services/interior/create', [ServicesAdminController::class, 'createInterior'])->name('services.interior.create')->middleware('auth');
        Route::post('services/interior/update', [ServicesAdminController::class, 'updateInterior'])->name('services.interior.update')->middleware('auth');
        Route::get('services/design', [ServicesAdminController::class, 'design'])->name('services.design')->middleware('auth');
        Route::post('services/design/create', [ServicesAdminController::class, 'createDesign'])->name('services.design.create')->middleware('auth');
        Route::post('services/design/update', [ServicesAdminController::class, 'updateDesign'])->name('services.design.update')->middleware('auth');
        Route::get('services/oversight', [ServicesAdminController::class, 'oversight'])->name('services.oversight')->middleware('auth');
        Route::post('services/oversight/create', [ServicesAdminController::class, 'createOversight'])->name('services.oversight.create')->middleware('auth');
        Route::post('services/oversight/update', [ServicesAdminController::class, 'updateOversight'])->name('services.oversight.update')->middleware('auth');
        Route::get('services/landscape-design', [ServicesAdminController::class, 'landscape'])->name('services.landscape')->middleware('auth');
        Route::post('services/landscape-design/create', [ServicesAdminController::class, 'createLandscape'])->name('services.landscape.create')->middleware('auth');
        Route::post('services/landscape-design/update', [ServicesAdminController::class, 'updateLandscape'])->name('services.landscape.update')->middleware('auth');
        Route::get('services/decor', [ServicesAdminController::class, 'decor'])->name('services.decor')->middleware('auth');
        Route::post('services/decor/create', [ServicesAdminController::class, 'createDecor'])->name('services.decor.create')->middleware('auth');
        Route::post('services/decor/update', [ServicesAdminController::class, 'updateDecor'])->name('services.decor.update')->middleware('auth');
        Route::get('services/package', [ServicesAdminController::class, 'package'])->name('services.package')->middleware('auth');
        Route::post('services/package/create', [ServicesAdminController::class, 'createPackage'])->name('services.package.create')->middleware('auth');
        Route::post('services/package/update', [ServicesAdminController::class, 'updatePackage'])->name('services.package.update')->middleware('auth');


//        Route::get('users', 'Admin\UsersController@index')->name('admin.users');
//        Route::get('users/add', 'Admin\UsersController@add')->name('admin.users.add');
//        Route::post('users/add', 'Admin\UsersController@add');
//        Route::get('users/{id}/edit', 'Admin\UsersController@edit')->name('admin.users.edit');
//        Route::post('users/{id}/edit', 'Admin\UsersController@edit');
//        Route::get('users/{id}/delete', 'Admin\UsersController@delete')->name('admin.users.delete');
    }
);

Route::group(
    ['middleware' => 'guest', 'prefix' => 'admin'],
    function () {
        Route::get('', [AuthController::class, 'showLoginForm'])->name('admin.login');
        Route::post('', [AuthController::class, 'authenticate'])->name('authenticate');
    }
);
