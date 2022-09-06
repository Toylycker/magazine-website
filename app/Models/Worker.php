<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;


class Worker extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public $timestamps = false;


    public function links(){
        
        return $this->hasMany(Link::class);
    }


    public function name()
    {
        if (app()->isLocale('ru')) {
            return $this->name_ru ?: $this->name;
        }else{
            return $this->name;
        }
    }
    public function description()
    {
        if (app()->isLocale('ru')) {
            return $this->description_ru ?: $this->description;
        }else{
            return $this->description;
        }
    }

    public function image()
    {
        if ($this->image) {
            return Storage::url('public/workers/' . $this->image);
        } else {
            return asset('public/img/about.jpg');
        }
    }
}
