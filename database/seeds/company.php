<?php

use Illuminate\Database\Seeder;

class company extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('company')->delete();
        DB::table('company')->insert([
            ['id'=>1,'name'=>'Công ty TNHH Hà Nội', 'address'=>"Hà Nội", 'hotline'=>"0147258369"],
            ['id'=>2,'name'=>'Công ty TNHH TP HCM', 'address'=>"Hồ Chí Minh", 'hotline'=>"0123456789"],
            ['id'=>3,'name'=>'Công ty TNHH Đã Nẵng', 'address'=>"Đà Nẵng", 'hotline'=>"0987654321"],
        ]);
    }
}
