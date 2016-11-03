<?php

namespace RTKit\File;
/**
 * Created by PhpStorm.
 * User: rex
 * Date: 19/9/2016
 * Time: 21:44
 */
class FileIO {

    private $fileName;

    public function __construct(String $fileName) {
        $this->fileName = $fileName;
    }

    public function append($content) {
        $fileHandler = fopen($this->fileName, 'a');
        fwrite($fileHandler, $content);
        fclose($fileHandler);
    }

    public function rewrite($content) {
        $fileHandler = fopen($this->fileName, 'w');
        fwrite($fileHandler, $content);
        fclose($fileHandler);
    }

    public function setFile($fileName) {
        $this->fileName = $fileName;
    }

}