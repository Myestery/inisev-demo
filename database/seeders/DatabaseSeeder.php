<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Factories\PostsFactory;
use Database\Factories\WebsitesFactory;
use Database\Factories\SubscribersFactory;
use Database\Factories\SubscriptionsFactory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // websites factory
        WebsitesFactory::new()->times(10)->create();
        // subscribers factory
        SubscribersFactory::new()->times(10)->create();
        // subscriptions factory
        SubscriptionsFactory::new()->times(10)->create();
        // posts factory
        PostsFactory::new()->times(10)->create();
    }
}
