<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Label extends Model
{
    //
    protected $table      = 'labels';

    protected $fillable = [
        'sid',
        'mark'
    ];

    public static function listened()
    {
        return static::all()->where('mark', 'listened');
    }

    public static function add($sid, $mark)
    {
        $q = new Label;
        $q->sid = $sid;
        $q->mark = $mark;
        $q->save();
        return $q;
    }
}
