<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;


class Image extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function partner(){
        return $this->belongsTo(Partner::class);
    }

    public function blog(){
        return $this->belongsTo(Blog::class);
    }

    public function partner_image()
    {
        if ($this->name) {
            return Storage::url('public/partners/' . $this->name);
        } else {
            return asset('img/about.png');
        }
    }

    public function blog_image()
    {
        if ($this->name) {
            return Storage::url('public/blogs/' . $this->name);
        } else {
            return asset('public/img/about.jpg');
        }
    }

}
