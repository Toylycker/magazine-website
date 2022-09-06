<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $fillable = [
        'name',
        'name_ru',
        'address',
        'description',
        'description_ru',
        'address',
        'sort_order',
        'category_id'
    ];

    public function category(){
        return $this->belongsTo(Blog::class);
    }


    public function links(){
        
        return $this->hasMany(Link::class)->orderBy('sort_order');
    }

    public function subscriptions(){
        
        return $this->hasMany(Subscription::class);
    }

    public function images(){

        return $this->hasMany(Image::class);
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
