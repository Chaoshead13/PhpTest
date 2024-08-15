<?php


use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Main\IndexController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Category\IndexController as AdminCategoryIndexController;
use App\Http\Controllers\Category\CreateController as AdminCategoryCreateController;
use App\Http\Controllers\Category\StoreController as AdminCategoryStoreController;
use App\Http\Controllers\Category\ShowController as AdminCategoryShowController;
use App\Http\Controllers\Category\EditController as AdminCategoryEditController;
use App\Http\Controllers\Category\UpdateController as AdminCategoryUpdateController;
use App\Http\Controllers\Category\DeleteController as AdminCategoryDeleteController;

use App\Http\Controllers\Tag\IndexController as AdminTagIndexController;
use App\Http\Controllers\Tag\CreateController as AdminTagCreateController;
use App\Http\Controllers\Tag\StoreController as AdminTagStoreController;
use App\Http\Controllers\Tag\ShowController as AdminTagShowController;
use App\Http\Controllers\Tag\EditController as AdminTagEditController;
use App\Http\Controllers\Tag\UpdateController as AdminTagUpdateController;
use App\Http\Controllers\Tag\DeleteController as AdminTagDeleteController;

use App\Http\Controllers\Color\IndexController as AdminColorIndexController;
use App\Http\Controllers\Color\CreateController as AdminColorCreateController;
use App\Http\Controllers\Color\StoreController as AdminColorStoreController;
use App\Http\Controllers\Color\ShowController as AdminColorShowController;
use App\Http\Controllers\Color\EditController as AdminColorEditController;
use App\Http\Controllers\Color\UpdateController as AdminColorUpdateController;
use App\Http\Controllers\Color\DeleteController as AdminColorDeleteController;

use App\Http\Controllers\User\IndexController as AdminUserIndexController;
use App\Http\Controllers\User\CreateController as AdminUserCreateController;
use App\Http\Controllers\User\StoreController as AdminUserStoreController;
use App\Http\Controllers\User\ShowController as AdminUserShowController;
use App\Http\Controllers\User\EditController as AdminUserEditController;
use App\Http\Controllers\User\UpdateController as AdminUserUpdateController;
use App\Http\Controllers\User\DeleteController as AdminUserDeleteController;

use App\Http\Controllers\Product\IndexController as AdminProductIndexController;
use App\Http\Controllers\Product\CreateController as AdminProductCreateController;
use App\Http\Controllers\Product\StoreController as AdminProductStoreController;
use App\Http\Controllers\Product\ShowController as AdminProductShowController;
use App\Http\Controllers\Product\EditController as AdminProductEditController;
use App\Http\Controllers\Product\UpdateController as AdminProductUpdateController;
use App\Http\Controllers\Product\DeleteController as AdminProductDeleteController;











route::group(["prefix" => "admin"], function () {

    Route::get("/", [IndexController::class, "__invoke"])->name("main.index");


    route::group(["prefix" => "categories"], function () {
        Route::get('/', [AdminCategoryIndexController::class, "__invoke"])->name("admin.categories.index");
        Route::get('/create', [AdminCategoryCreateController::class, "__invoke"])->name("admin.categories.create");
        Route::post('/', [AdminCategoryStoreController::class, "__invoke"])->name("admin.categories.store");
        Route::get('/{category}', [AdminCategoryShowController::class, "__invoke"])->name("admin.categories.show");
        Route::get('/{category}/edit', [AdminCategoryEditController::class, "__invoke"])->name("admin.categories.edit");
        Route::patch('/{category}', [AdminCategoryUpdateController::class, "__invoke"])->name("admin.categories.update");
        Route::delete('/{category}', [AdminCategoryDeleteController::class, "__invoke"])->name("admin.categories.delete");
    });

    route::group(["prefix" => "tags"], function () {
        Route::get('/', [AdminTagIndexController::class, "__invoke"])->name("admin.tags.index");
        Route::get('/create', [AdminTagCreateController::class, "__invoke"])->name("admin.tags.create");
        Route::post('/', [AdminTagStoreController::class, "__invoke"])->name("admin.tags.store");
        Route::get('/{tag}', [AdminTagShowController::class, "__invoke"])->name("admin.tags.show");
        Route::get('/{tag}/edit', [AdminTagEditController::class, "__invoke"])->name("admin.tags.edit");
        Route::patch('/{tag}', [AdminTagUpdateController::class, "__invoke"])->name("admin.tags.update");
        Route::delete('/{tag}', [AdminTagDeleteController::class, "__invoke"])->name("admin.tags.delete");
    });

    route::group(["prefix" => "colors"], function () {
        Route::get('/', [AdminColorIndexController::class, "__invoke"])->name("admin.colors.index");
        Route::get('/create', [AdminColorCreateController::class, "__invoke"])->name("admin.colors.create");
        Route::post('/', [AdminColorStoreController::class, "__invoke"])->name("admin.colors.store");
        Route::get('/{color}', [AdminColorShowController::class, "__invoke"])->name("admin.colors.show");
        Route::get('/{color}/edit', [AdminColorEditController::class, "__invoke"])->name("admin.colors.edit");
        Route::patch('/{color}', [AdminColorUpdateController::class, "__invoke"])->name("admin.colors.update");
        Route::delete('/{color}', [AdminColorDeleteController::class, "__invoke"])->name("admin.colors.delete");
    });

    route::group(["prefix" => "users"], function () {
        Route::get('/', [AdminUserIndexController::class, "__invoke"])->name("admin.users.index");
        Route::get('/create', [AdminUserCreateController::class, "__invoke"])->name("admin.users.create");
        Route::post('/', [AdminUserStoreController::class, "__invoke"])->name("admin.users.store");
        Route::get('/{user}', [AdminUserShowController::class, "__invoke"])->name("admin.users.show");
        Route::get('/{user}/edit', [AdminUserEditController::class, "__invoke"])->name("admin.users.edit");
        Route::patch('/{user}', [AdminUserUpdateController::class, "__invoke"])->name("admin.users.update");
        Route::delete('/{user}', [AdminUserDeleteController::class, "__invoke"])->name("admin.users.delete");
    });

    route::group(["prefix" => "products"], function () {
        Route::get('/', [AdminProductIndexController::class, "__invoke"])->name("admin.products.index");
        Route::get('/create', [AdminProductCreateController::class, "__invoke"])->name("admin.products.create");
        Route::post('/', [AdminProductStoreController::class, "__invoke"])->name("admin.products.store");
        Route::get('/{product}', [AdminProductShowController::class, "__invoke"])->name("admin.products.show");
        Route::get('/{product}/edit', [AdminProductEditController::class, "__invoke"])->name("admin.products.edit");
        Route::patch('/{product}', [AdminProductUpdateController::class, "__invoke"])->name("admin.products.update");
        Route::delete('/{product}', [AdminProductDeleteController::class, "__invoke"])->name("admin.products.delete");
    });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

route::get("/{page}",[App\Http\Controllers\IndexController::class, "__invoke"])->where("page", ".*");;
