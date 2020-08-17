<?php

use Illuminate\Support\Facades\Route;

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

Route::view('/', 'landing');
Route::match(['get', 'post'], '/dashboard', 'DashboardController@index')->middleware('auth');

Auth::routes();
Route::get('/home', function () {
    return redirect('/dashboard');
})->middleware('auth');

Route::view('/pages/slick', 'pages.slick');
Route::view('/pages/datatables', 'pages.datatables');
Route::view('/pages/blank', 'pages.blank');


Route::group(['prefix' => 'master-data'], function () {
    Route::group(['prefix' => 'configure'], function () {
        Route::resource('company', 'CompanyController');
    });
});

Route::get('display/{center_name}', function ($center_name) {
    return view('display.index', compact('center_name'));
});

Route::get('form-generator', function () {
    $array_inputs = ['name', 'gst_tin', 'registration_number'];

    foreach ($array_inputs as $input) {
        $html = '
        <div class="form-group">
            <label for="'. $input .'">Registration Number</label>
            <input id="'. $input .'" name="'. $input .'" type="text"  value="{{ old(&#39;'. $input .'&#39;) }}" class="form-control">
        </div>
        ';
        echo '<pre>';
        echo htmlspecialchars($html);
        echo '</pre>';
    }
});