<?php

namespace App\Mail;

use App\Models\Posts;
use App\Models\Websites;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PostPublished extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Posts $post, Websites $website)
    {
        $this->post = $post;
        $this->website = $website;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('post_published', [
            'website' => $this->website,
            'post' => $this->post,
        ]);
    }
}
