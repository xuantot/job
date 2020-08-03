<?php

use Illuminate\Database\Seeder;

class jobs extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jobs')->delete();
        DB::table('jobs')->insert([ 
            ['id'=>1, 'job_code'=>"SP01", 'job_name'=>"Kĩ sư tin học", 'salary'=>"250000000", 'experience'=>"3 năm", 'nature'=>"full time", 'info_job'=>"", 'logo'=>"1.svg", 'status'=>0, "category_id"=>"1", 'company_id'=>"1"],
            ['id'=>2, 'job_code'=>"SP02", 'job_name'=>"Kĩ sư Web", 'salary'=>"350000000", 'experience'=>"2 năm", 'nature'=>"full time", 'info_job'=>"", 'logo'=>"2.svg", 'status'=>0, "category_id"=>"2", 'company_id'=>"2"],
            ['id'=>3, 'job_code'=>"SP03", 'job_name'=>"Trưởng phòng kinh doanh", 'salary'=>"250000000", 'experience'=>"1 năm", 'nature'=>"part time", 'info_job'=>"", 'logo'=>"3.svg", 'status'=>0, "category_id"=>"3", 'company_id'=>"3"],
            ['id'=>4, 'job_code'=>"SP04", 'job_name'=>"Giáo viên tin học", 'salary'=>"350000000", 'experience'=>"2 năm", 'nature'=>"part time", 'info_job'=>"", 'logo'=>"4.svg", 'status'=>0, "category_id"=>"4", 'company_id'=>"1"],
            ['id'=>5, 'job_code'=>"SP05", 'job_name'=>"Nhà thiết kế ảnh", 'salary'=>"250000000", 'experience'=>"1 năm", 'nature'=>"full time", 'info_job'=>"", 'logo'=>"5.svg", 'status'=>0, "category_id"=>"5", 'company_id'=>"2"],
        ]);
    }
}
