<?php

namespace App\Models;

use App\Traits\UUID;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class City extends Model
{
    use SoftDeletes, UUID, HasFactory;


    protected $fillable = [
        'name',
        'slug',
        'photo'
    ];

    public function setNameAttribute($value){
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }

    public function gyms(){
        return $this->hasMany(Gym::class);
    }

    
}
