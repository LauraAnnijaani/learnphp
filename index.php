<?php

class Box {
    public $height = 0;
    private $width = 0;
    protected $length = 0;

    public static $count = 0;

    public static function cool(){
        var_dump(self::$count);
        var_dump(self::class);
        var_dump(static::class);
    }

    public function __construct($height=0, $width=0, $length=0) {
        $this->height = $height;
        $this->width = $width;
        $this->length = $length;
    }
    public function test(){
        var_dump($this->length);
    }
    public function setWidth($width){
        if(is_numeric($width) && $width > 0){
            $this->width = $width;
        } else {
            throw new Exceprion('Width needs to be number and bigger then 0');
        }
    }

    public function volume(){
        return $this->height * $this->width * $this->length;
    }
}

class MetalBox extends Box {
    public $material = 'Metal';
    public $weightPerUnit = 2;

    public function test(){
        var_dump($this->length);
    }

    public function mass(){
        return $this->volume() * $this->weightPerUnit;
    }
}

class IronBox extends MetalBox {
    public $material = 'Iron';
    public $weightPerUnit = 3;
}


Box::$count = 1;
var_dump(Box::$count);

Box::$count = 2;
var_dump(Box::$count);

var_dump(Box::$count);
var_dump(MetalBox::$count);
var_dump(Box::class);
Box::cool();

MetalBox::cool();