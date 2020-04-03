<?php

namespace App\Http\Controllers;

use App\TinhThanh;
use App\QuanHuyen;
use App\XaPhuong;
use Illuminate\Http\Request;

class HanhChinhController extends Controller
{
    //
    public function home(){
        $tinhthanhs = TinhThanh::all();
        return view('show.home',compact('tinhthanhs'));
    }
    
    public function tinhthanh($id)
    {
        $tinhthanh = TinhThanh::where('id', $id)->firstOrFail();
        $quanhuyens = QuanHuyen::where('tinhthanh_id', $id)->get();
        return view('show.tinhthanh', compact('tinhthanh','quanhuyens'));
    }

     public function quanhuyen($id)
     {
         $quanhuyen = QuanHuyen::where('id', $id)->firstOrFail();
        return view('show.quanhuyen', compact('quanhuyen'));
    }

    public function xaphuong($id)
    {
        $xaphuong = XaPhuong::where('id', $id)->firstOrFail();
        return view('show.xaphuong', compact('xaphuong'));
    }
}
