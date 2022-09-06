<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    // public $timestamps = false;
    protected $hidden = ['pivot'];

    public function links(){

        return $this->hasMany(Link::class)->orderBy('sort_order');
    }

    public function images(){

        return $this->hasMany(Image::class);
    }

    public function subjects(){
        return $this->belongsToMany(Subject::class, 'subject_blogs');
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
}


