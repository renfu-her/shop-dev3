<?php

use Illuminate\Support\Facades\Broadcast;
use Illuminate\Support\Facades\Log;


Broadcast::channel('cart', function () {
    Log::info('Cart channel accessed');
    return true;
});

