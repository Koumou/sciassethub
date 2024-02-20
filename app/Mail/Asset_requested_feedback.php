<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Asset_requested_feedback extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;
    public $details;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($details)
    {
        $this->details = $details;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $subject = ($this->details['final_decision'] == "accept")
            ? 'Asset [' . $this->details['asset_name'] . '] Request Approved: Confirmation'
            : 'Asset [' . $this->details['asset_name'] . '] Request Rejected';

        return $this->subject($subject)
            ->view('mail.asset_requested_feedback');
    }
}
