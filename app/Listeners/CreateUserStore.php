<?php

namespace App\Listeners;

use App\Models\Store;
use App\Models\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class CreateUserStore
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\UserCreated  $event
     * @return void
     */
    public function handle($event)
    {
        $user = $event->user;

        // Jika user memiliki role_id 2 (seller), buat Store baru
        if ($user->role_id === 2) {
            // Buat Store untuk user dengan role_id 2 (seller)
            Store::create([
                'store_name' => "Toko " . $user->user_name,
                'user_id' => $user->user_id,
            ]);
        }
    }
}
