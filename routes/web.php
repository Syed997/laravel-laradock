<?php

use Illuminate\Support\Facades\Route;

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
use App\Http\Controllers\KafkaController;
use App\Kafka\Consumer;
use App\Kafka\Produce;

// Route::get('/produce', [KafkaController::class, 'produce']);
// Route::get('/consume', [KafkaController::class, 'consume']);
Route::get('/', function () {
    echo phpinfo();
    return view('welcome');
});
Route::get('/consume', function (Consumer $consumer) {
    $consumer->consume();
    return 'Consuming messages from Kafka...';
});

Route::get('/produce', function (Produce $producer) {
    $producer->produce('Hello Kafka!');
    return 'Producing message to Kafka...';
});
