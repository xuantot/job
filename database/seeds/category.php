<?php

use Illuminate\Database\Seeder;

class category extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category')->delete();
        DB::table('category')->insert([
            ['id'=>1,'name'=>'Design & Creative'],
            ['id'=>2,'name'=>'Marketing'],
            ['id'=>3,'name'=>'Telemarketing'],
            ['id'=>4,'name'=>'Software & Web'],
            ['id'=>5,'name'=>'Administration'],
        ]);
    }
}
