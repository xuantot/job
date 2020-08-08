<?php

use Illuminate\Database\Seeder;

class Menu extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menu')->delete();
        DB::table('menu')->insert([
            ['id'=>1,'name'=>'Home', 'parent_id' => '0', 'link' => '/', 'created_at' => null, 'updated_at' => null],
            ['id'=>2,'name'=>'Browse Job', 'parent_id' => '0', 'link' => '/job', 'created_at' => null, 'updated_at' => null],
            ['id'=>3,'name'=>'Pages', 'parent_id' => '0', 'link' => '', 'created_at' => null, 'updated_at' => null],
            ['id'=>4,'name'=>'Contact', 'parent_id' => '0', 'link' => '/contact', 'created_at' => null, 'updated_at' => null],
            ['id'=>5,'name'=>'Candidates', 'parent_id' => '3', 'link' => '/job/candidate', 'created_at' => null, 'updated_at' => null],
            ['id'=>6,'name'=>'job details', 'parent_id' => '3', 'link' => '/job/detail', 'created_at' => null, 'updated_at' => null],
        ]);
    }
}
