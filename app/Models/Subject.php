<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public $timestamps = false;

    public function blogs(){
        return $this->belongsToMany(Blog::class, 'subject_blogs');
    }

    public function links(){
        
        return $this->hasMany(Link::class)->orderBy('sort_order');
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
