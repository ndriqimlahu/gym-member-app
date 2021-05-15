<?php

namespace App\Jobs;

use App\Mail\NotifyMemberAfterIsRegisteredEmail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendEmailToMemberAfterIsRegisteredJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $send_email;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($send_email)
    {
        $this->send_email = $send_email;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $email = new NotifyMemberAfterIsRegisteredEmail();
        Mail::to($this->send_email['email'])->send($email);
    }
}
