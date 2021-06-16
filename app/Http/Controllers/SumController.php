<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
    public function create(){
        return view('class.create');
    }
    public function store(Request $req){
        $name = $req->get('name');
        // echo $name;
        DB::insert('INSERT INTO class2(name) value (?)', [
            $name
        ]);
    }
}
