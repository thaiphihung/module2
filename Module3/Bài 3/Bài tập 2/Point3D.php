<?php
class Point3D extends Point2D{
    public $z;
    public function __construct($x,$y,$z){
        parent::__construct($x,$y);
        $this->z = $z;
    }
    public function getZ(){
        return $this->z;
    }
}