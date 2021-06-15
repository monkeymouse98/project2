<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SumController extends Controller
{
    public function sum($a,$b){
        return view('sum',[
            "a" => $a,
            "b" => $b
        ]);
    }
    public function bao($name,$id){
        return view('bao',[
            "ten" => $name,
            "id" => $id
        ]);
    }
    public function menu(){
        $ds = ["Trang chủ","Trang cá nhân","Thông tin"];
        $url = ["/sinhvien/Xuan","/sum/9/21","/bao/reyio/43"];
        return view('menu',[
            "menu" => $ds,
            "url" => $url
        ]);
    }
}
