<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $this->call(category::class);
        $this->call(company::class);
        $this->call(customer::class);
        $this->call(cv::class);
        $this->call(jobs::class);
        $this->call(customer_jobs::class);
        $this->call(users_admin::class);
    }
}
