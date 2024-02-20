<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewAssetAddedNotification extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public $asset;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($asset)
    {
        $this->asset = $asset;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('noreply@virelasi.com', 'Sci Asset Hub')
            ->markdown('mail.new_asset_added');
    }
}
