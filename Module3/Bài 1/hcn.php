<?php
class HCN{
    public $chieu_rong = 0;
    public  $chieu_dai = 0;

    // phuong thuc khoi tao 
    public function __construct($cd,$cr) {
        $this-> chieu_dai = $cd;
        $this-> chieu_rong = $cr;
        
    }
    public  function dien_tich(){
        $dien_tich = ( $this->chieu_dai * $this->chieu_rong );
        return $dien_tich;
    }

    public function chu_vi (){
        $chu_vi = ( $this->chieu_rong + $this->chieu_dai ) * 2;
        return $chu_vi;
    }
    public function hien_thi(){
        $str = "hinh chu nhat co";
        $str .= "<br>Chieu dai la : ". $this->getChieu_dai();
        $str .= "<br>Chieu rong la : ". $this->chieu_rong;
        return $str;
    }   
     //getter cac thuoc tinh
    public function getChieu_rong() {
        return $this ->chieu_rong;
    }
    public function getChieu_dai() {
        return $this ->chieu_dai;
    }//setter cac thuoc tinh
    public function setChieu_rong($value){
        $this ->chieu_rong = $value;
    }
    public function setChieu_dai($value){
        $this ->chieu_dai = $value;
    }
}
$hcn1 = new HCN(20,10);
// thiet lap gia tri tinh chieu rong
$hcn1 -> chieu_rong = 15;
// thiet lap gia tri tinh chieu dai
$hcn1 -> chieu_dai = 25;
// phuong thuc tinh chu vi 
echo $hcn1 -> chu_vi ();
echo "<br>";
// goi phuong thuc hien thi 
echo $hcn1 -> hien_thi ();


// phuong thuc tinh dien tich
echo $hcn1 -> dien_tich ();
echo '<pre>';
print_r($hcn1);
echo '</pre>';