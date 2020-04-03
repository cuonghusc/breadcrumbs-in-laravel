<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class XaPhuong extends Model
{
    //
    protected $fillable = [
        'name',
    ];

    protected $date = [
        'created_at',
        'updated_at',
    ];

    public function quanhuyen()
    {
        return $this->belongsTo(QuanHuyen::class);
    }
}
