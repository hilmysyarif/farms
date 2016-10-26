<?php

namespace RTKit\Generator;
use RTKit\File\FileIO;

/**
 * Created by PhpStorm.
 * User: rex
 * Date: 19/9/2016
 * Time: 21:11
 */
class Route {

    public function generate($routeName) {
        $rootPath = getcwd();
        $slashPosition = strpos($routeName, '/');
        $template = file_get_contents($rootPath.'/rtkit/Templates/route');
        $fileName = $rootPath.'/app/Http/Routes/';
        $currentDir = $rootPath.'/app/Http/Routes';

        $namePath = '';
        $fileName .= $routeName.'.php';
        $className = $routeName;

        if ($slashPosition !== false) {

            $tmp = explode('/', $routeName);
            $left = array_pop($tmp);
            $className = $left;
            foreach ($tmp as $v) {
                $namePath .= '\\'.$v;
                $currentDir .= '/'.$v;

                echo $currentDir."\n";
                if (!is_dir($currentDir))
                    mkdir($currentDir, 0755);
            }

        }

        $template = str_replace('{className}', $className, $template);

        $fileIO = new FileIO($fileName);
        $fileIO->rewrite($template);
        chmod($fileName, 0755);
    }

}