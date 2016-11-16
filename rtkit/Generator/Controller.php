<?php

namespace RTKit\Generator;
use RTKit\File\FileIO;

/**
 * Created by PhpStorm.
 * User: rex
 * Date: 19/9/2016
 * Time: 21:11
 */
class Controller {

    public function generate($controllerName, $parentClassName) {
        $parentClassName = $parentClassName ? $parentClassName : 'Controller';

        $rootPath = getcwd();
        $slashPosition = strpos($controllerName, '/');
        $template = file_get_contents($rootPath.'/rtkit/Templates/controller.php');
        $fileName = $rootPath.'/app/Http/Controllers/';
        $currentDir = $rootPath.'/app/Http/Controllers';

        $namePath = '';
        $fileName .= $controllerName.'.php';
        $className = $controllerName;

        if ($slashPosition !== false) {

            $tmp = explode('/', $controllerName);
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

//        echo $namePath."\n";
//        echo $fileName."\n";
        
        $template = str_replace('_namePath_', $namePath, $template);
        $template = str_replace('_className_', $className, $template);
        $template = str_replace('_parentClassName_', $parentClassName, $template);

        $fileIO = new FileIO($fileName);
        $fileIO->rewrite($template);
//        file_put_contents($fileName, $template);
        chmod($fileName, 0755);
    }

}