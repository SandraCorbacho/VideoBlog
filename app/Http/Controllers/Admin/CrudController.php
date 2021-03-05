<?php

namespace App\Http\Controllers\Admin;

use App\Models\Channel;
use Illuminate\Http\Request;

class CrudController
{
    public function save(Request $request, $repo){
        $data = $request->all();
        //dd($data['type']);
        $table = $data['type'];
        $this->storage($data['image'], $table);
        
        $repo->save()
    }
    public function storage($image, $table){
        \Storage::disk('public2')->put( $table.'/', $image);
    }
}