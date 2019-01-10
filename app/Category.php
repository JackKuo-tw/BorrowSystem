<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //

    protected $table = 'categories';

    protected $fillable = [
        'cname',
        'ename',
    ];

    public function items(){
        return $this->hasMany(Item::class,'cid', 'id');
    }

    public static function total()
    {
        return static::all()->count();
    }

    public function all_items_name()
    {
        $q = $this->items;
        $a = "";
        foreach ($q as $i)
        {
            $a .= $i->cname . PHP_EOL;
        }
        return $a;
    }
}
