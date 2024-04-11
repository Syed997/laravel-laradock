<?php

namespace App\Http\Controllers;

use App\Jobs\ProductCreated;
use App\Models\Product;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Log;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return response($products, Response::HTTP_OK);
    }

    public function store(Request $request)
    {
        $product = Product::create($request->only('product_name', 'product_stock'));
        // ProductCreated::dispatch($product->toArray())->onQueue('default');
        // ProductCreated::dispatch($product->toArray())->onConnection('Kafka');


        Log::info('Queue Connection: ' . config('queue.default'));

        return response($product, Response::HTTP_OK);
    }
}
