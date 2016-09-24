<?php

use Illuminate\Database\Seeder;

class IBAboutTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $zh = array(
            'team'=>array(
                'who'=>'团队组成：<br><br>
                    - 具有东西方工作经验的外国建筑师。<br>
                    - 具有海外留学经验或工作经验的海归建筑师。<br>
                    - 中国建筑师。'
            ),
            'philosophy'=>array(

                0=>'简介<br><br>
                不同的文化背景与经验以一种专业而有组织的方式融合在一起，提升建筑设计质量以面对中国繁荣的市场，并考虑当代建筑的价值观和与当地的环境背景。<br><br>',
                1=>'设计流程<br><br>
                建筑应贴近百姓，并是一种地域和社会行为，而不是日常生活中消极的装饰。<br><br>
                我们并没有一个预定的风格或设计，形式或功能都不是指引我们达到最终的设计的全部内容，要考虑项目的不同约束条件（客户的意愿和当地的条件和法规）从而使其成为可行的建筑设计。<br><br>
                这个团对是所有平台的一部分，每个人都将自己的专业知识灌注到设计过程中，这样我们就能推动设计的思考与创新。'
            ),
            'office'=>array(
                0=>'工作方式<br><br>
                    工作方法和过程应负责为每个项目提供高质量和高水准的最好设计。利用现有的工具，首先是人和他们的专业素养，然后用机器作为辅助与延伸。利用工作模型和图片作为视角和理念的延伸。负责传达最好的设计和理念。使创造独特惊人的结果成为可能。<br><br>',
                1=>'可持续发展项目<br><br>引入可持续设计的理念, 促进环境变得更好并解决可负担的可持续的建筑的不断的新的要求。'
            )
        );
        $en = array(
            'team'=>array(
                'who'=>'Team composed by:<br><br>
				- International architects with rich working experience.<br>
				- Chinese architects with oversea education background or working experiences.<br>
				- Chinese architects.'
            ),
            'philosophy'=>array(

                    0=>'Profile<br><br>
				Different cultures and backgrounds converge with their experiences in a professional and organized way to develop architectural design facing the China prosperity and considering the values and background in a contemporary architecture with a local context.<br><br>',
                    1=>'Design Process<br><br>
				Architecture is close to people and should be an act over the territory and the society, not a passive adornment of everyday use.<br>
				We don\'t have a predetermined style or design, not favoring form or function is the integration of the all parts of the design process that should lead us to achive our design, considering the different constraint of a project (client\'s aspirations and local conditions and regulations) to make architecture work.<br><br>
				This team is one of the platforms, having all of them a part of knowledge to give into the design process, so this way we can push forward the design thinking and innovation.'


            ),
            'office'=>array(
                0=>'Work Structure<br><br>
					The method and procedure should be organized to respond to the needs of each project with a high quality and standards, providing the best design. Using the tools we have, first the people and their knowledge, then the machines as an extension. Using physical models and images as extensions of our views and ideas. Taking the responsibility to deliver the best design and develope good ideas. Potentiate the individual characteristics to achieve surprising results.<br><br>',
                1=>'Sustainable Projects<br><br>
					Introduce an idea of sustainable design, promoting a better environment and adressing constant new requirements for affordable and sustainable buildings.'
            )
        );


        // about
        foreach ($zh as $key => $val) {
            if ($key != 'team') {

                foreach ($val as $k => $v) {
                    //zh
                    $id = DB::table('about_zh')->insertGetId([
                        'content' => $v,
                        'position' => $k,
                    ]);

                    //en
                    DB::table('about_en')->insert([
                        'content' => $en[$key][$k],
                        'position' => $k,
                        'about_id' => $id
                    ]);

                }
            }
        }

//        foreach ($en as $key => $val) {
//            if ($key != 'team') {
//
//                foreach ($val as $k => $v) {
//
//                    DB::table('about_zh')->insert([
//                        'content' => $v,
//                        'position' => $k,
//                    ]);
//                }
//            }
//        }

        // team
        $data = [
            'image_url1' => 'images/about/team/1.jpg',
            'image_url2' => 'images/about/team/2.jpg',
            'image_url3' => 'images/about/team/3.jpg',
            'image_url4' => 'images/about/team/4.jpg',
            'content_zh' => $zh['team']['who'],
            'content_en' => $en['team']['who']
        ];
        DB::table('team')->insert($data);
    }
}
