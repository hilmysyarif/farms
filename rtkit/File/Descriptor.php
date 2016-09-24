<?php

namespace RTKit\File;

class Descriptor {

    use Operation;
    

    public function __construct($filename) {
        $this->init($filename);
    }

    /**
     * Tells whether this is a regular file
     *
     * @return boolean Returns TRUE if the filename exists and is a regular file, FALSE otherwise.
     */
    public function isFile() {
        return is_file($this->pathname);
    }

    /**
     * Tells whether the filename is a '.' or '..'
     *
     * @return boolean
     */
    public function isDot() {
        return $this->getFilename() == '.' || $this->getFilename() == '..';
    }

    /**
     * Tells whether this is a directory
     *
     * @return boolean Returns TRUE if the filename exists and is a directory, FALSE otherwise.
     */
    public function isDir() {
        return is_dir($this->pathname);
    }
    
    /**
     * String representation of this file as pathname
     */
    public function __toString() {
        return $this->pathname;
    }
}