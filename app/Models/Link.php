<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class link extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public $timestamps = false;


    public function worker(){
        return $this->belongsTo(Work::class);
    }

    public function partner(){
        return $this->belongsTo(Partner::class);
    }

    public function blog(){
        return $this->belongsTo(Blog::class);
    }
}
