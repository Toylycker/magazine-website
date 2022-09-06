<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public $timestamps = false;

    public function partners(){
        
        return $this->hasMany(Partner::class);
    }

    
    public function name()
    {
        if (app()->isLocale('ru')) {
            return $this->name_ru ?: $this->name;
        }else{
            return $this->name;
        }
    }
}
