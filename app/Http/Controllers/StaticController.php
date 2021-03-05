<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticController extends Controller
{
    public function create($item){
       
        return view('admin.form.create')->with('item', $item);    
    }
    public function profile(){
        dd('ee');
        return view('admin.profile');
    }
}