<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    //
    protected $table = 'items';

    protected $fillable = [
        'cname',
        'ename',
        'description',
        'cid'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'cid', 'id');
    }

    public static function total()
    {
        return static::all()->count();
    }
}
