<?php

namespace App\Http\Controllers\Admin;
use App\Models\Channel;
use Illuminate\Http\Request;

class ChannelController extends CrudController
{
    public function create(Request $request){
        
        $validated = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'required'
        ]);
        //estamops guardadn
        $repo = new Channel;
        $repo->name = $request['name'];
        $repo->description = $request['description'];
        $repo->image = $request['image'];    
        
        dd($repo);
        $this->save($request, $repo);
    }
}