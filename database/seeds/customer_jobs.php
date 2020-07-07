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
            ['jobs_id'=>1, 'customer_id'=>2],
            ['jobs_id'=>1, 'customer_id'=>2],
            ['jobs_id'=>2, 'customer_id'=>3],
            ['jobs_id'=>3, 'customer_id'=>3],
        ]);
    }
}
