<?php

class FileGen {
    public $files;

    function fixture(array $data){
        $tmp = tempnam("/tmp", "sumlines");
        file_put_contents($tmp, implode("\n", $data));

        $this->files[] = $tmp;
        return $tmp;
    }

    function cleanup(){
        foreach ($this->files as $file){
            unlink($file);
        }
    }
}
