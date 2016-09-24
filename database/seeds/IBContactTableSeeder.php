<?php

use Illuminate\Database\Seeder;

class IBContactTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $zh = [
            'address' => '北京市西城区南礼士路66号建威大厦606室&nbsp;&nbsp;&nbsp;&nbsp;邮编 100045',
            'email' => '工作申请：bplat_hr@outlook.com<br>其它事宜：bplatform@outlook.com',
            'telephone' => '010-8802 1000',
            'location_image' => 'images/map.jpg'
        ];

        $id = DB::table('contact_zh')->insertGetId($zh);
        $en = [
            'contact_id' => $id,
            'address' => 'Room 606, No. 66 Nan Li Shi Lu, XiCheng District, Beijing, P.R.C&nbsp;&nbsp;&nbsp;&nbsp; P.C. 100045',
            'email' => 'For Job: bplat_hr@outlook.com<br>For other issue: bplatform@outlook.com',
            'telephone' => '010-8802 1000'
        ];
        DB::table('contact_en')->insert($en);
    }
}
