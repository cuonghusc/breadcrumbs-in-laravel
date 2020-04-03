<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TinhThanh extends Model
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
        return $this->hasMany(QuanHuyen::class);
    }
}
