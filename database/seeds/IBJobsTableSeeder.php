<?php

use Illuminate\Database\Seeder;

class IBJobsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $zh = [
            0 => [
                'title'=>'建筑师',
                'position'=>'全职',
                'location'=>'北京',
                'requirement'=>'<li>建筑学相关专业，硕士及以上学历；</li><li>具备3年以上相关工作经验，具有出色的设计天赋；</li><li>具有创造性、原创性及主动性；</li><li>擅长工作的组织，能准确理解、把握项目及业主需求，善于沟通协调；</li><li>愿意在北京工作一年以上；</li><li>杰出的软件技能：AutoCAD, PhotoShop, SketchUp, Rhino, Illustrator, InDesign, 实体模型等充分表达设计理念；</li><li>出色的沟通组织能力，团队协作能力；</li><li>熟练的英文书写及表达能力，另外具备中文沟通能力者佳。</li>',
                'other'=>'请将您的求职信、简历及作品集以PDF格式发送至：bplat_hr@outlook.com。<br>邮件标题为：“职位申请-建筑师”。<br>'
            ],
            1 => [
                'title'=>'建筑实习生',
                'position'=>'至少6个月',
                'location'=>'北京',
                'requirement'=>'<li>建筑学相关专业，本科及以上学历。具有专业工作经验的人优先考虑；</li><li>具有良好的专业技术水平；</li><li>具有创造性、原创性及主动性；</li><li>实习期至少为六个月；</li><li>良好的软件技能：AutoCAD, PhotoShop, SketchUp, Rhino, Illustrator, InDesign等；</li><li>良好的沟通能力，团队协作能力；</li><li>在复杂环境下工作积极主动、自律，且自信；</li><li>熟练的英文书写及表达能力，另外具备中文沟通能力者佳；</li><li>准确、准时、整洁、实践能力。</li>',
                'other'=>'请将您的求职信、简历及作品集以PDF格式发送至：bplat_hr@outlook.com。<br>请在邮件中写明您的预计到岗时间。<br>邮件标题为：“职位申请-建筑实习生”。'
            ]
        ];

        $en = [
            0 => [
                'title'=>'Architect',
                'position'=>'Full time',
                'location'=>'Beijing',
                'requirement'=>'<li>Graduate in Architecture or related fields, master’s degree or equivalent;</li><li>More than 3 years relevant work experience, Strong design talent;</li><li>Creative, innovative and with initiative; </li><li>Be good at organizing and coordinating, can understand clearly about both project’s and customer’s requirements, strong communication skill; </li><li>Willing to work in Beijing for at least one year;</li><li>Excellent skills in AutoCAD, PhotoShop, SketchUp, Rhino, Illustrator, InDesign, physical model etc, to fully express design ideas;</li><li>Excellent communication and organization skills; Good team player;</li><li>Fluency in written and spoken English, Chinese Mandarin is a plus.</li>',
                'other'=>'Please send your letter, CV and Portfolio as PDF to: bplat_hr@outlook.com.<br>The title of E-mail could be "Application for architect position".'
            ],
            1 => [
                'title'=>'Internship',
                'position'=>'At least 6 months',
                'location'=>'Beijing',
                'requirement'=>'<li>Graduate in Architecture or related fields, bachelor’s degree or above. Applicants with professional experiences are preferred;</li><li>Good professional skills; </li><li>Creative, innovative and initiative; </li><li>The internship will have a minimum duration of six months; </li><li>Good knowledge of AutoCAD, PhotoShop, SketchUp, Rhino, Illustrator, InDesign, etc;</li><li>Good communication skill; Good team player;</li><li>Proactive, self-disciplined and confident in a complex environment</li><li>Good knowledge of English, Chinese Mandarin is a plus.</li><li>Accurate, punctual, clean and hands-on.</li>',
                'other'=>'Please send your letter, CV and Portfolio as PDF to: bplat_hr@outlook.com.<br>It is necessary to mention the time you are available to start internship at Platform B.<br>The title of E-mail could be "Application for internship position".'
            ]
        ];

        foreach ($zh as $k => $val) {
            $val['sort_order'] = $k;
            $id = DB::table('jobs_zh')->insertGetId($val);
            $tmp = $en[$k];
            $tmp['job_id'] = $id;
            DB::table('jobs_en')->insertGetId($tmp);
        }
    }
}
