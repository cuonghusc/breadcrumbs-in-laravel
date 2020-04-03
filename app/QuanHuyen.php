<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuanHuyen extends Model
{
    //
    protected $fillable = [
        'name',
    ];

    protected $date = [
        'created_at',
        'updated_at',
    ];

    public function xaphuong()
    {
        return $this->hasMany(XaPhuong::class);
    }

    public function tinhthanh()
    {
        return $this->belongsTo(TinhThanh::class);
    }
}
