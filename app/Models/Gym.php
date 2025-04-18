<?php

namespace App\Models;

use App\Traits\UUID;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Gym extends Model
{
    use SoftDeletes, UUID, HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'thumbnail',
        'about',
        'open_time_at',
        'close_time_at',
        'is_popular',
        'address',
        'city_id'
    ];

    public function city(){
        return $this->belongsTo(City::class, 'city_id');
    }

    public function gymTestimonials(){
        return $this->hasMany(GymTestimonial::class);
    }

    public function gymFacilities(){
        return $this->hasMany(GymFacility::class);
    }

    public function subscribePackages(){
        return $this->hasMany(SubscribePackage::class);
    }

    public function gymPhotos(){
        return $this->hasMany(GymPhoto::class);
    }
}
