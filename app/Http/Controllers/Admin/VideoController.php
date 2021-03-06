<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Video;


class VideoController extends CrudController
{
    public function create(Request $request){
        $validated = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'active' => 'required',
        ]);
        if(!empty($request['video'])){
            $video = new Video();
                
            $video->channel_id = \Auth::User()->channel->id;
            $video->title = $request['title'];
            $video->description = $request['description'];
            $video->active = $request['active'];

            if($request['video'] != null){
               
                $path = 'video';
                $videoPath = $this->store($request, $path, 'video');

                $video->path = $videoPath;
            }else{
                return back()->withErrors();
            }

            if($request['image'] != null){

                $path = 'photo/video';
                $imagePath = $this->store($request, $path,'image');

                $video->image = $imagePath;
            }
           
            $video->save();
            dd($video);
        }
        dd($request->all());
       
        
        dd('creacion de video');
    }
    public function edit(){
        dd('edidcion del video');
    }
}