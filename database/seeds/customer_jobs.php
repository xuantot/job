<?php

use Illuminate\Database\Seeder;

class customer_jobs extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customer_jobs')->delete();
        DB::table('customer_jobs')->insert([ 
            ['jobs_id'=>1, 'customer_id'=>1],
            ['jobs_id'=>2, 'customer_id'=>1],
            ['jobs_id'=>3, 'customer_id'=>1],
            ['jobs_id'=>4, 'customer_id'=>1],
            ['jobs_id'=>5, 'customer_id'=>1],
        ]);
    }
}
