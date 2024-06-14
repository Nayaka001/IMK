<?php

namespace App\Listeners;

use App\Events\OrderCreated;
use App\Models\Order;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Redis;

class OrderCreatedListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(OrderCreated $event): void
    {
        $id_order = $event->id_order;

        // Ambil informasi pesanan dari database
        $order = Order::findOrFail($id_order); // Sesuaikan dengan cara Anda mengambil data dari database

        // Kirim pesan ke Pusher untuk memberitahu kitchen tentang pesanan baru
        Redis::publish('order-created', json_encode(['order' => $order]));
    }
}
