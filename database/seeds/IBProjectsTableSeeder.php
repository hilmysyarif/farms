<?php

use Illuminate\Database\Seeder;

class IBProjectsTableSeeder extends Seeder
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
                'en'=>'CULTURAL SPORTS',
                'zh'=>'文化体育'
            ),
            1=>array(
                'en'=>'COMMERCIAL',
                'zh'=>'商&nbsp;&nbsp;业'
            ),
            2=>array(
                'en'=>'OFFICE',
                'zh'=>'办&nbsp;&nbsp;公'
            ),
            3=>array(
                'en'=>'RESIDENTIAL',
                'zh'=>'住&nbsp;&nbsp;宅'
            ),
            4=>array(
                'en'=>'MEDICAL EDUCATION',
                'zh'=>'医疗教育'
            ),
            5=>array(
                'en'=>'URBAN',
                'zh'=>'规&nbsp;&nbsp;划'
            ),
            6=>array(
                'en'=>'INTERIOR',
                'zh'=>'室&nbsp;&nbsp;内'
            ),
            7=>array(
                'en'=>'LANDSCAPE',
                'zh'=>'景&nbsp;&nbsp;观'
            ),
            8=>array(
                'en'=>'COMPETITIONS',
                'zh'=>'竞&nbsp;&nbsp;赛'
            )
        );

        $projectsData = array(
            'COMMERCIAL'=>array(
                1=>array(
                    'infotit'=>array(
                        'title'=>array(
                            'en'=>'Xi\'an International Finance Center',
                            'zh'=>'国瑞·西安金融中心'
                        ),
                        'location'=>array(
                            'en'=>'Xi\'An, ShanXi Province',
                            'zh'=>'陕西省西安市'
                        ),
                        'scale'=>array(
                            'en'=>'285717 M²',
                            'zh'=>'285717 M²'
                        ),
                        'time'=>array(
                            'en'=>'2014',
                            'zh'=>'2014'
                        ),
                        'schedule'=>array(
                            'en'=>'Under Construction',
                            'zh'=>'在建'
                        )
                    ),
                    'infodetail'=>array(
                        'en'=>'',
                        'zh'=>'<p>国瑞·西安金融中心项目位于西安市高新区，作为现阶段规划当中西北最高的建筑，塔楼将以简洁而优雅的标志性造型，在西安的城市新兴区拔地而起。它的尺度和比例使建筑体量坚挺、高耸，方形的平面贯彻所有楼层，笔直的线条、简洁的构造，形成了城市空间中控制性的建筑形象。</p><p>在建筑顶部（第七十一层），我们设计了为公众开放的空中活动平台，在这里人们可以享受西安城市上空360 度的视觉景观。同时其作为包容四方的城市公共空间，向市民提供了一个超越传统概念的城市公共领域。</p><p>在建筑顶部，我们设计了斜面高空LED 大屏幕。瑰丽多变的影像与城市夜景交相辉映，为西安的天际线增添了一抹亮色，带给来访者独特的感观体验，成为西安城市夜空中的新亮点。</p>'
                    )
                ),
                2=>array(
                    'infotit'=>array(
                        'title'=>array(
                            'en'=>'Shanghai IMIX Park (Xinhui Plaza)',
                            'zh'=>'上海大融城（新荟广场）'
                        ),
                        'location'=>array(
                            'en'=>'Jiading District, Shanghai',
                            'zh'=>'上海市嘉定区'
                        ),
                        'scale'=>array(
                            'en'=>'Construction area: 126441.85 M² (Ground area 78503.85 M², Underground area 47938 M²)',
                            'zh'=>'建筑面积：126441.85 M² （其中：地上建筑面积：78503.85 M²，地下建筑面积：47938 M²）'
                        ),
                        'time'=>array(
                            'en'=>'2011',
                            'zh'=>'2011'
                        ),
                        'schedule'=>array(
                            'en'=>'Completed',
                            'zh'=>'完成'
                        )
                    ),
                    'infodetail'=>array(
                        'en'=>'In recent years, Shanghai Jiading District with unique geographical conditions and historical, cultural, infrastructure and other advantages has attracted many domestic and overseas investors, and became a widely publicized hot spot for investment. The project will create pleasant space and atmosphere with experience-based and interactive format portfolio to establish new standards of living in the area and a new concept of family life, build one-stop integrated area and life shopping center with the richest business forms, the most fashionable brands, and the most beautiful style to meet the daily needs of residents in Jiading, with radiation over surrounding visitors and workers.',
                        'zh'=>'近年来，上海嘉定区凭借特殊的区位条件和历史、人文、基础设施等方面的优势，吸引了海内外众多商家前来投资创业，成为广受瞩目的投资热土。本项目将通过富有体验性和互动性的业态组合打造舒适宜人的空间氛围，以营造区域生活新标准和家庭生活新概念为目标，建成能全方位满足嘉定区域内常驻居民日常所需、辐射周边访客与工作者的业态最为丰富、品牌最具时尚、风格最为靓丽的一站式综合区域生活购物中心。'
                    )
                ),
                3=>array(
                    'infotit'=>array(
                        'title'=>array(
                            'en'=>'Beijing GuoRui Hademen Building',
                            'zh'=>'北京国瑞哈德门'
                        ),
                        'location'=>array(
                            'en'=>'ChongWen District, Beijing',
                            'zh'=>'北京市崇文区'
                        ),
                        'scale'=>array(
                            'en'=>'Ground area 85800 M²',
                            'zh'=>'地上面积85800 M²'
                        ),
                        'time'=>array(
                            'en'=>'2008',
                            'zh'=>'2008'
                        ),
                        'schedule'=>array(
                            'en'=>'Under Construction',
                            'zh'=>'在建'
                        )
                    ),
                    'infodetail'=>array(
                        'en'=>'This project located in the heart of ChongWen central business district, with ground area of ​​85800 M². ChongWenMenWai Avenue is on the western part; the Ming Dynasty City Wall Ruins Park is located on its northern part by crossing the ChongWenMen East Street; the GuoRui City is located on the south side by across the HuaShi ShangTouTiao Street; on its east side, across the HuaShi DongErTiao Street, it has a reserved courtyard. In architectural design, the concept is as "to place", that we placed four spaces on different elevation of the body of the building, and put courtyard into these place, to give a succession of the surrounding scenes, if consider in a more larger scale, the scenes also echo the traditional street 500 meters away on the west, this is in response to a variety historical and cultural resources of the city.',
                        'zh'=>'本案位于北京市崇文区核心商业区的中心地段，地上面积85800 M²。西临崇文门外大街，北隔崇文门东大街与明城墙遗址公园相望，南侧隔花市上头条与国瑞城相邻，东侧隔花市东二条为一处保留的四合院。建筑设计中，运用装置的理念，在整个建筑体中设计了四个标高不同的空中院落，将四合院收入其中，成为周边传统院落的延续，并在更大的城市尺度上与西面500米处的传统街区相呼应，以回应城市丰富多彩的历史文化资源。'
                    )
                ),
                4=>array(
                    'infotit'=>array(
                        'title'=>array(
                            'en'=>'Beijing Marriott Hotel and Hainan Airlines<br>Headquarters of Beijing Hainan Airlines',
                            'zh'=>'北京海航大厦万豪酒店及海航总部'
                        ),
                        'location'=>array(
                            'en'=>'Beijing',
                            'zh'=>'北京市'
                        ),
                        'scale'=>array(
                            'en'=>'91500 M²',
                            'zh'=>'91500 M²'
                        ),
                        'time'=>array(
                            'en'=>'unknown',
                            'zh'=>'未知'
                        ),
                        'schedule'=>array(
                            'en'=>'Completed',
                            'zh'=>'完成'
                        )
                    ),
                    'infodetail'=>array(
                        'en'=>'The total construction area of the project is 91500 M2, the east part is HNA Group Headquarters Office Building, which has 23 floors on the ground; the west part is Beijing Marriott Northeast, five-Star Hotel, which has 24 floors. The project completed at the end of year 2008.<br>Beijing Marriott Northeast Hotel and HNA Group Headquarters Office Building reflect the owner’s real requirements of both image and the function. After the consideration and compare between the high and outstanding image, and the economic requirements, its height, nearly 100 M, is determined naturally. In order to create the function and the image to Beijing Marriott Hotel as well as HNA Group Headquarters Office independently, in accordance with the requirements of the owner, we take a Twin Tower layout.',
                        'zh'=>'该工程总建筑面积91500 M2，东半部为海航集团总部办公楼，地上23层；西半部为海航大厦万豪五星级酒店，地上24层。该项目于2008年底竣工。<br>北京海航大厦万豪酒店及海航总部（科航大厦）建筑真实地反映了业主的形象要求与使用要求。在形象高耸突出与经济性要求之间的权衡自然地决定了该建筑高度接近100M。为使万豪酒店和海航总部两大部分功能与形象各自独立，按照业主要求采用双塔分置的布局方式。'
                    )
                ),
                5=>array(
                    'infotit'=>array(
                        'title'=>array(
                            'en'=>'Gongzhufen Shopping Complex (Guohai Plaza)',
                            'zh'=>'公主坟综合商业大厦（国海广场）'
                        ),
                        'location'=>array(
                            'en'=>'Beijing',
                            'zh'=>'北京'
                        ),
                        'scale'=>array(
                            'en'=>'260000 M²',
                            'zh'=>'260000 M²'
                        ),
                        'time'=>array(
                            'en'=>'2006',
                            'zh'=>'2006'
                        ),
                        'schedule'=>array(
                            'en'=>'Completed',
                            'zh'=>'完成'
                        )
                    ),
                    'infodetail'=>array(
                        'en'=>'The purpose of the design is to fully solve the problem from the original design, and based on taking full advantage of the existing construction condition, we reorganize the layout of the architecture on the function, spatial form, transportation systems and other aspects, which strive to create a new city landmark with complex functions as office, commercial, dining & entertainment and residential, on the western part of Beijing City.<br>The building group is bright and punchy, pure and full of vitality. The shape of the building focus on high-grade office with harmonious and stable style, the vertical-line frame-type curtain wall make distinct contrast with the pure glass curtain wall, which express the sense of tall and straight of the building.',
                        'zh'=>'本次设计旨在全面解决原设计中遗留的问题，在充分利用现有建设条件的基础上，从功能布局、空间形态及交通系统等多方面重新组织建筑群体的布局形式，力求创造北京城市西区集办公、商业、餐饮娱乐及居住为一体的城市新地标。<br>整个建筑群体简洁、明快、朴实而富于活力。建筑造型突出高档办公建筑和谐稳重的气质，纯净的玻璃幕墙与竖向线条的框架式幕墙形成鲜明的对比，表达出了建筑的挺拔感。'
                    )
                )
            ),
            'OFFICE'=>array(
                1=>array(
                    'infotit'=>array(
                        'title'=>array(
                            'en'=>'Beijing Wangfujing Western Hall',
                            'zh'=>'北京市王府井西部会馆'
                        ),
                        'location'=>array(
                            'en'=>'Wangfujing west avenue, Beijing',
                            'zh'=>'北京市王府井西大街'
                        ),
                        'scale'=>array(
                            'en'=>'79014 M²',
                            'zh'=>'79014 M²'
                        ),
                        'time'=>array(
                            'en'=>'2011',
                            'zh'=>'2011'
                        ),
                        'schedule'=>array(
                            'en'=>'Concept Design Stage',
                            'zh'=>'方案设计阶段'
                        )
                    ),
                    'infodetail'=>array(
                        'en'=>'Having the old city area to the West and Wangfujing Street to the East, Wangfujing Western Hall possesses great commercial and cultural value, which is suitable for a high-end commercial complex to develop.<br>Setbacks, building dimensions etc. were taken into consideration because of the scenery of the Forbidden City and traditional houses in the West, in order to reduce incompatibility of new buildings in the historical city. Retailers on ground floor will extend the structure of the old city area by transforming traditional large retailers into more flexible ones, bringing vitality to commercial activities. When large ones are divided into medium ones, it increases rental flexibility, improves lighting and ventilation, as well as increases working quality. <br>Simple shapes are organized randomly, creating a "sky garden" for people to relax. For office area, glass facades and sun-blocking structures fulfill needs for a comfortable and efficient workplace. Heavier materials like wood and metal as façade are used for retailers in ground floor to create high quality shopping, which is in line with the overall shopping experience of Wangfujing street.',
                        'zh'=>'王府井西部会馆项目用地西侧与老城区相邻,东侧为王府井大街，具有优良的商业价值和文化价值，适合打造高端商务办公综合业态。<br>
						方案通过退台、体量对比等手法对西侧故宫景观和传统院落进行退让，以减少新建筑对城市的压迫；底层商业通过延续旧城肌理，将传统大空间商业划分为更加灵活的商业形态，有效延展了商业界面，提高了商业活力；将上部大尺度体量切分为更加合理的中尺度办公单元，增加了办公布局租赁的灵活性，也优化了采光、通风等物理条件，提高了办公品质。<br>
						造型以简单的体块进行错落变化，形成了若干供人们休憩交流的“空中院落”，办公部分以简洁的玻璃幕墙及遮阳系统进行维护，适合现代企业对高效舒适办公环境的要求。底层商业采用木材和金属等较为厚重的立面材质，营造出高品质的商业气氛，符合王府井大街的定位。'
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
                            'en'=>'unknown',
                            'zh'=>'未知'
                        ),
                        'schedule'=>array(
                            'en'=>'unknown',
                            'zh'=>'未知'
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
                            'en'=>'BaoShang Bank Business Mansion',
                            'zh'=>'包商银行商务大厦'
                        ),
                        'location'=>array(
                            'en'=>'Baotou, Inner Mongolia',
                            'zh'=>'内蒙古包头市新都市区建设路与建华路交叉口西南角'
                        ),
                        'scale'=>array(
                            'en'=>'Total construction area 252724.28 M²
							(Ground area:159435.30 M² , Underground area:93288.98 M²)',
                            'zh'=>'建筑面积：252724.28 M²
							（其中：地上建筑面积：159435.30 M² ，地下建筑面积： 93288.98 M² ）'
                        ),
                        'time'=>array(
                            'en'=>'2011',
                            'zh'=>'2011'
                        ),
                        'schedule'=>array(
                            'en'=>'Under Construction',
                            'zh'=>'在建'
                        )
                    ),
                    'infodetail'=>array(
                        'en'=>'The project has fully integrated vitality and energy of the upcoming new administrative, cultural and commercial clusters in the surrounding construction land, made efforts to construct an international financial service center relying on the unique business model and industry chain of BaoShang Bank, themed on financial services in the broad sense, intensive, experience-based, one-stop by offering financial office services, financial information services, financial products and derived demand services. Meanwhile, the project is also Experiment Center and Development Center oriented towards financial market demands to incubate "innovative financial products".',
                        'zh'=>'本项目充分融合了建设用地周边即将形成的，崭新的行政、文化和商业集群的活力与能量，着力建构一个以包商银行独特的业务模式及产业链条为依托，以广义的金融服务为主题的，集约化、体验型、一站式的，集金融办公服务、金融资讯服务、金融产品服务以及衍生需求服务为一体的国际金融中心。同时，本项目也是以金融市场需求为导向，孵化“创新金融产品”的实验中心与发展中心。'
                    )
                ),
                4=>array(
                    'infotit'=>array(
                        'title'=>array(
                            'en'=>'JinShang Bank Building',
                            'zh'=>'晋商银行大楼'
                        ),
                        'location'=>array(
                            'en'=>'No.172 Yingze Avenue, Taiyuan, Shanxi Province',
                            'zh'=>'山西省太原市迎泽大街172号'
                        ),
                        'scale'=>array(
                            'en'=>'Total construction area 100597 M²',
                            'zh'=>'总建筑面积 100597 M²'
                        ),
                        'time'=>array(
                            'en'=>'2011',
                            'zh'=>'2011'
                        ),
                        'schedule'=>array(
                            'en'=>'Under Construction',
                            'zh'=>'在建'
                        )
                    ),
                    'infodetail'=>array(
                        'en'=>'In order to adapt the future development and providing the service to the whole country, also in order to meet the office needs as setting large office and meeting room, thus we linked the original two towers to a slab-type apartment building, to create a large meeting room with column-free on the connection part of two towers. In order to weaken the bulky feeling of floorslab, present the original design concept of two towers, while retaining the original facade with vertical lines of towers, and giving new material to its connection part, we used the transparent ultra-white glass, to make the façade of whole building in a unitive style, and allow changes on building block, not limited to one style.',
                        'zh'=>'为适应“晋商银行”未来的发展和面向全国的需要。为满足晋商银行对大开间办公及会议的要求，将原两座塔楼连结为一座板楼，连接部分为无柱大开间会议。为了削弱板楼的笨重感，体现原方案双塔的设计理念，在保留原塔楼立面竖向线条的同时，赋予连接体部分新的材质，使用通透的超白玻璃，使整体立面风格既统一，同时兼有体块的变化，不拘一格。'
                    )
                ),
                5=>array(
                    'infotit'=>array(
                        'title'=>array(
                            'en'=>'Beijing Wangfujing Harbor City',
                            'zh'=>'北京王府井海岸城'
                        ),
                        'location'=>array(
                            'en'=>'Wangfujing, Beijing',
                            'zh'=>'北京王府井'
                        ),
                        'scale'=>array(
                            'en'=>'Total construction area 221066 M²',
                            'zh'=>'总建筑面积221066M²'
                        ),
                        'time'=>array(
                            'en'=>'2011',
                            'zh'=>'2011'
                        ),
                        'schedule'=>array(
                            'en'=>'Concept Design Stage',
                            'zh'=>'概念设计阶段'
                        )
                    ),
                    'infodetail'=>array(
                        'en'=>'Since the Romans, the atrium has been a hole in a house or a building that injects light and air into the centre. In Wangfujing Street, the proposal is to create a container of artificiality where to produce an endless possibility of experience. <br>
						The approach to the project started thinking about space conditions; social, urban, and architectonical. The mass of program is manipulated with the objective to create a sectional urbanism where opposite activities and uses are set up in a successive sequence; a block which can contain the whole world. <br>
						The proposal is base on building a gross-five facades using the required retail, hotel, and apartments square metres, in order to generate an inside space. A system of void spaces introduces a spatial configuration which brings daylight into the cube, and views from/to the surroundings. <br>
						700 metres east, the historical Chinese Architecture -The Forbidden City- generously shows the possibilities to create a core protected by a built perimeter; creating its own world; its own views.',
                        'zh'=>'从罗马人开始，中庭就被用作为房屋引入光线和空气的孔洞。在王府井大街上，其目的则是创造出一个人工的，充满着无限体验的可能性的容器。<br>
						这个项目着手于思考关于空间、社会、城市和建筑的现状。项目的主要目的是运用客观的存在来创造一个城市化的片段——其中可以建立一个成功的相反的活动和功能的序列，一个可以包涵整个世界的体块。<br>
						建议建立一个包含五个立面，能够满足零售，酒店和公寓需要的总面积。为了能够产生内部空间，一个空洞系统的配置为这个立方体引入了日光和对周围环境的视野。<br>
						向东700米，古代中国建筑——紫禁城——很好的诠释了创造一个被外围建筑保护的核的可能性；穿凿它自己的世界，自己的视角。'
                    )
                ),
                6=>array(
                    'infotit'=>array(
                        'title'=>array(
                            'en'=>'DaTong Highway Toll and Supporting Office Area',
                            'zh'=>'大同市得大高速公路改线工程雁同路互通收费站及配套办公区'
                        ),
                        'location'=>array(
                            'en'=>'DaTong, ShanXi Province',
                            'zh'=>'山西省大同市'
                        ),
                        'scale'=>array(
                            'en'=>'Construction area of living quarters: 2729 M²',
                            'zh'=>'生活区建筑面积：2729 M²'
                        ),
                        'time'=>array(
                            'en'=>'2011',
                            'zh'=>'2011'
                        ),
                        'schedule'=>array(
                            'en'=>'Completed',
                            'zh'=>'完成'
                        )
                    ),
                    'infodetail'=>array(
                        'en'=>'The Datong Highway Toll project was commissioned to our studio and was the first projects we developed involving this kind of structures and spaces, which took us to a deep research in to existing similar elements and how to design a moment in the territory that divides and impacts the landscape.<br>
 					The design looked for exception but achieving elegant simplicity, an iconic structure yet sober and extended to the office support building. The slender covers like blades hang over columns, on a dissimulated fragile contact and connecting to the ground, providing shadow and protection over the toll area.<br>
 					Materializing this project took us to find the expression of fastness of times, that the local condition provide us and into detail development and research for this type of structure.',
                        'zh'=>'本项目委托我们工作室来完成，这是我们对此类结构和空间进行开发的第一个项目，使我们对现有的相似的要素以及如何在地域上进行划分及它对景观的分割和影响上进行了深入的研究。<br>
					设计看似特殊，但实际简洁而优雅，一个标志性的结构简洁朴素，这种风格也延伸到配套办公区域。延展的屋面如片状搭在立柱上，连接处很精巧，立柱直到地面，为收费区提供阴凉和保护。<br>
					通过实现项目这一过程，带领我们找到使时间凝住的表达，当地的自然条件也为我们做此类结构的进一步开发和研究提供了便利。'
                    )
                ),
                7=>array(
                    'infotit'=>array(
                        'title'=>array(
                            'en'=>'International Design Competition for Lian Tang/Heung Yuen Wai Boundary Control Point Passenger Terminal Building.<br>',
                            'zh'=>'莲塘/香园围口岸联检大楼概念设计国际竞赛<br>'
                        ),
                        'location'=>array(
                            'en'=>'SZ-HK Boundary',
                            'zh'=>'深圳香港边界'
                        ),
                        'scale'=>array(
                            'en'=>'308800 M² ',
                            'zh'=>'308800 M²'
                        ),
                        'time'=>array(
                            'en'=>'2012',
                            'zh'=>'2012'
                        ),
                        'schedule'=>array(
                            'en'=>'Completed',
                            'zh'=>'完成'
                        )
                    ),
                    'infodetail'=>array(
                        'en'=>'Two Islands Meet Here.<br>
						<b>Concept from the Context</b><br>
						Based on the existing environment, making a border disappear in an architectural and psychological way is our original for this design. First step is a "NEW RIVER BANK". Second step is "BRIDGE AS A HILL".<br>
						<b>Circulation</b><br>
						Three kinds of circulations are involved in the terminal: Cargoes, Private Cars/Coach and Passengers.<br>
						<b>Structure</b><br>
						The terminal is constructed as an arched spatial structure system.<br>
						<b>Sustainability design</b><br>
						The terminal is designed under the consideration of sustainability related with three factors: Shading, Cooling and Green Environmental design.',
                        'zh'=>'在这里相遇<br>
						概念由山水环境而生——结合基地周围环境，在建筑和心理层面消除边界是本设计的起点。首先，改善水环境。然后，呼应山势。<br>
						流线组织上——深港两地采用两地两检。分为客车、人行、货车三种流线<br>。
						结构形式——本设计为大跨度空间拱结构<br>。
						可持续发展设计——遮阳 空调 环境，是可持续性发展绿色设计考虑的三个主要方面。',
                        'no_text_indent'=>1
                    )
                ),
                8=>array(
                    'infotit'=>array(
                        'title'=>array(
                            'en'=>'Futian Port, Shenzhen',
                            'zh'=>'深圳福田口岸'
                        ),
                        'location'=>array(
                            'en'=>'Futian District, Shenzhen, Guangdong Province',
                            'zh'=>'广东省深圳市福田区'
                        ),
                        'scale'=>array(
                            'en'=>'Total construction area 83297.5 M²',
                            'zh'=>'总建筑面积83297.5 M²'
                        ),
                        'time'=>array(
                            'en'=>'2005',
                            'zh'=>'2005年'
                        ),
                        'schedule'=>array(
                            'en'=>'Completed',
                            'zh'=>'完成'
                        )
                    ),
                    'infodetail'=>array(
                        'en'=>'In order to improve the Customs Clearance condition between Chinese mainland and HongKong (Currently Luohu port cannot meet the requirement of the increasing amount of Customs Clearance, with the old equipments, less gates, which were built in early years.), Chinese government build this modern and large-scale port, also it’s the key project of Shenzhen. It’s located in Huanggangsha wharf, Futian district, Shenzhen, with a total construction area of 82035 M2, one floor underground, six floors on the ground, the floor underground is for the subway terminal and the port auxiliary office, 1 floor to 6 floor are for the inspection hall and office space, the Customs Clearance capacity in peak day is 250000.',
                        'zh'=>'深圳福田口岸是2007年香港回归十周年献礼工程的“一号工程”，由地上的口岸联检大楼与其地下的深圳地铁4号线终点福田站两大部分构成，经由横跨深圳河的人行通道桥与香港落马洲口岸相连。口岸日通关设计客流量为25万人次，高峰期日客流量最高可承担30万人次，为深港继罗湖口岸后的第二大过境门户型口岸。<br>福田口岸联检大楼交通流线组织:设出入境大厅各一层，通过上下两层分流出入境人流。地铁四号线福田站为地下站台厅,首层地铁大厅设于联检楼内、并设首层夹层作为地铁分流厅与出境人流相对应。联检楼北侧的线性交通大厅将地铁与出入境大厅有机地联系为一个整体,通过自动扶梯的上下空间组织,合理地将出入境人流进行分离和疏导。'
                    )
                ),
                9=>array(
                    'infotit'=>array(
                        'title'=>array(
                            'en'=>'JinMei International Hotel',
                            'zh'=>'晋煤国际大酒店方案设计'
                        ),
                        'location'=>array(
                            'en'=>'unknown',
                            'zh'=>'未知'
                        ),
                        'scale'=>array(
                            'en'=>'unknown',
                            'zh'=>'未知'
                        ),
                        'time'=>array(
                            'en'=>'2012',
                            'zh'=>'2012'
                        ),
                        'schedule'=>array(
                            'en'=>'unknown',
                            'zh'=>'未知'
                        )
                    ),
                    'infodetail'=>array(
                        'en'=>'The site area of the project is 29922m2, with 25970m2 construction area and 3955m2 collected land area of the road.<br>The site is located in a flat landscape. North-East part of the site is slightly higher than the South-West part by 2m. The gradient is 1%, which is suitable for construction. To the south of the site, it will be NanShiDian relocation area which is still undergoing planning process. JinChengMeiYe Company Recreational Center and JinCheng City BeiShi Police Station are located to the north.',
                        'zh'=>'未知'
                    )
                ),
                10=>array(
                    'infotit'=>array(
                        'title'=>array(
                            'en'=>'Office Building of The Chinese Academy <br>of Agricultural Sciences',
                            'zh'=>'中国农业科学院科技产业开发楼'
                        ),
                        'location'=>array(
                            'en'=>'Haidian District, Beijing',
                            'zh'=>'北京市海淀区'
                        ),
                        'scale'=>array(
                            'en'=>'30447 M²',
                            'zh'=>'30447 M²'
                        ),
                        'time'=>array(
                            'en'=>'2006',
                            'zh'=>'2006'
                        ),
                        'schedule'=>array(
                            'en'=>'Completed',
                            'zh'=>'完成'
                        )
                    ),
                    'infodetail'=>array(
                        'en'=>'Combined with comprehensive layout requirements, and fully consider the possibilities of the development and change of office space in its full life cycle, we arrange the public area and the related equipment room in the center of the building main body, while put office area around and near to the exterior walls, ensures a total area of office space, at the same time make all office space with good lighting. The most important innovative point of this project is – no suspended ceiling over office space, it obtained the effect with more concise, sophisticated, comfortable, economy, and innovation. It takes homogeneous fabric as the main expression of the facade, straight and strong sense of line is full of metaphor to scientific rigour.',
                        'zh'=>'结合多局室的综合布局要求，充分考虑办公楼全寿命周期中空间发展与变化的可能性，将建筑内部的公用部分，及相关的设备用房等布置在建筑主体的中央，将办公区靠近外墙分置于建筑的四周，保证了办公面积的总量，同时使所有办公空间拥有良好的采光条件。本工程最重要的创新点——办公空间无吊顶设计，其取得了更加简洁、洗练、舒适、经济、创新的效果。立面以匀质的肌理为主要表达方式，平直而线条感极强的立面处理充满对科学严谨性的隐喻。'
                    )
                )
            ),
            'RESIDENTIAL'=>array(
                1=>array(
                    'infotit'=>array(
                        'title'=>array(
                            'en'=>'Langfang Feng River International Golf Club Training Center and Ancillary Building',
                            'zh'=>'廊坊凤河国际高尔夫俱乐部培训中心及其附属楼工程'
                        ),
                        'location'=>array(
                            'en'=>'LangFang, HeBei Province',
                            'zh'=>'河北省廊坊市'
                        ),
                        'scale'=>array(
                            'en'=>'133300 M²',
                            'zh'=>'133300 M²'
                        ),
                        'time'=>array(
                            'en'=>'2012',
                            'zh'=>'2012'
                        ),
                        'schedule'=>array(
                            'en'=>'Pending',
                            'zh'=>'停滞'
                        )
                    ),
                    'infodetail'=>array(
                        'en'=>"Langfang Development Zone is located between the Chinese capital of Beijing and China's largest port city of Tianjin, with the \"golden corridor\" Jingjintang Expressway running across.<br>
						The base is surrounded by lush golf courses, scenic and full of fresh air, hence a prime venue for leisure.<br>
						Reception, starting functions are directly in the outdoor area and need shelter from the sun and rain. \"Chaos Space\" with interior and exterior boundaries blurred is a form of space adapted to the local all-weather characteristics, and space of flow for indoor and outdoor space transition if golf, allowing the users to wait , gather, start and have rest in nature space.",
                        'zh'=>'<p>廊坊开发区坐落在中国首都北京与中国最大的港口城市天津之间。被誉为“黄金走廊”京津塘高速公路穿区而过。</p><p>
						基地被绿草如茵的高尔夫球场包围，景色宜人，空气清新，是人们日常休闲度假的不二场所。</p><p>
						接待、出发等功能区域直接在室外且需遮阳、避雨。室内外界限模糊的“混沌空间”是全天候适应当地气候特征的空间形式之一，也是高尔夫运动室内外空间过度所必要的流动空间，让使用者在直接能触摸到大自然的空间中等候，集合，出发以及茶憩休闲。</p>'
                    )
                ),
                2=>array(
                    'infotit'=>array(
                        'title'=>array(
                            'en'=>'Experiencing the culture of Ice City:<br> Phase 2 and Phase 3 of Lihui Meiluowan<br> Residential Quarters in Haerbin',
                            'zh'=>'哈尔滨立汇·美罗湾住宅小区二期、三期'
                        ),
                        'location'=>array(
                            'en'=>'Haerbin, Heilongjiang Province',
                            'zh'=>'黑龙江省哈尔滨市'
                        ),
                        'scale'=>array(
                            'en'=>'700000 M² (3 Phases)',
                            'zh'=>'700000 M² （分三期）'
                        ),
                        'time'=>array(
                            'en'=>'2007',
                            'zh'=>'2007'
                        ),
                        'schedule'=>array(
                            'en'=>'Completed',
                            'zh'=>'完成'
                        )
                    ),
                    'infodetail'=>array(
                        'en'=>'Herringbone shape with double landscape axis goes from 1st phase to 3rd phase, transparent, bright and magnificent, this concept of creating main landscape is what both parties insist. The arrangement of the buildings should follow the main landscape axis. Most of them are mid-rise building.<br>The product positioning is commercial residential building mainly for the urban wage-earners, the majority of the apartment are in small and medium-size.<br>The façade, base on Nordic modern minimalist style, refine the symbol elements form it, simplify, evolve and integrate with modern minimalist architectural style.',
                        'zh'=>'人字形双景观轴从一期贯穿三期，通透壮丽，这也是我们和甲方一致坚定的主景观打造理念。建筑的排布走势也要围绕着主景观轴展开。小区大部分为多层住宅。<br>产品定位面向城市工薪族的商品房，中小户型的比例占主导。<br>立面造型上以北欧现代简约风格为基底，从中提炼符号元素，进行简化、演变与现代简约建筑风格相融合。'
                    )
                ),
                3=>array(
                    'infotit'=>array(
                        'title'=>array(
                            'en'=>'Schematic Design of Beijing Yuyuan Mansion',
                            'zh'=>'北京玉渊府设计方案'
                        ),
                        'location'=>array(
                            'en'=>'Beijing',
                            'zh'=>'北京市'
                        ),
                        'scale'=>array(
                            'en'=>'Total planning area 66000 M²',
                            'zh'=>'规划总建筑面积66000 M²'
                        ),
                        'time'=>array(
                            'en'=>'2003',
                            'zh'=>'2003'
                        ),
                        'schedule'=>array(
                            'en'=>'Conceptual Design',
                            'zh'=>'方案设计'
                        )
                    ),
                    'infodetail'=>array(
                        'en'=>"It will be designed as an upper-class community with regional culture. It is in a special geographical location, in the focus of two city axis. It is very worthy of attention either from the angle of urban long-term development, or from cityscape.<br>Continuing the new century axis which cross the China Millennium Monument while link the north and south city, the main entrance of the community and the high-grade club set up from this location, with the design of the landscape, it presents a city axis visual channel, to enjoy the ancient and fashion, honor and prestige.",
                        'zh'=>'将其打造成为符合区域人文底蕴的高档社区。本案的地理位置特殊，处于两条城市轴线的焦点上。从城市长期发展角度和城市景观角度来说都是很值得关注的。<br>方案中延续了纵穿中华世纪坛的南北城市级“新世纪”轴线，在此位置上设置小区的主入口及小区高档会所，并通过景观设计形成城市轴线视觉通道。居住成为一种古老与时尚、尊贵与品位的融合。'
                    )
                ),
                4=>array(
                    'infotit'=>array(
                        'title'=>array(
                            'en'=>'Beijing Huafa Yiyuan Residential Complex (Beiyuan Mingzhu)',
                            'zh'=>'北京华发颐园综合住宅小区（北苑明珠）'
                        ),
                        'location'=>array(
                            'en'=>'Beijing',
                            'zh'=>'北京市'
                        ),
                        'scale'=>array(
                            'en'=>'142818 M²',
                            'zh'=>'142818 M²'
                        ),
                        'time'=>array(
                            'en'=>'2004',
                            'zh'=>'2004'
                        ),
                        'schedule'=>array(
                            'en'=>'Completed',
                            'zh'=>'完成'
                        )
                    ),
                    'infodetail'=>array(
                        'en'=>"The market positioning of the project is high-grade residential quarter, with fine decoration housing to deliver.<br>It has some innovative ideas in public space design and house plans design of residential buildings. For the design of the basic plans of the apartment, we strengthen the design principle as \"limited space, unlimited living\". Then take full advantage of the objective conditions of fine decoration to make architecture and furniture integrated with each other, and design movable light partition wallboard in central part of the room, pull it, the four living space can be changed accordingly, which not only integrate the environmental elements, improve the integration between architecture and furniture, but also improve the quality of life. Make the concept of the overall architecture with high completion embodied in behavioral research.",
                        'zh'=>'项目市场定位为高档住宅小区，精装修交房。<br>本项目在居住建筑的公共空间设计和户型设计上都有一些创新的理念。公寓的基本户型在设计中强化“空间虽小，生活不打折”的设计原则。然后充分利用精装修交房的客观条件将其中的建筑、家具一体化，室内中央设计了可移动的轻质隔墙。拉动隔墙，四个生活空间段形成的室内空间就随着变化，整合了环境要素，提高了建筑与家具之间的融合性，同时也拓展提高了生活的质量。将“高完成度”的“整体建筑”设计理念体现在行为研究上。'
                    )
                ),
                5=>array(
                    'infotit'=>array(
                        'title'=>array(
                            'en'=>'Phase 2 of Yuanhengyuan Residential<br>Quarters in Beijing (Jinshang Jiayuan)',
                            'zh'=>'北京元亨苑住宅小区二期工程（金尚嘉园）'
                        ),
                        'location'=>array(
                            'en'=>'Beijing',
                            'zh'=>'北京'
                        ),
                        'scale'=>array(
                            'en'=>'200000 M²',
                            'zh'=>'200000 M²'
                        ),
                        'time'=>array(
                            'en'=>'2005',
                            'zh'=>'2005'
                        ),
                        'schedule'=>array(
                            'en'=>'Completed',
                            'zh'=>'完成'
                        )
                    ),
                    'infodetail'=>array(
                        'en'=>"This project locates in the residential community, around the site there have a large number of residential communities, with complete in infrastructure, convenient in traffic, it is a mature residential community.<br>The majority of the apartment take \"three living room and one sitting room\" layout, slab-type apartment building as its solution, and ensure a southern orientation, good exposure, emphasizes comfort and economy, traffic area is reduced on the premise of comfort, with a reasonable segregation of living area from common activity area, and a reasonable segregation of cleaning, to drive up the utilization.<br>The facade uses modern minimalist architectural language and unified wile lively element to enhance the wholeness of residential area, the steady colors shows the elegant tasty even based on cost control, which create a living environment of lively, pleasant as well as modern style.",
                        'zh'=>'本方案为小区内住宅项目，用地附近有大量住宅小区，生活配套设施完善，交通便捷，是一成熟的居住社区。<br>本方案以大三居为主，采用通透的板楼形式，尽量保证南北向通透，强调舒适性和经济性，在保障舒适度的前提下压缩交通面积，合理划分动静分区，清洁分区，提高使用率。<br>立面上用现代简约的建筑语言和统一明快的元素加强住宅区的整体感，沉稳的色调可以使建筑在控制造价的基础上突现高贵感，打造明朗宜人具有时代风格的人居环境。'
                    )
                ),
            ),
            'CULTURAL SPORTS'=>array(
                1=>array(
                    'infotit'=>array(
                        'title'=>array(
                            'en'=>'Marine sports Base/Marine Navigation Sports School for 26th World University Games, Shenzhen',
                            'zh'=>'深圳第26届世界夏季大学生运动会海上运动基地暨航海运动学校工程'
                        ),
                        'location'=>array(
                            'en'=>'LongGang District, ShenZhen, Guangdong Province, China',
                            'zh'=>'中国广东省深圳市龙岗区'
                        ),
                        'scale'=>array(
                            'en'=>'27180.00 M²',
                            'zh'=>'27180.00 M²'
                        ),
                        'time'=>array(
                            'en'=>'2007',
                            'zh'=>'2007'
                        ),
                        'schedule'=>array(
                            'en'=>'Completed',
                            'zh'=>'完成'
                        )
                    ),
                    'infodetail'=>array(
                        'en'=>'The sailing, sailboard venues and auxiliary constructions is composed of three project, these are "Maritime Sports Base" for sailboard venues, "Competition Infrastructures in QiXing Bay" for sailing venues, and "Marine Navigation Sports School" for auxiliary constructions.<br>
The total land area of “Maritime Sports Base" is 3.79 hM², the base area is divided into seven functional areas according to the technological process and the requirements of the Games, these are venue operation area, sports competition area, athletes and team official area, venue concierge area, TV broadcasting area, media area and audience activity area.<br>
“Marine Navigation Sports School" is one of the important auxiliary constructions for the sailing and sailboard event of the Games and will be the operation supporting facility after the Games.<br>
The Competition Infrastructures in QiXing Bay is the sailing tournament facilities of the 26th World University Games in Shenzhen, undertaking Universiade maritime events with the "Maritime Sports Base".',
                        'zh'=>'<p>大运会帆船、帆板比赛场馆及配套设施工程由三个项目组成，分别是帆板比赛场馆“海上运动基地”，帆船比赛场馆“七星湾分赛区比赛设施工程”，赛事配套项目“航海运动学校”。</p><p>
“海上运动基地”总用地面积3.79hM²，基地场地按工艺流程及赛会需求共划分为七大功能区域，分别为场馆运营区、体育竞赛区、运动员及随队官员区、场馆礼宾区、电视转播区、新闻媒体区和观众活动区。</p><p>
“航海运动学校” 是大运会帆船、帆板比赛项目的重要配套及赛后运营保障设施。</p><p>
	“七星湾分赛区临时比赛设施工程”是深圳第二十六届世界大学生夏季运动会帆船比赛项目的赛会设施，与帆板比赛场馆“海上运动基地”共同承担大运会海上比赛项目。</p>'
                    )
                ),
                2=>array(
                    'infotit'=>array(
                        'title'=>array(
                            'en'=>'China Taiyuan Coal Transaction Center',
                            'zh'=>'中国（太原）煤炭交易中心'
                        ),
                        'location'=>array(
                            'en'=>'Taiyuan, Shanxi Province, China',
                            'zh'=>'中国山西省，太原市'
                        ),
                        'scale'=>array(
                            'en'=>'114000 M² (1st phase)',
                            'zh'=>'14000 M² （一期）'
                        ),
                        'time'=>array(
                            'en'=>'2007',
                            'zh'=>'2007'
                        ),
                        'schedule'=>array(
                            'en'=>'Completed',
                            'zh'=>'完成'
                        )
                    ),
                    'infodetail'=>array(
                        'en'=>'Located in the southwest direction of the intersection of Taiyuan Changfeng Street and Binhe West Road, China Taiyuan Coal Transaction Center is in the northern part of Taiyuan Changfeng Business District. With the whole construction land area of 44.2 hectare, the first phase of the project has a total scale of about 114,000 square meters, including two major components: the international exhibition center and the transaction building.<br>
						Using circularly centralized layout, the exhibition center organically combines the registration hall, central exhibition hall and six categorized exhibition halls in a large round saucer-like construction. The transaction building comprises two round circular annexes and one rectangle tower.',
                        'zh'=>'中国（太原）煤炭交易中心位于太原市长风街与滨河西路交汇处的西南方位，处于太原市长风商务区的北端。整个项目建设用地44.2公顷，一期总规模约11.4万㎡，包括国际展览中心和交易大楼两大部分。<br>
						展览中心采用环形集中式布局，将登录大厅、中心展馆和六个类型化展馆有机组织在一个圆形的“碟”状巨构之内。交易大楼由两个圆形体量裙房和一栋矩形塔楼组成。'
                    )
                ),
                3=>array(
                    'infotit'=>array(
                        'title'=>array(
                            'en'=>'Design competition of Culture and Arts Center at Shekou Sea World, Shenzhen, China',
                            'zh'=>'深圳海上世界文化艺术中心设计竞赛'
                        ),
                        'location'=>array(
                            'en'=>'Shenzhen, Guangdong Province, China',
                            'zh'=>'中国广东省深圳市'
                        ),
                        'scale'=>array(
                            'en'=>'28778 M²',
                            'zh'=>'28778 M²'
                        ),
                        'time'=>array(
                            'en'=>'2014',
                            'zh'=>'2014'
                        ),
                        'schedule'=>array(
                            'en'=>'Conceptual Design',
                            'zh'=>'概念设计'
                        )
                    ),
                    'infodetail'=>array(
                        'en'=>'Located in the southwest direction of the intersection of Taiyuan Changfeng Street and Binhe West Road, China Taiyuan Coal Transaction Center is in the northern part of Taiyuan Changfeng Business District. With the whole construction land area of 44.2 hectare, the first phase of the project has a total scale of about 114,000 square meters, including two major components: the international exhibition center and the transaction building.<br>
						Using circularly centralized layout, the exhibition center organically combines the registration hall, central exhibition hall and six categorized exhibition halls in a large round saucer-like construction. The transaction building comprises two round circular annexes and one rectangle tower.',
                        'zh'=>'本项目是以艺术博物馆，高端商业为主，并配以艺术品储藏功能为一体的综合性商业文化建筑。项目建设用地面积26,161 平方米，建筑面积28,778 平方米。通过开放的公共共享空间，以及水环境的利用，充分发挥山海风情的独特魅力，依托滨海岸线建设亲水宜人的公众乐园，在这样一个湿润燥热的沿海城市拥有一份难得的宁静之地。项目位于深圳蛇口海上世界城市综合体核心商业区域，其北临望海路，可远眺大南山；南临滨海岸线，是深圳十五公里滨海岸线休闲长廊的起点；周边有海上世界环船商业休闲酒吧街区、超甲级写字楼、五星级酒店、高尚住宅区、大型公共绿地公园及滨海景观休闲岸线等。'
                    )
                ),
                4=>array(
                    'infotit'=>array(
                        'title'=>array(
                            'en'=>'Nanjing Jinniu Lake Aquatic Sport Base of YOG',
                            'zh'=>'南京金牛湖青奥会水上运动基地'
                        ),
                        'location'=>array(
                            'en'=>'Nanjing, Jiangsu Province',
                            'zh'=>'江苏省南京市'
                        ),
                        'scale'=>array(
                            'en'=>'unknown',
                            'zh'=>'未知'
                        ),
                        'time'=>array(
                            'en'=>'2012',
                            'zh'=>'2012'
                        ),
                        'schedule'=>array(
                            'en'=>'Almost Completed',
                            'zh'=>'基本建成'
                        )
                    ),
                    'infodetail'=>array(
                        'en'=>'The design of Nanjing Jinniu Lake Aquatic Sport Base of YOG was attributed to Platform B after the competition, which located on the bank of the Jinniu Lake on a slightly sloped terrain.<br>The proposal try to reflect the consideration on the space nature creates and the man built environment, looking for a way to integrate both. This way a platform that stands from the terrain and becomes a privileged spot for gathering and oversees the lake seam more suitable then a paramount building, to achieved formal exception by the local condition and program requirements.<br>
						Project included the master plan study for the temporary facilities supporting the competition during the YOG (Youth Olympic Games) and the permanent building that would be converted into a hotel and marina after the Games.',
                        'zh'=>'<p>南京金牛湖青奥会水上运动基地设计在设计竞赛后交由B平台完成，本项目位于金牛湖沿岸一处稍微倾斜的地带。</p><p>
						本方案尝试表现对自然空间和人工建造两者的综合考量，找到一个合适的切入点将两者融合。从地块变为赛会的特许场地，我们收集并仔细考量湖面的角度，结合当地条件及项目要求，创造与众不同的建筑。</p><p>
						本项目包括对青奥会临时配套设施总体规划及赛后永久性建筑的研究，即在青奥会结束后改建成酒店和水族馆。</p>'
                    )
                ),
                5=>array(
                    'infotit'=>array(
                        'title'=>array(
                            'en'=>'Beijing Huai Rou Taoist Temple',
                            'zh'=>'北京怀柔区二道关村白云川旅游项目<br>控制性详细规划方案设计'
                        ),
                        'location'=>array(
                            'en'=>'Huairou District, Beijing',
                            'zh'=>'北京市怀柔区'
                        ),
                        'scale'=>array(
                            'en'=>'3000 M²',
                            'zh'=>'3000 M²'
                        ),
                        'time'=>array(
                            'en'=>'2012',
                            'zh'=>'2012'
                        ),
                        'schedule'=>array(
                            'en'=>'unknown',
                            'zh'=>'未知'
                        )
                    ),
                    'infodetail'=>array(
                        'en'=>'The Taoist Temple is located in ErDaoGuanCun, JiuDuHe in Huai Rou District of Beijing. HuaiRou is a district with beautiful scenery and comfortable weather, and has been praised as "the pearl of the capital\'s suburb". Being a beautiful satellite city, HuaiRou is surrounded by mountains and rivers. The grand Great Wall, primary forest, clean air, fresh water can all be found, where is an ideal place for human to dwell. Being located 60km away from the city center when counting point to point, the project site is located on the South-North axis of Beijing and within 2-hour commuting distance of Beijing. The construction is built according to traditional site plan and architectural style, while underground structure adopts modern earth-sheltered architecture. There is a blend of tradition as physical appearance and modern as concept, depicting the central idea of yin and yang of Taoism. ',
                        'zh'=>'道观位于北京市怀柔区九渡河镇二道关村，怀柔境内风光秀丽，气候宜人，素有“京郊明珠”的美誉。怀柔是一座美丽的卫星城，青山绿水绕半城。这里有俊美的长城，茂密的原始次生林，洁净的空气和纯净的水，是最适合人类生存发展的地方。项目基地正位于北京市区南北中轴线上，距离市区中心直线距离约60公里，处在京郊2小时黄金圈内。地面建筑遵循传统道观布局以及建筑制式，地下建筑设计为现代覆土建筑。体现传统建筑为体，现代建筑为用的设计思路，同时表达道家阴阳合德的中心思想。'
                    )
                ),
                6=>array(
                    'infotit'=>array(
                        'title'=>array(
                            'en'=>'DaTong Library',
                            'zh'=>'大同市图书馆'
                        ),
                        'location'=>array(
                            'en'=>'Cultural Center Area, YuDong New Area, DaTong, ShanXi Province',
                            'zh'=>'山西省大同市御东新区文化中心区'
                        ),
                        'scale'=>array(
                            'en'=>'22197.66 M²',
                            'zh'=>'22197.66 M²'
                        ),
                        'time'=>array(
                            'en'=>'2010',
                            'zh'=>'2010'
                        ),
                        'schedule'=>array(
                            'en'=>'Under Construction',
                            'zh'=>'在建'
                        )
                    ),
                    'infodetail'=>array(
                        'en'=>'The design concept of DaTong Library is from the YunGang Grottoes, one of the three most famous ancient Buddhist sculptural sites of China.
Datong library will become an exciting building with reproducing the Grottoes space either from its inside and also from its outside. While continuing the distant context from Wu Zhou Mountain, its incomparable sense of sculpture presents its unique character as embracing modern life and serving common people. The silent YunGang Grottoes, continuous archaic Chinese rhymes, a new imposing library, treasure of knowledge. It passes down the Chinese traditional culture and raises the curtain of culture exchange between China and foreign countries, the library will stay with the ancient YunGang Grottoes in harmony.',
                        'zh'=>'<p>大同市图书馆的设计构思源于云冈石窟--蜚声世界的中国早期佛教造像石窟。</p><p>
				大同图书馆将成为一个自内而外再现石窟空间的激动人心的建筑。在延续源自武周山麓的悠远文脉同时，其无与伦比的雕塑感又呈现出拥抱现代生活，服务当代百姓的独特姿态。幽幽云冈石窟，绵绵不绝古韵，巍巍图书新馆，滔滔知识窖藏。上承中华文韵之积淀，下启中外文化交融之新幕，图书馆将与千年古窟鲽鹣齐飞，琴瑟和谐。</p>'
                    )
                ),
                7=>array(
                    'infotit'=>array(
                        'title'=>array(
                            'en'=>'Xu Bei Hong Museum',
                            'zh'=>'徐悲鸿纪念馆改造工程'
                        ),
                        'location'=>array(
                            'en'=>'No.53, Xin Jie Kou North Avenue, XiCheng District, Beijing',
                            'zh'=>'北京市西城区新街口北大街53号'
                        ),
                        'scale'=>array(
                            'en'=>'Total construction area 10885M² (Ground area 7790M², Underground area 3095M²)',
                            'zh'=>'总建筑面积10885M² （地上7790M²，地下3095M²）'
                        ),
                        'time'=>array(
                            'en'=>'2012',
                            'zh'=>'2012'
                        ),
                        'schedule'=>array(
                            'en'=>'Conceptual Design',
                            'zh'=>'概念设计'
                        )
                    ),
                    'infodetail'=>array(
                        'en'=>'Light-Painting<br>
						Light to perceive, for beauty<br>
						Western painting is all about pursuit and control of light. From sketch to oil painting, even traditional Chinese painting, Mr.XuBeihong commits his lifetime to find and create beauty, recording shape and expression changes delicately under the light.
						To control and create light is also the intent of a high quality memorial space.<br><br>

						Courtyard-People<br>
						A courtyard to stay, for the memory<br>
						Leave the sculpture and pines in the site and make it into an entrance and path for the exhibition, extending into the building and become a quiet and peaceful memorial garden. With the surroundings it constitutes the memorial space for Mr.XuBeihong’s life, also for the art and spirit he leaves behind.',
                        'zh'=>'光————绘画<br>
						光，为了感受美<br>
						对光线的追求与把握是西方绘画的根本。用尽一生求真求精求美的徐悲鸿先生，从素描到油画乃至后来的国画，把光线下细微的形体与表情变化准确地记录在了画纸上。
						对光线的控制与营造同样也是高品质纪念馆空间所追求的。<br><br>

						庭院————人<br>
						停留，为了纪念<br>
						将场地中现状的雕像连同旁边的松树一起保留，形成新馆的展览入口和步道，并将其向建筑内部延伸，形成静谧安详的纪念性庭院。与围绕其周边展开的展厅构成了缅怀徐悲鸿先生人生轨迹的精神世界的场所，以及其坚强而勤奋的一生留给后人的巨大艺术和精神财富。',
                        'no_text_indent'=>1
                    )
                ),
                8=>array(
                    'infotit'=>array(
                        'title'=>array(
                            'en'=>'Geographic Museum of Shanxi Province',
                            'zh'=>'山西省地质博物馆'
                        ),
                        'location'=>array(
                            'en'=>'Taiyuan, Shanxi Province',
                            'zh'=>'山西省太原市'
                        ),
                        'scale'=>array(
                            'en'=>'31000 M²',
                            'zh'=>'31000 M²'
                        ),
                        'time'=>array(
                            'en'=>'2007',
                            'zh'=>'2007'
                        ),
                        'schedule'=>array(
                            'en'=>'Completed',
                            'zh'=>'完成'
                        )
                    ),
                    'infodetail'=>array(
                        'en'=>'The project includes the Geographic Museum of Shanxi Province, the land resources administration hall and the transaction hall with complex function for industry special exhibition and government affairs.<br>
						The shape of the architecture is generated naturally from the functional characterization of the space, standing on a spiral platform, the exhibition hall is being ring shape, prolate and expanded, comparing the shape of Shanxi Museum on the south, these two buildings interpret flexible and rigid; on the bottom of the building the square volume is for the government affairs hall, transaction hall and the auxiliary offices, the sign of the architecture  is the direct expression of its functional space.',
                        'zh'=>'<p>项目包括地质博物馆、国土资源政务大厅及交易大厅的专项行业展览、政务综合体。</p><p>建筑造型完全由空间的功能表征自然生成，螺旋台地展陈空间形成的环状形体扁长舒展，与南侧山西省博物馆“斗状”外形刚柔相济；底部方形体量为政务大厅、交易大厅及其附属用房，建筑体征亦为其功能空间的直白表达。</p>',
                    )
                ),
                9=>array(
                    'infotit'=>array(
                        'title'=>array(
                            'en'=>'Hanzhong Grand Theater',
                            'zh'=>'天汉大剧院'
                        ),
                        'location'=>array(
                            'en'=>'Hanzhong, Sha’anxi Province',
                            'zh'=>'陕西省汉中市'
                        ),
                        'scale'=>array(
                            'en'=>'59000 M²',
                            'zh'=>'59000 M²'
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
                        'en'=>'The site is located at the border of the old city and the Han River natural landscape zone. The whole piece of the land is designed to a city-class central culture square, the grand theater and another public building with city-class are planned on both sides of the axis. The grand theater is with perceptual connotation, while the other one is the house of wisdom with a rational culture meaning. On both sides of the axis, one is round and one is square, which define the logical relationship of related construction, as well as reinforce the supreme position of principal axis.<br>For architectural design, it extracts representative cultural carrier —— Wooden and Bamboo Slips of Han Dynasty, as its design intention, we take homogenized enclosing to the whole shape, to forming its overall effect of rich rhythm and remarkable. It adopts sheet metal and glass curtain wall etc. this kind of modern construction materials for the facade, presenting a smart and elegant architectural form.',
                        'zh'=>'<p>地块位于老城区与汉江自然景观带的交界处。将整块用地打造成城市级的中央文化广场，在轴线两侧分别规划了大剧院及另一城市级的公共建筑。一座是偏于感性艺术内涵的大剧院，一座是趋于理性文化深意的智慧殿堂。轴线两侧一圆一方，既明确了相关建筑的逻辑关系，又强化了主体轴线的至尊地位。</p><p>
				建筑设计提取了具有代表性的汉代文化载体——汉简作为设计意象，对整个建筑的造型进行均质化围合，形成了富于律动且卓尔不凡的整体效果。立面采用金属板材及玻璃幕墙等现代建筑材料，体现灵动优雅的建筑形态。</p>'
                    )
                ),
                10=>array(
                    'infotit'=>array(
                        'title'=>array(
                            'en'=>'Shanxi Grand Theater',
                            'zh'=>'山西大剧院'
                        ),
                        'location'=>array(
                            'en'=>'Taiyuan, Shanxi Province',
                            'zh'=>'山西省太原市'
                        ),
                        'scale'=>array(
                            'en'=>'62000 M²',
                            'zh'=>'62000 M²'
                        ),
                        'time'=>array(
                            'en'=>'2007',
                            'zh'=>'2007'
                        ),
                        'schedule'=>array(
                            'en'=>'Conceptual Design',
                            'zh'=>'方案设计'
                        )
                    ),
                    'infodetail'=>array(
                        'en'=>'The project is located in the central part of the Changfeng Cultural and Business District in Taiyuan, Shanxi Province. The project is composed by a grand theater which has a seating capacity of 1600 people and a small theater admits 600 people. After the completion it will become a multi-functional theater which can meet requirement for various large-scale theatrical performances from both domestic and international.<br>
						The concept of the project is the "culture about Shanxi": capture the architecture in the air. The shape of the architecture inherit the traditional intention of "wind", the geometric lines with pure generated from abstract, elegant while rhythmic, which is being with rich visual strain, and become a key landmark can represent the city’s soul.',
                        'zh'=>'项目位于山西省太原市长风文化商务区文化岛的中心位置。项目由一个1600座的大剧院及一个600座的小剧场构成。建成后的山西大剧院将成为可以满足国内及国际多种大型文艺演出的多功能剧场。<br>
						本案立意为“三晋长风”：在空气中捕捉建筑的身影。建筑造型传承“风”的传统意向，抽象出简洁、优美而富于韵律的几何线条，形成丰富的视觉张力，使之成为能够代表城市灵魂的核心标志性建筑。'
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
            'URBAN'=>array(
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
                )
            ),
//            'COMPETITIONS'=>array(),
            'MEDICAL EDUCATION'=>array(
                1=>array(
                    'infotit'=>array(
                        'title'=>array(
                            'en'=>'New Ward Building of Henan Staff’s Hospital',
                            'zh'=>'河南省职工医院新病房楼'
                        ),
                        'location'=>array(
                            'en'=>'Central District of Zhengzhou, Henan Province',
                            'zh'=>'河南省郑州市中心区'
                        ),
                        'scale'=>array(
                            'en'=>'32803 M²',
                            'zh'=>'32803 M²'
                        ),
                        'time'=>array(
                            'en'=>'2009',
                            'zh'=>'2009'
                        ),
                        'schedule'=>array(
                            'en'=>'Completed',
                            'zh'=>'完成'
                        )
                    ),
                    'infodetail'=>array(
                        'en'=>'To create a transparent, wide sphere of version green ecological space in the limited area, with the best ventilation, best lighting and the best field of version, to create the interior architectural environment to be bright, transparent, warm, comfortable, relaxed and ecological.
						Environmental protection and energy conservation: to use energy-saving environmental protection, easy cleaning and maintenance construction materials, with considering the external wall insulation, air conditioning and heating, water supply and drainage and other multiple factors, in order to reduce the operation and maintenance cost of the architecture while saving the one time investment cost at the same time, to achieve a sustainable development.<br>
						For the shape of the architecture, a techniques of interlude is took to the large volume of the architecture which make it grand and magnificent; while the horizontal line is organized on windowing form, which effectively increase the lighting area, and the orderly concave convex change on the window-sill and upright column, to achieve rich lighting features, to improve the sense of sculptural of the architecture.',
                        'zh'=>'在有限的用地环境中创造出更空透、视野更开阔的绿色生态空间；最佳的通风，最佳的采光和最佳的视野，创造一个明亮、通透、温馨、轻松、生态的建筑内部环境。<br>
					　　环保节能：采用节能环保易清洁维护的建筑材料，并且通过对外墙保温、空调及采暖形式、给排水等多重因素的考虑，在节约一次投资成本的同时，降低建筑的使用及维护费用，达到可持续发展的要求。<br>
						本案造型设计采用大体量穿插手法，气势磅礴；以横线条组织开窗形式，有效增加采光面积，利用窗槛、窗台和立柱有序地凹凸变化，形成丰富的光影效果，提高建筑的雕塑感。'
                    )
                ),
                2=>array(
                    'infotit'=>array(
                        'title'=>array(
                            'en'=>'HuNan ChangDe XiangYa Hospital',
                            'zh'=>'湖南常德湘雅医院'
                        ),
                        'location'=>array(
                            'en'=>'ChangDe, HuNan Province',
                            'zh'=>'湖南省常德市'
                        ),
                        'scale'=>array(
                            'en'=>'Total construction area 425575.21 M²',
                            'zh'=>'总建筑面积425575.21 M²'
                        ),
                        'time'=>array(
                            'en'=>'2010',
                            'zh'=>'2010'
                        ),
                        'schedule'=>array(
                            'en'=>'Under Construction',
                            'zh'=>'在建'
                        )
                    ),
                    'infodetail'=>array(
                        'en'=>'Overall planning, establishing a scientific and reasonable macro flow. People-oriented, creating a beautiful landscape of healthcare environment and ecological environment, to achieve resource sharing of architectural function of each medical treatment department, and create economic, efficient, convenient environment for medical treatment, according to the overall design concept, we emphasize the space concept as an ecological environment and human oriented, focus on mutual penetration on outdoor space and indoor space of the building, let people have a panoramic view of the garden and vegetation in any place of the building. For single building design, we leave the best lighting and the best vision to the patients, to create a bright and spacious, comfortable and relaxed, ecological internal environment.',
                        'zh'=>'统筹规划，构建科学合理的宏观流程。以人为本，创建优美的医疗景观环境和生态环境。形成医院医疗区各建筑功能的资源共享，创造经济、高效、便捷的就医环境，按医院整体构思概念，突出院区生态环境与人性化的空间理念，注重建筑的室外空间与室内空间的相互渗透，利用外部空间的花园、植被，在建筑内部人可停留的地方，尽量开阔视野，让室外的生态环境尽收眼底。在建筑单体设计中，把最佳的采光，最佳的视野提供给病患者，创建一个明亮通透、舒适、轻松、生态的建筑内部环境。'
                    )
                ),
                3=>array(
                    'infotit'=>array(
                        'title'=>array(
                            'en'=>'The People’s Hospital of Jilin City',
                            'zh'=>'吉林市人民医院'
                        ),
                        'location'=>array(
                            'en'=>'Jilin City, Jilin Province',
                            'zh'=>'吉林省吉林市'
                        ),
                        'scale'=>array(
                            'en'=>'30300 M²',
                            'zh'=>'30300 M²'
                        ),
                        'time'=>array(
                            'en'=>'2009',
                            'zh'=>'2009'
                        ),
                        'schedule'=>array(
                            'en'=>'Conceptual Design',
                            'zh'=>'方案设计'
                        )
                    ),
                    'infodetail'=>array(
                        'en'=>'Located at No.36 Zhongxing Street, Changyi District, Jilin city of Jilin Province, the largest general hospital with Third-Grade Class-A hospital in Jilin area, is specialized in medical treatment, teaching, scientific research, health care, in Sep 2009, the hospital was extended on its original site, integrated with Second Central Hospital of Jilin City, and became this People’s Hospital of Jilin City, which is on the top of the list of ten great projects of city government. We are mainly responsible for the design of ward building and comprehensive building.<br>
						The total construction area is 30300 square meters, 15 floors on ground, with 1 basement, total height of the building is 59.1 meters, with total 434 hospital beds.',
                        'zh'=>'本项目位于吉林省吉林市昌邑区中兴街36号。是集医疗、教学、科研、预防保健为一体的吉林地区最大的综合性三级甲等医院。2009年9月在医院原址改扩建设，与市医院整合组建人民医院，是市政府十大工程项目之首。我所主要负责病房楼及综合楼设计。<br>
						本案总建筑面积30300平方米，地上15层，地下1层，建筑总高度59.1m，共434个床位 。'
                    )
                ),
                4=>array(
                    'infotit'=>array(
                        'title'=>array(
                            'en'=>'Jingwei Comprehensive Building of Second Xiangya Hospital of Central South University',
                            'zh'=>'湖南湘雅附二医院精卫综合楼'
                        ),
                        'location'=>array(
                            'en'=>'Changsha, Hunan Province',
                            'zh'=>'湖南省长沙市'
                        ),
                        'scale'=>array(
                            'en'=>'43013 M²',
                            'zh'=>'43013 M²'
                        ),
                        'time'=>array(
                            'en'=>'2010',
                            'zh'=>'2010'
                        ),
                        'schedule'=>array(
                            'en'=>'Conceptual Design',
                            'zh'=>'方案设计'
                        )
                    ),
                    'infodetail'=>array(
                        'en'=>'The overall planning is based on "patient centered" as design principle. The total construction area is compact, with land conservation. Circulation: create different area for doctor and patient, which is easy for a systematic management. With full consideration for the needs of paramedics, we provide good environment for work, rest and communication.<br>
						Humanization design: ordered partitions to the vertical transportation system of ward building. 80% of ward facing to south, while the public activity area are all arranged in good direction, so the patient can enjoy sunshine easily. For the space, with the shape of the space, the color and the light and shadow, we create the interior space to be smooth, rhythmic, elegant, interesting, while linking virtual with reality.',
                        'zh'=>'在总体规划布局上，落实了“以病人为中心”的设计原则。建筑总平面较为紧凑，用地经济。交通流线：医患有效分区、分流便于医院系统管理。充分考虑医护人员的需求，提供良好的工作、休息和交流环境。<br>
    					人性化设计：病房楼竖向交通系统有序分区。南向病房数达 80%，公共活动场均设置于良好朝向，使病人享受日照。在空间的处理上，通过空间的形态、色彩和光影，使整个大厦内形成流畅的、有节奏、虚实相结合，气派而又有趣味的空间。'
                    )
                ),
                5=>array(
                    'infotit'=>array(
                        'title'=>array(
                            'en'=>'Taiyuan No.2 Foreign Language School Architectural Design',
                            'zh'=>'山西省太原市第二外国语学校方案设计'
                        ),
                        'location'=>array(
                            'en'=>'Taiyuan, Shanxi Province',
                            'zh'=>'山西省太原市'
                        ),
                        'scale'=>array(
                            'en'=>'64950 M²',
                            'zh'=>'64950 M²'
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
                        'en'=>'To embody "new education" architectural features, create "new concept" on education facility system , develop multiple functions, and establish regional architecture new image with the city public facilities.<br>
						To embody the Taiyuan city cultural, and correspond with the "culture vein" in that old city.<br>
						To establish "green building in the campus" measures, which to be beneficial to students’ health, to improve learning efficiency; to cultivate citizens with the concept of sustainable development; and can reduce the operation cost of the school.',
                        'zh'=>'体现“新教育”建筑特点，打造教育设施系统“新理念”，学校功能多元拓展，与城市公共设施一起树立区域城市建筑新形象。<br>
					　　体现太原市文化内涵，并与该地段特有的“府城文脉”相契合。<br>
						建立校园“绿色建筑”措施，实施绿色建筑有利于学生的健康和学习效率；有利于培养具有可持续发展观念的公民；可降低学校的日常运作成本。'
                    )
                )
            )
        );


        $projectsCover = array(
            'CULTURAL SPORTS'=>array(
                1=>array(
                    'cover'=>'images/cultural/1/p-6.jpg',
                ),
                3=>array(
                    'cover'=>'images/cultural/3/p-1.jpg',
                ),
                2=>array(
                    'cover'=>'images/cultural/2/p-1.jpg',
                ),
                4=>array(
                    'cover'=>'images/cultural/4/p-7.jpg',
                ),
                5=>array(
                    'cover'=>'images/cultural/5/p-1.jpg',
                ),
                6=>array(
                    'cover'=>'images/cultural/6/p-1.jpg',
                ),
                7=>array(
                    'cover'=>'images/cultural/7/p-1.jpg',
                ),
                8=>array(
                    'cover'=>'images/cultural/8/p-7.jpg',
                ),
                9=>array(
                    'cover'=>'images/cultural/9/p-1.jpg',
                ),
                10=>array(
                    'cover'=>'images/cultural/10/p-1.jpg',
                )
            ),
            'COMMERCIAL'=>array(
                1=>array(
                    'cover'=>'images/commercial/1/p-1.jpg',
                ),
                2=>array(
                    'cover'=>'images/commercial/2/p-1.jpg',
                ),
                3=>array(
                    'cover'=>'images/commercial/3/p-1.jpg',
                ),
                4=>array(
                    'cover'=>'images/commercial/4/p-1.jpg',
                ),
                5=>array(
                    'cover'=>'images/commercial/5/p-1.jpg',
                )
            ),
            'OFFICE'=>array(
                1=>array(
                    'cover'=>'images/office/1/p-1.jpg',
                ),
                2=>array(
                    'cover'=>'images/office/2/p-1.jpg',
                ),
                3=>array(
                    'cover'=>'images/office/3/p-1.jpg',
                ),
                4=>array(
                    'cover'=>'images/office/4/p-1.jpg',
                ),
                5=>array(
                    'cover'=>'images/office/5/p-1.jpg',
                ),
                6=>array(
                    'cover'=>'images/office/6/p-1.jpg',
                ),
                7=>array(
                    'cover'=>'images/office/7/p-1.jpg',
                ),
                8=>array(
                    'cover'=>'images/office/8/p-2.jpg',
                ),
                9=>array(
                    'cover'=>'images/office/9/p-1.jpg',
                ),
                10=>array(
                    'cover'=>'images/office/10/p-1.jpg',
                ),
            ),
            'RESIDENTIAL'=>array(
                1=>array(
                    'cover'=>'images/residential/1/p-1.jpg',
                ),
                2=>array(
                    'cover'=>'images/residential/2/p-1.jpg',
                ),
                3=>array(
                    'cover'=>'images/residential/3/p-3.jpg',
                ),
                4=>array(
                    'cover'=>'images/residential/4/p-1.jpg',
                ),
                5=>array(
                    'cover'=>'images/residential/5/p-1.jpg',
                )
            ),
            'MEDICAL EDUCATION'=>array(
                1=>array(
                    'cover'=>'images/medical/1/p-1.jpg',
                ),
                2=>array(
                    'cover'=>'images/medical/2/p-1.jpg',
                ),
                3=>array(
                    'cover'=>'images/medical/3/p-1.jpg',
                ),
                4=>array(
                    'cover'=>'images/medical/4/p-1.jpg',
                ),
                5=>array(
                    'cover'=>'images/medical/5/p-1.jpg',
                )
            ),
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
            ),
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
            $id = DB::table('projects_category_zh')->insertGetId([
                'name' => $v['zh'],
                'sort_order' => $k
            ]);
            DB::table('projects_category_en')->insert([
                'category_id' => $id,
                'name' => $v['en']
            ]);

            // projects
            $i = 0;
            foreach ($projectsData as $kp => $vp) {
                if ($kp == $v['en']) {
                    foreach ($vp as $kpp => $vpp) {
                        $cover = $projectsCover[$kp][$kpp]['cover'];
                        $data = [
                            'category_id' => $id,
                            'cover_url' => $cover,
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
                                'thumb_url' => $vimg['little'],
                                'image_url' => $vimg['big'],
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
        if($cat == 'COMMERCIAL'){
            $num = 5;
            switch ($group) {
                case 1: $num = 9; break;
                case 2: $num = 5; break;
                case 3: $num = 1; break;
                case 4: $num = 4; break;
                case 5: $num = 2; break;
            }
        }elseif($cat == 'OFFICE'){
            $num = 5;
            switch($group){
                case 1: $num = 6; break;
                case 2: $num = 5; break;
                case 3: $num = 5; break;
                case 4: $num = 3; break;
                case 5: $num = 9; break;
                case 6: $num = 14; break;
                case 7: $num = 10; break;
                case 8: $num = 7; break;
                case 9: $num = 10; break;
                case 10: $num = 18; break;
            }
        }elseif($cat == 'RESIDENTIAL'){
            switch ($group) {
                case 1: $num = 8; break;
                case 2: $num = 14; break;
                case 3: $num = 9; break;
                case 4: $num = 8; break;
                case 5: $num = 6; break;
            }
        }elseif($cat == 'CULTURAL SPORTS'){
            $num = 6;
            switch($group){
                case 1: $num = 35; break;
                case 2: $num = 18; break;
                case 3: $num = 10; break;
                case 4: $num = 18; break;
                case 5: $num = 9; break;
                case 6: $num = 13; break;
                case 7: $num = 7; break;
                case 8: $num = 12; break;
                case 9: $num = 15; break;
                case 10: $num = 3; break;
            }
        }elseif($cat == 'INTERIOR'){
            $num = 6;
            switch ($group) {
                case 1: $num = 16;break;
                case 2: $num = 2;break;
                case 3: $num = 11;break;
            }
        }elseif($cat == 'URBAN'){
            switch($group){
                case 1: $num = 0; break;
                case 2: $num = 6; break;
                case 3: $num = 21; break;
                case 4: $num = 5; break;
                case 5: $num = 5; break;
                case 6: $num = 7; break;
                case 7: $num = 11; break;
            }
        }elseif($cat == 'COMPETITIONS'){
            switch($group){
                case 1: $num = 0; break;
                case 2: $num = 7; break;
            }
        }elseif($cat == 'MEDICAL EDUCATION'){
            switch($group){
                case 1: $num = 7; break;
                case 2: $num = 6; break;
                case 3: $num = 6; break;
                case 4: $num = 6; break;
                case 5: $num = 12; break;
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
                'little' => 'images/'.$cat.'/'.$group.'/p-'.$i.'.jpg',
                'big' => 'images/'.$cat.'/'.$group.'/pd-'.$i.'.jpg'
            ];
        }
        return $imgsArr;
    }
}
