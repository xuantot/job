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
            ['id'=>1, 'name_file'=>"a" ,"note"=> "a" ,"customer_id"=>"1"],
            ['id'=>2, 'name_file'=>"b" ,"note"=> "a", "customer_id"=>"2"],
        ]);
    }
}
