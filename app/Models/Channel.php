<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent;

class Channel extends Model
{
    use HasFactory;
    protected $PATH = 'channel';
    protected $fillable = ['user_id','description', 'title', 'image'];
    protected $table = 'channels';
    

    private function imagePath( $image )
    {
        if (!empty($image)) {
            return asset(self::PATH . $image);
        }
        return false;
    }
    //private function getImageAttribute($image){
    //    return $this->imagePath($image);
    //}
    private function video()
    {
        return $this->hasMany(Video::class, 'video_id', 'id')->get();
    }
    public function add( $data )
    {
        return $this->create($data);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
