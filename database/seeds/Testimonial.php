<?php

use Illuminate\Database\Seeder;

class Testimonial extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('testimonial')->delete();
        DB::table('testimonial')->insert([
            ['id'=>1,'name'=>'Home', 'content' => '0', 'avatar' => null, 'created_at' => null, 'updated_at' => null],
            ['id'=>2,'name'=>'Browse Job', 'content' => '0','avatar' => null, 'created_at' => null, 'updated_at' => null],
            ['id'=>3,'name'=>'Pages', 'content' => '0','avatar' => null, 'created_at' => null, 'updated_at' => null],
            ['id'=>4,'name'=>'Contact', 'content' => '0','avatar' => null, 'created_at' => null, 'updated_at' => null],
            ['id'=>5,'name'=>'Candidates', 'content' => '3','avatar' => null, 'created_at' => null, 'updated_at' => null],
            ['id'=>6,'name'=>'job details', 'content' => '3','avatar' => null, 'created_at' => null, 'updated_at' => null],
        ]);
    }
}
