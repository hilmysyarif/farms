<?php

use Illuminate\Database\Seeder;

class IBPublicationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            0=>array(
                'zh'=>'2009年第07期《建筑创作》杂志',
                'en'=>'No.07 07 2009 ARCHICREATION',
                'img'=>array(
                    'zh'=>'images/publications/11.jpg',
                    'en'=>'images/publications/12.jpg'
                )
            ),
            1=>array(
                'zh'=>'2011年第11期《建筑创作》杂志',
                'en'=>'No.11 11 2011 ARCHICREATION',
                'img'=>array(
                    'zh'=>'images/publications/21.jpg',
                    'en'=>'images/publications/22.jpg'
                )
            )
        );

        foreach ($data as $k => $v) {
            $data = [
                'title_zh' => $v['zh'],
                'title_en' => $v['en'],
                'img_url1' => $v['img']['zh'],
                'img_url2' => $v['img']['en'],
                'sort_order' => $k
            ];
            DB::table('publications')->insert($data);
        }
    }
}
