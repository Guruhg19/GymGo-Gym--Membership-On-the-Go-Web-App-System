<?php

namespace App\Models;

use App\Traits\UUID;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Facility extends Model
{
    use SoftDeletes, UUID, HasFactory;

    protected $fillable = [
        'name',
        'thumbnail',
        'is_open'
    ];

    public function gymFacilities(){
        return $this->hasMany(GymFacility::class);
    }

}
