<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriesController;
use Illuminate\Http\Request;
use App\Models\Categories;

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

Route::get('/', [CategoriesController::class, 'index']);

Route::post('/', function (Request $request) {
    $validator = Validator::make($request->all(), [
        'name' => 'required|max:255',
        'parent_id' => 'required',
    ]);
 
    if ($validator->fails()) {
        return redirect('/')
            ->withInput()
            ->withErrors($validator);
    }
 
    $product = new Categories;
    $product->name = $request->name;
    $product->parent_id = $request->parent_id;
    $product->save();

    return redirect('/');
});
