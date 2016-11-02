<?php

/**
 * Province, city, district parser.
 */

namespace App\Http\Controllers\Api\Tasks;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use RTKit\File\FileIO;

class PCDController extends Controller
{
    private $ignores = ['市辖区', '县'];
    private $pattern;
    private $delimiter;
    private $delimiterRepeatTimes = 1;
    private static $blank = ' ';
    private static $chineseBlank = '　';
    private static $delimiteSymbol = '-';

    public function __construct() {
        $this->preparePattern();
    }

    public function index() {
        $this->extractData();
    }

    private function extractData() {
        $file = dirname(__FILE__).DIRECTORY_SEPARATOR.'pcd';
        $data = file_get_contents($file);
        $data = str_replace([self::$blank, self::$chineseBlank], ['', self::$delimiteSymbol], $data);

        $tmp = explode(PHP_EOL, $data);
        array_splice($tmp, 0, 1);
        $tmp = $this->tidyData($tmp);

        $pcdListJs = public_path().DIRECTORY_SEPARATOR.'js'.DIRECTORY_SEPARATOR.'pcd.list.js';
        $pcdListContent = 'var pcdList = '.json_encode($tmp);

        $result = $this->listToTree($tmp);
        $content = 'var pcd = '.json_encode($result);
        $pcdJs = public_path().DIRECTORY_SEPARATOR.'js'.DIRECTORY_SEPARATOR.'pcd.js';

        $fileIO = new FileIO($pcdJs);
        $fileIO->rewrite($content);
        chmod($pcdJs, 0755);

        $fileIO->setFile($pcdListJs);
        $fileIO->rewrite($pcdListContent);
        chmod($pcdListJs, 0755);


        echo $pcdJs.'<br>';
        echo $pcdListJs.'<br>';
    }

    /**
     * @internal param int $delimiterRepeatTimes
     */
    private function increaseDelimiter() {
        $this->delimiterRepeatTimes++;
        $this->preparePattern();
    }


    /**
     *
     */
    private function decreaseDelimiter() {
        if ($this->delimiterRepeatTimes > 1)
            $this->delimiterRepeatTimes--;
        $this->preparePattern();
    }


    private function setDelimiter($number) {
        $this->delimiterRepeatTimes = $number;
        $this->preparePattern();
    }


    /**
     * Construct pattern.
     */
    private function preparePattern() {
        $this->pattern = '/(\d+)(-{'.$this->delimiterRepeatTimes.'})([^-]+)/';
        $this->delimiter = str_repeat(self::$delimiteSymbol, $this->delimiterRepeatTimes);
    }


    /**
     * @param $data
     * @return array
     */
    private function analyseData($data) {
        $tmp = explode($this->delimiter, $data);
        $res = [
            'code' => $tmp[0],
            'name' => $tmp[1]
        ];
        return $res;
    }


    private function tidyData($data) {
//        echo 'data prepare to process:<br>';
//        dump($data);
        // tidy tmp
        $res = [];
        $resCopy = [];
        foreach ($data as $k => $v) {
            if ($v) {
                $delimiter = preg_replace_callback('/[^-]+/', function ($matches) {}, $v);
                $tmp = explode($delimiter, $v);
                $level = strlen($delimiter);

                $value = [
                    'code' => $tmp[0],
                    'name' => $tmp[1],
                    'level' => $level
                ];

                if ($level == 1) {
                    $value['pcode'] = 0;
                } else {
                    if ($level > $res[count($res) - 1]['level']) {
                        // step into its child
                        $value['pcode'] = $res[count($res) - 1]['code'];
                    } else if ($level < $res[count($res) - 1]['level']) {
                        // step into its parent level.
                        $value['pcode'] = $resCopy[$res[count($res) - 1]['pcode']]['pcode'];
                    } else {
                        // the same level.
                        $value['pcode'] = $res[count($res) - 1]['pcode'];
                    }
                }
                $res[] = $value;
                $resCopy[$value['code']] = $value;
            }
        }

//        echo 'resCopy:<br>';
//        dump($resCopy);
        return $res;
    }

    private function listToTree($list) {
        $res = [];
        if (is_array($list)) {
            $refer = [];
            foreach ($list as $k => $v) {
                $refer[$v['code']] =& $list[$k];
            }

            foreach ($list as $k => $v) {
                if ($v['pcode'] == 0) {
                    $res[] =& $list[$k];
                } else {
                    if (isset($v['pcode'])) {
                        $parent =& $refer[$v['pcode']];
                        $parent['children'][] =& $list[$k];
                    }
                }
            }
        }
        return $res;
    }
}
