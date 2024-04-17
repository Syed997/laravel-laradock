<?php

namespace App\Jobs;

use App\Kafka\kafkaProducer;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class Kafka implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $requestData;
    protected $productName;
    /**
     * Create a new job instance.
     */
    public function __construct(Request $request)
    {
        $this->requestData = $request->only('product_name', 'product_stock');
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        Product::create($this->requestData);
        $productName = $this->requestData['product_name'];
        kafkaProducer::produceMessage($productName);
    }
}
