<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Site;

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

Route::get('/', function () {
    return view('welcome');
});

Route::post('/follow', function (Request $request) {

    $url = $request->input('url', '');
    $name = $request->input('name', '');
    $description = $request->input('description', '');

    $data = [];
    if ($url === '') {
        $data['url'] = $url;
        $data['message'] = 'Whoops! You forgot to specify the URL';

        return response()->json($data, 400);
    }

    $site = new Site();
    $site->url = $url;
    $site->name = $name;
    $site->description = $description;
    $site->save();

    $data['url'] = $url;
    $data['message'] = 'Success!';

    return response()->json($data);
});
