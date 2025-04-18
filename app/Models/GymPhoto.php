<?php

namespace App\Models;

use App\Traits\UUID;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class GymPhoto extends Model
{
    use SoftDeletes, UUID, HasFactory;

    protected $fillable = [
        'photo',
        'gym_id'
    ];

    public function gym(){
        return $this->belongsTo(Gym::class, 'gym_id');
    }
}
