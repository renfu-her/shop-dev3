<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class CartUpdated implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public function __construct(
        public int $count
    ) {
        Log::info('CartUpdated event triggered with count: ' . $this->count);
    }

    public function broadcastOn(): Channel
    {

        Log::info('CartUpdated event triggered with count: ' . $this->count);

        return new Channel('cart');
    }

    public function broadcastAs()
    {

        return 'CartUpdated';
    }

    public function broadcastWith()
    {

        return [
            'count' => $this->count
        ];
    }
} 