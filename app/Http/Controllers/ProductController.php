<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return response($products, Response::HTTP_OK);
    }

    public function store(Request $request)
    {
        $products = Product::create($request->only('product_name', 'product_stock'));
        $productName = $request->input('product_name');

        $conf = new \RdKafka\Conf();

        $conf->set('bootstrap.servers', 'pkc-41p56.asia-south1.gcp.confluent.cloud:9092');
        $conf->set('security.protocol', 'SASL_SSL');
        $conf->set('sasl.mechanism', 'PLAIN');
        $conf->set('sasl.username', 'L5GVN6PIZEZL55FM');
        $conf->set('sasl.password', 'A077549RjBGY5Jg8w4sXbeYRGrJiSsuazrPxnpCJlj19IWujQjJ2tMufipQjkFry');

        $producer = new \RdKafka\Producer($conf);
        $message = $productName;

        $topic = $producer->newTopic('my-topic');
        $topic->produce(RD_KAFKA_PARTITION_UA, 0, $message);
        $producer->flush(1000);


        return response($products, Response::HTTP_OK);
    }
}
