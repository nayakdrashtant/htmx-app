<?php

use Illuminate\Support\Facades\Route;
use App\Models\Article;
use Illuminate\Http\Request;

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
    return view('search');
});

Route::get('/hello-world', function () {
    return '<p>Hello, world</p>';
});


Route::get('/search', function (Request $request) {

    $term = $request->get('search-term');

    $pageSize = 3;

    if ($term == '') {
        $results = Article::paginate($pageSize);
    } else {
        $results = Article::where('name', 'LIKE', '%' . $term . '%')->paginate($pageSize);
    }

    return view('search-results', [
        'results' => $results
    ]);
});
