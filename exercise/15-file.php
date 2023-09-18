<?php

class File{
    public $name;
    public $size;

    public function __construct($name, $size){
        $this->name = $name;
        $this->size = $size;


    }

    public static function calculatesize($files){
        $totalsize = 0;

        foreach($files as $file){
            if($file instanceof File){
                $totalsize += $file->size;
            }
        }
        return $totalsize;
    }
}

$obj1 = new File("file1", 100);
$obj2 = new File("file2", 200);
$obj3 = new File("file3", 300);

$array = [$obj1, $obj2, $obj3];

echo File::calculatesize($array);