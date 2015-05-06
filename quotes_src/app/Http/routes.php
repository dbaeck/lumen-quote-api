<?php
use Illuminate\Support\Str;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use App\Models\Quote;

function quoteOfTheDay()
{
    $count = Quote::query()->get()->count();
    srand(date('Ymd'));
    $day = rand();
    $page = $day % $count + 1;

    $quotes = Quote::query()->get()->forPage($page, 1)->all();

    if (empty($quotes)) {
        throw new \Illuminate\Database\Eloquent\ModelNotFoundException();
    }

    return $quotes[0]; 
}

/**
 * API - JSON of today's quote
 */
$app->get('/api/', function() use ($app) {
    return quoteOfTheDay();
});

/**
 * API - JSON of a specific quote
 */
$app->get('/api/{id}', function($id) use ($app) {
    $quote = Quote::query()->findOrFail($id);
    return $quote;
});

/**
 * View - JSON of today's quote
 */
$app->get('/', function() use ($app) {
    return view('quote', ['quote' => quoteOfTheDay()]);
});

/**
 * View - JSON of a specific quote
 */
$app->get('/{id}', function($id) use ($app) {
    $quote = Quote::query()->findOrFail($id);
    return view('quote', ['quote' => $quote]);
});

