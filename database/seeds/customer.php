<?php

use Illuminate\Database\Seeder;

class customer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customer')->delete();
        DB::table('customer')->insert([
            ['id'=>1,'email'=>'quangthanh@gmail.com','password'=>bcrypt('123456'),'name'=>'Quang Thanh','address'=>'Hà nội','phone'=>'147258369','type'=>1, 'company_id'=> "1"],
            ['id'=>2,'email'=>'accounta@gmail.com','password'=>bcrypt('123456'),'name'=>'Nguyễn Văn A','address'=>'Hà nội','phone'=>'147258369','type'=>2, 'company_id'=> null],
            ['id'=>3,'email'=>'accountb@gmail.com','password'=>bcrypt('123456'),'name'=>'Nguyễn Văn B','address'=>'Hà nội','phone'=>'0941683922','type'=>1, 'company_id'=>"2"],
            ['id'=>4,'email'=>'accountc@gmail.com','password'=>bcrypt('123456'),'name'=>'Nguyễn Văn C','address'=>'Hà nội','phone'=>'2354885482','type'=>2, 'company_id'=>null],
        ]);
    }
}
