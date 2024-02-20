<?php

namespace App\Listeners;

use App\Mail\NewAssetAddedNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Encryption\DecryptException;


class AssetAddedNotification
{
    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        $asset = $event->asset;


        //send out notification email to subscribers

       



        // Mail::to($user_reference)->queue(new NewAssetAddedNotification($asset, $user_reference));



    }
}
