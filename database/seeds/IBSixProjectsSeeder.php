<?php

use Illuminate\Database\Seeder;

class IBSixProjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // URBAN
        $sixProjects = array(
            1=>array(
            'infotit'=>array(
                'title'=>array(
                    'en'=>'Overall Planning to Taiyuan Ancient City Historical and Cultural Conservation and Renovation',
                    'zh'=>'太原府城历史文化保护整治提升综合规划'
                ),
                'location'=>array(
                    'en'=>'TaiYuan, ShanXi Province',
                    'zh'=>'山西省太原市'
                ),
                'scale'=>array(
                    'en'=>'unknown',
                    'zh'=>'未知'
                ),
                'time'=>array(
                    'en'=>'2013',
                    'zh'=>'2013'
                ),
                'schedule'=>array(
                    'en'=>'Conceptual Design',
                    'zh'=>'方案设计'
                )
            ),
            'infodetail'=>array(
                'en'=>'Using "Green ring", "water ring" to emphasize the space boundary of Song and Ming dynasty, to reflects the city evolution and its historical value of development of Taiyuan old city. Combined with the Wuyi Road which forming the main axis of the city under feudal etiquette, we focus on the traditional style of House Warlord, Bell and Drum Tower, Taiyuan ancient mosque and the city pattern secondary axis. To appropriately expand the original historical and cultural streets and feature streets, forming the key planning area of this project, and make overall consideration on its function and style etc.',
                'zh'=>'以“绿环”、“水环”强化府城宋、明的空间边界，体现太原府城的城池演变及其所代表的城市发展历史价值。结合五一路形成城市的封建礼制主轴线，重点保护督军府-钟鼓楼-清真寺的传统风貌与府城格局次轴线。将原有历史文化街区与风貌区适当扩大，形成本次规划的重点片区，对其功能、风貌等进行整体考量。以主、次、主题散步道体系串联各历史文化遗存，形成体现府城多元价值的文化空间体系。'
            )
        ),
            2=>array(
                'infotit'=>array(
                    'title'=>array(
                        'en'=>'Feasibility Analysis and Conceptual Planning<br>for the Sunlight Bay World Health Forum and<br>World Health City',
                        'zh'=>'珠海阳光湾世界健康论坛暨阳光湾世界健康城<br>可行性分析和概念性规划'
                    ),
                    'location'=>array(
                        'en'=>'Zhuhai, Guangdong Province',
                        'zh'=>'广东省珠海市'
                    ),
                    'scale'=>array(
                        'en'=>'Conceptual planning land use area 191ha.',
                        'zh'=>'概念性规划用地面积约191ha.'
                    ),
                    'time'=>array(
                        'en'=>'2008',
                        'zh'=>'2008'
                    ),
                    'schedule'=>array(
                        'en'=>'Conceptual Design',
                        'zh'=>'方案设计'
                    )
                ),
                'infodetail'=>array(
                    'en'=>'The project consists of two parts: feasible analysis and conceptual planning.<br>The feasible analysis is to make qualitative analysis to the project background and the development orientation of Zhuhai city; we make an overall research and analysis on regional characteristics, ecological resources, health industry resources, transportation advantages and other aspects of Sanzao town. <br>
						We purpose the concept as core zone, control zone and radiation zone according to owner’s requirement when select the site. And we use Arc GIS software aided design to make quantitative analysis to the land use nature and land condition.<br>
						Conceptual planning land use area is about 191 ha., divided into 4 groups of 9 plots of land. With groups ordered flexibly, it forms an overall planning layout as "one chain among many islands".',
                    'zh'=>'项目分为两部分：可行性分析与概念性规划。<br>可行性分析针对项目背景以及珠海的城市发展定位作定性分析；对于三灶镇的区域特点、生态资源、健康产业资源和交通优势等方面作了全面的调研与分析。项目的具体选址根据甲方要求有针对性地提出了核心区、控制区、辐射区的概念。利用Arc GIS软件辅助设计对用地性质、用地条件进行定量分析。<br>
    					概念性规划用地面积约191ha，分为4大组团9个地块。各项目组团布局有序灵活，形成了“一链多岛”式的总体规划布局。'
                )
            ),
            3=>array(
                'infotit'=>array(
                    'title'=>array(
                        'en'=>'Construction Planning and Design of Traffic Hub Business District in Beijing PingGuoYuan',
                        'zh'=>'北京苹果园交通枢纽商务区修建性规划设计'
                    ),
                    'location'=>array(
                        'en'=>'Shijingshan District, Beijing',
                        'zh'=>'北京石景山区'
                    ),
                    'scale'=>array(
                        'en'=>'650970 M²',
                        'zh'=>'650970 M²'
                    ),
                    'time'=>array(
                        'en'=>'2007',
                        'zh'=>'2007'
                    ),
                    'schedule'=>array(
                        'en'=>'Concept Design',
                        'zh'=>'方案设计'
                    )
                ),
                'infodetail'=>array(
                    'en'=>'In the site, the existing road and the planning road are staggered with each other, furthermore, the irregular edge at the foot of the JinDing Hill as this kind of objective factors make a complex form to its plane layout. Based on this, we gave up the rigid pattern as set up an axis to make the space in symmetry, but take an asymmetric "off axis" as natural means to suit the local conditions, which achieve effects on both function and the form.<br>
						According to the requirement of "Regulatory Detailed Planning", we make analysis of the relations of various functions in the site, and abstracted a "visual landscape axis" which is from the highest point of JinDing Hill Outskirts Park and extended to the core area -- Traffic Hub Business District; take this as the spine, from south to north to derive four functional zones, in fishbone-shape, and all these forming a "one axis with four zones" as the main layout. In general, this is to build the natural resources and city spaces as an organic whole.',
                    'zh'=>'用地内，现状及规划道路方位交错、加之金顶山山脚不规则边缘等客观因素造成了平面格局的复杂形态。鉴于此，本案放弃了以轴线对称手法组织空间的僵化模式，而是采用了自然放松的非对称“泛轴线”手法，因地制宜地取得了肌能与形式的双重成效。<br>
					　　依据“控规”要求，整理用地内的各种功能关系，从中提炼出由金顶山郊野公园制高点向核心区——交通枢纽方向延伸的“视觉景观轴”；并以此为脊柱，从南向北衍生出鱼骨状四大“功能带”，形成了“一轴四带”的主体格局。在宏观上将自然资源与城市空间构建成有机的整体。'
                )
            ),
            4=>array(
                'infotit'=>array(
                    'title'=>array(
                        'en'=>'Planning and Architectural Design of the<br>Great Commercial Center in Datong',
                        'zh'=>'大同市“东小城大型商业中心”规划与建筑设计'
                    ),
                    'location'=>array(
                        'en'=>'Datong, Shanxi Province',
                        'zh'=>'山西省大同市'
                    ),
                    'scale'=>array(
                        'en'=>'689300 M²',
                        'zh'=>'689300 M²'
                    ),
                    'time'=>array(
                        'en'=>'2008',
                        'zh'=>'2008'
                    ),
                    'schedule'=>array(
                        'en'=>'unknown',
                        'zh'=>'未知'
                    )
                ),
                'infodetail'=>array(
                    'en'=>'This project is part of the overall planning of protecting and restoring the Datong old City, which aims to organize and upgrade the commercial center of wholesale and retail mixed-type, while restoring the historical features of it from external morphology.<br>The new commercial center consists of a commercial core and two commercial loops. Cross the commercial core, the pedestrian street links four blocks with different style, each block consists of the courtyard with different size and style, which presents a perfect alley system with both ancient and modern style; surrounding the commercial core, the large commercial space are set up and shapes as annular inner street, divided but continued, with indoor square of different commercial format and different style; finally it becomes a commercial center with ancient and modern feature which can meet modern business needs.',
                    'zh'=>'本工程是属于恢复性保护大同老城总体规划的配合性项目，其目的是将批发零售混杂型商业中心归类升级，同时从外部形态上恢复东小城的历史风貌。<br>新规划的商业中心由一个商业内核及两条商业环线构成。商业内核以十字步行街将四个风情区贯穿起来，每个风情区由不同尺度及风格的院落构成，形成系统完善、今风古韵的巷院体系；大型商业空间布置在商业内核的外围，由一条“分而不断”的环形商业内街贯穿，不同业态与风格的室内广场散落其中；最终形成满足现代商业需求的具有今风古韵特质的商业中心。'
                )
            ),
            5=>array(
                'infotit'=>array(
                    'title'=>array(
                        'en'=>'Renovation of Old City of Drum Tower<br>in Taiyuan City, Shanxi Province',
                        'zh'=>'山西省太原市鼓楼旧城改造'
                    ),
                    'location'=>array(
                        'en'=>'Taiyuan, Shanxi Province',
                        'zh'=>'山西省太原市'
                    ),
                    'scale'=>array(
                        'en'=>'228000 M²',
                        'zh'=>'228000 M²'
                    ),
                    'time'=>array(
                        'en'=>'unknown',
                        'zh'=>'未知'
                    ),
                    'schedule'=>array(
                        'en'=>'unknown',
                        'zh'=>'未知'
                    )
                ),
                'infodetail'=>array(
                    'en'=>'The planning area is about 4.9 ha, consists of hotel, commercial, residential and enterprise club.<br>The site will be designed as a "traditional settlement of commercial culture" and "focus of easy office" with regional features. As designed, the majority of the high-rise office building is placed at the western part of the site, in combination with commercial and recreation, while the eastern part is mainly for commercial and stretches to the western part.<br>The concept of the overall shape is from the original fabric of the site, a rectangular with size and scale transformed to be the theme of the façade of the low-rise commercial building, while the undulating slope roof gives respects to the traditional architecture, and the enlarged Chinese traditional style "lattice window" makes the strong traditional spirit remaining in modern form; the shape of the high-rise office building looks pure, elegant and sober, which follows the theme of "lattice".',
                    'zh'=>'本项目规划区域占地面积约4.9ha，包括酒店、商业、住宅、企业会所等。<br>将本案所在地区打造成为具有浓郁山西色彩的“传统商业文化聚落”和“企业轻型办公聚集地”。规划将大部分高层办公设置在地块西部，商业及休闲为辅，东区以商业为主并一直延伸至西区。<br>整体造型取意于基地原有的肌理感，低层商业区立面以变换比例、尺度的矩形为母题，起伏的坡屋顶向传统建筑致意，放大尺度的传统“花格窗”墙使得传统精神留存于现代形式之中；高层办公楼造型简洁大气，庄重内敛，并延续了格构主题。'
                )
            ),
            6=>array(
                'infotit'=>array(
                    'title'=>array(
                        'en'=>'SunShine Ground of DeHe Century City<br>Conceptual Urban Planning',
                        'zh'=>'山西省临汾市德和世纪城之德和阳光仟亩高尚<br>居住区概念性规划设计方案'
                    ),
                    'location'=>array(
                        'en'=>'Linfen, Shanxi Province',
                        'zh'=>'山西省临汾市'
                    ),
                    'scale'=>array(
                        'en'=>'Total construction area on ground 1512000 M²',
                        'zh'=>'地上总建筑面积1512000 M²'
                    ),
                    'time'=>array(
                        'en'=>'2007',
                        'zh'=>'2007'
                    ),
                    'schedule'=>array(
                        'en'=>'Concept Design Stage',
                        'zh'=>'方案设计阶段'
                    )
                ),
                'infodetail'=>array(
                    'en'=>'With the "new city" design concept as principle, combined with the nature resources and city environmental resources of each plot, we start with the residential density, spatial planning and distribution, construction type, façade style and other aspects, to build a large-scale complex residential district with style and residential product diversity, which enhance the recognizability of each living area and building group, to create a different sense of space and the sense of place.<br>
						In the planning design, combined with such green water landscape environmental design, we improve the quality and image of the city structurally, and build a model of "ecological health resource type city" residential district. This is to implement and response to the overall planning object of Linfen city in year 2007, that is to build an ecological and livable industrial city.',
                    'zh'=>'以“新都市主义”设计理念为原则，结合各地块自然和城市环境资源，从居住密度、空间规划布局、建筑类型及立面风格等多方面着手，构建风格多元化的、居住产品差异化的综合性大型居住区，强化各居住区域及组团的可识别性，营造不同城市空间的领域感和场所感。
						在规划设计中，结合绿化水体等景观环境的设计，结构性的改善了城市品质与形象，构建“资源型城市”居住区生态健康的典范。以贯彻并回应2007年临汾市建设适宜生活的生态工业型城市的规划总体目标。'
                )
            ),
            7=>array(
                'infotit'=>array(
                    'title'=>array(
                        'en'=>'Shanxi Jinzhong Eden City Shopping Park',
                        'zh'=>'山西晋中“伊甸城”购物公园规划设计'
                    ),
                    'location'=>array(
                        'en'=>'Jinzhong, Shanxi Province',
                        'zh'=>'山西省晋中市'
                    ),
                    'scale'=>array(
                        'en'=>'200000 M²',
                        'zh'=>'地上总建筑面积1512000 M²'
                    ),
                    'time'=>array(
                        'en'=>'June, 2014',
                        'zh'=>'2014年06月'
                    ),
                    'schedule'=>array(
                        'en'=>'Conceptual Design',
                        'zh'=>'方案设计'
                    )
                ),
                'infodetail'=>array(
                    'en'=>'Being a commercial land use, the project site is aimed to create an enjoyable and relaxing oasis for people from the city of JinZhong or even TaiYuan. It is in a prime location where ShanXi High School New Campus is located to the South and Northern part is a new town undergoing construction, showing that urban infrastructures are mushrooming in the surrounding areas. <br>To "create a city" is one of our design principles. We used ideas of Academism and Athens city-state to create traces of history and culture. As a result, a "city" in a city is created and prosperity will be achieved.',
                    'zh'=>'项目用地属性为商业用地，依托南侧的山西高校新校区，以及北侧在建的北部新城，城市发展建设已蓬勃展开。我们以世外桃源、城市绿洲的愿景出发，希望在此为晋中乃至太原市创造一座供人们享受生活，放松身心的绿色城区。<br>&nbsp;&nbsp;&nbsp;&nbsp;“造城”是我们在本设计所遵循的出发点之一，以学院派、雅典城邦的设计构思追寻悠远的文化历史脉络，使城中有城，彼此呼应，繁荣昌盛。'
                )
            ));

        $projectsCover = array(
            'URBAN'=>array(
                2=>array(
                    'cover'=>'images/urban/2/p-2.jpg',
                ),
                3=>array(
                    'cover'=>'images/urban/3/p-1.jpg',
                ),
                4=>array(
                    'cover'=>'images/urban/4/p-1.jpg',
                ),
                5=>array(
                    'cover'=>'images/urban/5/p-1.jpg',
                ),
                6=>array(
                    'cover'=>'images/urban/6/p-1.jpg',
                ),
                7=>array(
                    'cover'=>'images/urban/7/p-1.jpg',
                )
            )

        );

        // projects
        $i = 0;
        foreach($sixProjects as $kp => $vp) {
            $cover = '';
            if (isset($projectsCover['URBAN'][$kp])) {
                $cover = $projectsCover['URBAN'][$kp]['cover'];
            }
            $data = [
                'category_id' => 6,
                'cover_url' => $cover,
                'name' => $vp['infotit']['title']['zh'],
                'location' => $vp['infotit']['location']['zh'],
                'scale' => $vp['infotit']['scale']['zh'],
                'year' => $vp['infotit']['time']['zh'],
                'status' => $vp['infotit']['schedule']['zh'],
                'description' => $vp['infodetail']['zh'],
                'sort_order' => $i
            ];
            $pid = DB::table('projects_zh')->insertGetId($data);
            $dataEn = [
                'project_id' => $pid,
                'name' => $vp['infotit']['title']['en'],
                'location' => $vp['infotit']['location']['en'],
                'scale' => $vp['infotit']['scale']['en'],
                'year' => $vp['infotit']['time']['en'],
                'status' => $vp['infotit']['schedule']['en'],
                'description' => $vp['infodetail']['en']
            ];
            DB::table('projects_en')->insert($dataEn);

            // images.
            $imgs = $this->buildImages('URBAN', $kp);
            foreach ($imgs as $kimg => $vimg) {
                $dataImages = [
                    'project_id' => $pid,
                    'thumb_url' => $vimg['little'],
                    'image_url' => $vimg['big'],
                    'sort_order' => $kimg
                ];
                DB::table('projects_image')->insert($dataImages);
            }
            $i++;
        }
    }

    private function buildImages($cat, $group) {

        if($cat == 'URBAN'){
            switch($group){
                case 1: $num = 0; break;
                case 2: $num = 6; break;
                case 3: $num = 21; break;
                case 4: $num = 5; break;
                case 5: $num = 5; break;
                case 6: $num = 7; break;
                case 7: $num = 11; break;
            }
        }

        $imgsArr = array();
        for ($i = 1 ; $i <= $num; $i ++) {
            $imgsArr[] = [
                'little' => 'images/'.$cat.'/'.$group.'/p-'.$i.'.jpg',
                'big' => 'images/'.$cat.'/'.$group.'/pd-'.$i.'.jpg'
            ];
        }
        return $imgsArr;
    }
}
