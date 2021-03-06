<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Channel;
use App\Models\User;

class ProfileController
{
 
    public function index(Request $request)
    {
            $user = \Auth::User();         
            
            return view('admin.profile',[
                'channel' => $user->channel
            ]);
       
    }
}
