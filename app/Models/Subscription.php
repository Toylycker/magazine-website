<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Partner;

class Subscription extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function partner(){
        return $this->belongsTo(Partner::class);
    }
}
