<?php

namespace RTKit\File;

trait Operation {

    protected $pathname;

    /**
     * Static instantiator
     *
     * @param string $pathname
     * @return static
     */
    public static function create($pathname) {
        return new static($pathname);
    }

    protected function init($pathname) {
        $this->pathname = ''.$pathname; // "cast" to string
    }
    /**
     * Returns the file extensions
     *
     * @return string the file extension
     */
    public function getExtension() {
        return pathinfo($this->pathname, PATHINFO_EXTENSION);
    }
    /**
     * Returns the filename
     *
     * @return string the filename
     */
    public function getFilename() {
        return basename($this->pathname);
    }

    /**
     * Gets the path without filename
     *
     * @return string
     */
    public function getDirname() {
        return dirname($this->pathname);
    }

    /**
     * Gets the path to the file
     *
     * @return Text
     */
    public function getPathname() {
        return $this->pathname;
    }
}