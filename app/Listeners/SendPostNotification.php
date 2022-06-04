<?php

namespace App\Listeners;

use App\Events\NewWebsitePost;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendPostNotification implements ShouldQueue
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
     * @param  \App\Events\NewWebsitePost  $event
     * @return void
     */
    public function handle(NewWebsitePost $event)
    {
        Artisan::call("post:publish $event->post_id");
    }
}
