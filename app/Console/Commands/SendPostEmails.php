<?php

namespace App\Console\Commands;

use App\Models\Subscriptions;
use App\Services\PostEmailNotifierService;
use Illuminate\Console\Command;

class SendPostEmails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'post:publish {post_id}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Publish the publish through the email Route';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle(PostEmailNotifierService $PostEmailNotifierService)
    {
        $PostEmailNotifierService->broadcast($this->argument('post_id'));
    }

}
