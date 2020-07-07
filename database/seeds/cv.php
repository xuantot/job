<?php

use Illuminate\Database\Seeder;

class cv extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cv')->delete();
        DB::table('cv')->insert([
            ['id'=>1, 'link_cv'=>"facebook.com", "customer_id"=>"1"],
            ['id'=>2, 'link_cv'=>"youtobe.com", "customer_id"=>"2"],
        ]);
    }
}
