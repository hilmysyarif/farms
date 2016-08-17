<?php

use Illuminate\Database\Seeder;

class IBProjectsDataExtra extends Seeder
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
                'en'=>'INTERIOR',
                'zh'=>'室&nbsp;&nbsp;内'
            ),
            1=>array(
                'en'=>'LANDSCAPE',
                'zh'=>'景&nbsp;&nbsp;观'
            ),
        );

        $projectsData = array(
            'INTERIOR'=>array(
                1=>array(
                    'infotit'=>array(
                        'title'=>array(
                            'en'=>'Beijing West Chang\'an Street No. 88 Plaza<br>Decoration and Renovation Concept Design',
                            'zh'=>'北京西长安街88号大厦装修改造项目方案设计'
                        ),
                        'location'=>array(
                            'en'=>'No.88 West Chang’an Street',
                            'zh'=>'北京西长安街88号'
                        ),
                        'scale'=>array(
                            'en'=>'Total construction area 122000 M²',
                            'zh'=>'总建筑面积12.2万平方米'
                        ),
                        'time'=>array(
                            'en'=>'unknown',
                            'zh'=>'未知'
                        ),
                        'schedule'=>array(
                            'en'=>'Under Construction',
                            'zh'=>'在建'
                        )
                    ),
                    'infodetail'=>array(
                        'no_text_indent'=>1,//不缩进
                        'en'=>'Function repair<br>
						The functional design is not limited to the functions listed in the design book, but from rationality and efficiency for everyday use for functional expansion and further enrichment of the functional modules and streamline systems.<br>
						Space bridge<br>
						The most direct feeling of buildings on people is the feeling of space. The graphic design has focused on spatial scale proportion and control as well as space atmosphere creation.<br>
						Facade renovation<br>
						The facade renovation contents of the design are specific, to transform the white finish block on the upper part of the north side main entrance under the premise of no change of the overall facade. The design has removed the white finish blocks and restored original appearance of this facade to ensure the harmonization and consistency of the whole facade of the building.',
                        'zh'=>'功能修补<br>
						本次功能设计不仅仅局限于任务书所列功能需求，而是从日常使用的合理性和使用效率出发，进行功能扩容，进一步丰富功能模块和流线系统。<br>
						空间弥合<br>
						建筑之于人最直接的感觉便是空间感受，本次设计将空间尺度比例及控制和空间气氛的营造作为平面设计的重点之一。<br>
						立面改造<br>
						本次设计的立面改造内容较为特异，即在不改变整体立面的前提下，改造建筑北侧主入口上部的白色饰面块。本次实际只将白色饰面块拆除，复原此立面原貌。以保证大厦整体立面的协调统一。'
                    )
                ),
                2=>array(
                    'infotit'=>array(
                        'title'=>array(
                            'en'=>'Taiyuan Railway Information System Research and Development Tower',
                            'zh'=>'太原铁路旅客信息服务集成控制系统研发大厦'
                        ),
                        'location'=>array(
                            'en'=>'High and new technology industrial development zone, Taiyuan, Shanxi Province',
                            'zh'=>'山西省太原市高新区'
                        ),
                        'scale'=>array(
                            'en'=>'Total construction area 28647.87 M²',
                            'zh'=>'总建筑面积28647.87 M²'
                        ),
                        'time'=>array(
                            'en'=>'2012',
                            'zh'=>'2012'
                        ),
                        'schedule'=>array(
                            'en'=>'Under Construction',
                            'zh'=>'在建'
                        )
                    ),
                    'infodetail'=>array(
                        'en'=>'The façade of the construction follows modern and pithiness style, emphasizing simplicity, pure, full of flavor of modernity. It is a successful combination of the tower and skirt building, the external surface use light gray aluminum single plate in staggered form, in accordance with the modulus it is divided into different sized body gray double-layer hollow LOW-E glass interspersed, producing an effect as regmatic bar-code, its fashion appearance can bring rich light and visual effects to the indoor space. The facade design achieved the green energy-saving effect.',
                        'zh'=>'建筑外立面为现代简约风格，强调简洁、纯净、充满现代气息的立面效果。塔楼与裙房浑然一体，外墙使用浅灰色铝单板交错排列，按照模数分成不同大小的本体灰色双层中空LOW-E玻璃窗穿插其中，形成错动的条形码效果，外观时尚的同时对室内大空间形成丰富的光影和视觉效果。立面设计，达到绿色节能的效果。'
                    )
                ),
                3=>array(
                    'infotit'=>array(
                        'title'=>array(
                            'en'=>'Beijing Dongzhimen Xiangheyuan Sales Center',
                            'zh'=>'北京东直门香河园售楼处'
                        ),
                        'location'=>array(
                            'en'=>'Beijing',
                            'zh'=>'北京市'
                        ),
                        'scale'=>array(
                            'en'=>'40000 M²',
                            'zh'=>'40000 M²'
                        ),
                        'time'=>array(
                            'en'=>'2013',
                            'zh'=>'2013'
                        ),
                        'schedule'=>array(
                            'en'=>'Pending',
                            'zh'=>'停滞'
                        )
                    ),
                    'infodetail'=>array(
                        'en'=>'',
                        'zh'=>''
                    )
                )
            ),
            'LANDSCAPE'=>array(
                1=>array(
                    'infotit'=>array(
                        'title'=>array(
                            'en'=>'Yantai Raycom Oriental Seattle',
                            'zh'=>'烟台融科迩海'
                        ),
                        'location'=>array(
                            'en'=>'Yantai, ShanDong Province',
                            'zh'=>'山东省烟台市'
                        ),
                        'scale'=>array(
                            'en'=>'100000 M²',
                            'zh'=>'景观面积100000 M²'
                        ),
                        'time'=>array(
                            'en'=>'From 2011 to Now',
                            'zh'=>'2011年至今'
                        ),
                        'schedule'=>array(
                            'en'=>'Under Construction',
                            'zh'=>'在建'
                        )
                    ),
                    'infodetail'=>array(
                        'en'=>'',
                        'zh'=>''
                    )
                ),
                2=>array(
                    'infotit'=>array(
                        'title'=>array(
                            'en'=>'High-rise area, Wuxi Sunac Dream of City',
                            'zh'=>'无锡理想城市高层区'
                        ),
                        'location'=>array(
                            'en'=>'Wuxi, Jiangsu Province',
                            'zh'=>'江苏省无锡市'
                        ),
                        'scale'=>array(
                            'en'=>'54000 M²',
                            'zh'=>'景观面积54000 M²'
                        ),
                        'time'=>array(
                            'en'=>'2009-2010',
                            'zh'=>'2009-2010年'
                        ),
                        'schedule'=>array(
                            'en'=>'Completed',
                            'zh'=>'完成'
                        )
                    ),
                    'infodetail'=>array(
                        'en'=>'',
                        'zh'=>''
                    )
                ),
                3=>array(
                    'infotit'=>array(
                        'title'=>array(
                            'en'=>'Wuxi Sunny Garden, 6th Phase',
                            'zh'=>'无锡融创熙园六期'
                        ),
                        'location'=>array(
                            'en'=>'Wuxi, Jiangsu Province',
                            'zh'=>'江苏省无锡市'
                        ),
                        'scale'=>array(
                            'en'=>'60000 M²',
                            'zh'=>'景观面积60000 M²'
                        ),
                        'time'=>array(
                            'en'=>'2010-2011',
                            'zh'=>'2010-2011年'
                        ),
                        'schedule'=>array(
                            'en'=>'Completed',
                            'zh'=>'完成'
                        )
                    ),
                    'infodetail'=>array(
                        'en'=>'',
                        'zh'=>''
                    )
                ),
                4=>array(
                    'infotit'=>array(
                        'title'=>array(
                            'en'=>'Beijing Origenal Town',
                            'zh'=>'北京华远静林湾'
                        ),
                        'location'=>array(
                            'en'=>'Beijing',
                            'zh'=>'北京市'
                        ),
                        'scale'=>array(
                            'en'=>'25000 M²',
                            'zh'=>'景观面积25000 M²'
                        ),
                        'time'=>array(
                            'en'=>'2004-2005',
                            'zh'=>'2004-2005年'
                        ),
                        'schedule'=>array(
                            'en'=>'Completed',
                            'zh'=>'完成'
                        )
                    ),
                    'infodetail'=>array(
                        'en'=>'unknown',
                        'zh'=>'unknown'
                    )
                ),
                5=>array(
                    'infotit'=>array(
                        'title'=>array(
                            'en'=>'Beijing 2008 Olympics Road Race Roadside Strip-shaped Park',
                            'zh'=>'北京奥运公路自行车赛沿线带状公园'
                        ),
                        'location'=>array(
                            'en'=>'Beijing',
                            'zh'=>'北京市'
                        ),
                        'scale'=>array(
                            'en'=>'400000 M²',
                            'zh'=>'景观面积400000 M²'
                        ),
                        'time'=>array(
                            'en'=>'2006-2007',
                            'zh'=>'2006-2007年'
                        ),
                        'schedule'=>array(
                            'en'=>'Completed',
                            'zh'=>'完成'
                        )
                    ),
                    'infodetail'=>array(
                        'en'=>'',
                        'zh'=>''
                    )
                ),
                6=>array(
                    'infotit'=>array(
                        'title'=>array(
                            'en'=>'Environmental Transformation of China Institute of Atomic Energy',
                            'zh'=>'中国原子能科学研究院环境改造'
                        ),
                        'location'=>array(
                            'en'=>'Beijing',
                            'zh'=>'北京市'
                        ),
                        'scale'=>array(
                            'en'=>'400000 M²',
                            'zh'=>'景观面积400000 M²'
                        ),
                        'time'=>array(
                            'en'=>'2008-2010',
                            'zh'=>'2008-2010年'
                        ),
                        'schedule'=>array(
                            'en'=>'Completed',
                            'zh'=>'完成'
                        )
                    ),
                    'infodetail'=>array(
                        'en'=>'',
                        'zh'=>''
                    )
                ),
                7=>array(
                    'infotit'=>array(
                        'title'=>array(
                            'en'=>'Landscape Transformation of Beijing Jinyu Badaling Spa Resort',
                            'zh'=>'北京金隅八达岭温泉度假村景观改造'
                        ),
                        'location'=>array(
                            'en'=>'Beijing',
                            'zh'=>'北京市'
                        ),
                        'scale'=>array(
                            'en'=>'120000 M²',
                            'zh'=>'景观面积120000 M²'
                        ),
                        'time'=>array(
                            'en'=>'2010-2011',
                            'zh'=>'2010-2011年'
                        ),
                        'schedule'=>array(
                            'en'=>'Unknown',
                            'zh'=>'未知'
                        )
                    ),
                    'infodetail'=>array(
                        'en'=>'',
                        'zh'=>''
                    )
                ),
                8=>array(
                    'infotit'=>array(
                        'title'=>array(
                            'en'=>'Mei LanFang Theater',
                            'zh'=>'北京梅兰芳大剧院'
                        ),
                        'location'=>array(
                            'en'=>'Beijing',
                            'zh'=>'北京市'
                        ),
                        'scale'=>array(
                            'en'=>'12000 M²',
                            'zh'=>'景观面积12000 M²'
                        ),
                        'time'=>array(
                            'en'=>'2006-2007',
                            'zh'=>'2006-2007年'
                        ),
                        'schedule'=>array(
                            'en'=>'Completed',
                            'zh'=>'完成'
                        )
                    ),
                    'infodetail'=>array(
                        'en'=>'',
                        'zh'=>''
                    )
                ),
                9=>array(
                    'infotit'=>array(
                        'title'=>array(
                            'en'=>'Huamao Center at Tianjin Binhai New Area',
                            'zh'=>'天津滨海新区华贸中心'
                        ),
                        'location'=>array(
                            'en'=>'Tianjin',
                            'zh'=>'天津市'
                        ),
                        'scale'=>array(
                            'en'=>'5000 M²',
                            'zh'=>'景观面积5000 M²'
                        ),
                        'time'=>array(
                            'en'=>'2011-2012',
                            'zh'=>'2011-2012年'
                        ),
                        'schedule'=>array(
                            'en'=>'Completed',
                            'zh'=>'完成'
                        )
                    ),
                    'infodetail'=>array(
                        'en'=>'',
                        'zh'=>''
                    )
                ),
            ),
        );


        $projectsCover = array(
            'INTERIOR'=>array(
                1=>array(
                    'cover'=>'images/interior/1/p-1.jpg',
                ),
                2=>array(
                    'cover'=>'images/interior/2/p-1.jpg',
                ),
                3=>array(
                    'cover'=>'images/interior/3/p-1.jpg',
                ),
            ),
            'LANDSCAPE'=>array(
                1=>array(
                    'cover'=>'images/landscape/1/p-1.jpg',
                ),
                2=>array(
                    'cover'=>'images/landscape/2/p-4.jpg',
                ),
                3=>array(
                    'cover'=>'images/landscape/3/p-1.jpg',
                ),
                4=>array(
                    'cover'=>'images/landscape/4/p-1.jpg',
                ),
                5=>array(
                    'cover'=>'images/landscape/5/p-1.jpg',
                ),
                6=>array(
                    'cover'=>'images/landscape/6/p-1.jpg',
                ),
                7=>array(
                    'cover'=>'images/landscape/7/p-1.jpg',
                ),
                8=>array(
                    'cover'=>'images/landscape/8/p-1.jpg',
                ),
                9=>array(
                    'cover'=>'images/landscape/9/p-1.jpg',
                )
            )
        );

        foreach($data as $k => $v) {
            // projects_category
//            $id = DB::table('projects_category_zh')->insertGetId([
//                'name' => $v['zh'],
//                'sort_order' => $k
//            ]);
//            DB::table('projects_category_en')->insert([
//                'category_id' => $id,
//                'name' => $v['en']
//            ]);

            // projects
            $i = 0;
            foreach ($projectsData as $kp => $vp) {
                if ($kp == $v['en']) {
                    foreach ($vp as $kpp => $vpp) {
                        if ($kp == 'INTERIOR') {
                            $id = 7;
                        } else {
                            $id = 8;
                        }
                        $cover = $projectsCover[$kp][$kpp]['cover'];
                        $data = [
                            'category_id' => $id,
                            'cover_url' => 'data/upload/'.$cover,
                            'name' => $vpp['infotit']['title']['zh'],
                            'location' => $vpp['infotit']['location']['zh'],
                            'scale' => $vpp['infotit']['scale']['zh'],
                            'year' => $vpp['infotit']['time']['zh'],
                            'status' => $vpp['infotit']['schedule']['zh'],
                            'description' => $vpp['infodetail']['zh'],
                            'sort_order' => $i
                        ];
                        $pid = DB::table('projects_zh')->insertGetId($data);
                        $dataEn = [
                            'project_id' => $pid,
                            'name' => $vpp['infotit']['title']['en'],
                            'location' => $vpp['infotit']['location']['en'],
                            'scale' => $vpp['infotit']['scale']['en'],
                            'year' => $vpp['infotit']['time']['en'],
                            'status' => $vpp['infotit']['schedule']['en'],
                            'description' => $vpp['infodetail']['en']
                        ];
                        DB::table('projects_en')->insert($dataEn);

                        // images.
                        $imgs = $this->buildImages($kp, $kpp);
                        foreach ($imgs as $kimg => $vimg) {
                            $dataImages = [
                                'project_id' => $pid,
                                'thumb_url' => 'data/upload/'.$vimg['little'],
                                'image_url' => 'data/upload/'.$vimg['big'],
                                'sort_order' => $kimg
                            ];
                            DB::table('projects_image')->insert($dataImages);
                        }
                        $i++;
                    }
                }
            }
        }
    }

    private function buildImages($cat, $group) {
        if($cat == 'INTERIOR'){
            $num = 6;
            switch ($group) {
                case 1: $num = 16;break;
                case 2: $num = 2;break;
                case 3: $num = 11;break;
            }
        }elseif($cat == 'LANDSCAPE'){
            switch($group){
                case 1: $num = 12; break;
                case 2: $num = 8; break;
                case 3: $num = 14; break;
                case 4: $num = 8; break;
                case 5: $num = 8; break;
                case 6: $num = 5; break;
                case 7: $num = 4; break;
                case 8: $num = 8; break;
                case 9: $num = 8; break;
            }
        }

        $imgsArr = array();
        for ($i = 1 ; $i <= $num; $i ++) {
            $imgsArr[] = [
                'little' => 'images/'.strtolower($cat).'/'.$group.'/p-'.$i.'.jpg',
                'big' => 'images/'.strtolower($cat).'/'.$group.'/pd-'.$i.'.jpg'
            ];
        }
        return $imgsArr;
    }
}
