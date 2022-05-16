<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    // categoryテーブルに属する
    public function category(){
        return $this->belongsTo('App\Models\Category');
    }

    protected $fillable = ['user_id','name'];

    public static $rules = [
        'image_name'=> 'image|file',
    ];

    protected $dates = [
        'bought_at',
    ];
    
}
