<?php

namespace App\Models;

use App\Traits\UUID;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class City extends Model
{
    use SoftDeletes, UUID, HasFactory;


    protected $fillable = [
        'name',
        'slug',
        'photo'
    ];

    public function gyms(){
        return $this->hasMany(Gym::class);
    }

    
}
